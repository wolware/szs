<?php

namespace App\Http\Controllers;

use App\Repositories\SportRepository;
use App\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PlayerController extends Controller
{
    protected $sportRepository;

    protected $availableSports = ['Nogomet', 'Košarka', 'Odbojka', 'Rukomet', 'Skijanje', 'Badminton', 'Biciklizam', 'Gimnastika', 'Judo', 'Karate', 'Plivanje', 'Tenis', 'Atletika', 'Aikido'];
    protected $availableTableNames = ['football_players', 'basketball_players', 'volleyball_players', 'handball_players', 'skiing_players', 'badminton_players', 'cycling_players', 'gymnastics_players', 'judo_players', 'karate_players', 'swimming_players', 'tennis_players', 'athletics_players', 'aikido_players'];

    protected $allAttributesInputs = [
        'preferred_leg' => 'label:Primarna noga|type:select|name:preffered_leg|options:Desna noga,Lijeva noga,Obje|default:Izaberite primarnu nogu sportiste',
        'preferred_arm' => 'label:Primarna ruka|type:select|name:preffered_arm|options:Desna ruka,Lijeva ruka,Obje|default:Izaberite primarnu ruku sportiste',
        'rank' => 'label:Rank|type:input|name:rank|placeholder:Unesite trenutni rank sportiste',
        'discipline' => 'label:Disciplina|type:select|name:discipline|options:Kratke pruge,Srednje pruge,Duge pruge,Štafete,Preponske utrke,Brzo hodanje,Koplje,Disk,Kugla,Kladivo,Skok u dalj,Skok s motkom,Troskok,Sedmoboj (žene),Desetoboj (muškarci)|skijanje_options:Slalom,Veleslalom,Spust,Super-veleslalom,Alpska kombinacija,Paralelna natjecanja|default:Izaberite disciplinu sportiste',
        'best_result' => 'label:Najbolji rezultat|type:input|name:best_result|placeholder:Unesite najbolji rezultat sportiste',
        'agent' => 'label:Agent|type:input|name:agent|placeholder:Unesite ime agenta sportiste',
        'position' => 'label:Pozicija|type:input|name:position|placeholder:Unesite poziciju sportiste',
        'competition' => 'label:Takmičenje|type:input|name:competition|placeholder:Unesite ime takmičenja u kojem sportista nastupa',
        //'federation' => 'label:Federacija|type:input|name:federation|placeholder:Unesite trenutni rank sportiste',
        'category' => 'label:Kategorija|type:select|name:category|options:Durmski biciklizam,Brdski biciklizam,BMX|karate_options:Kihon,Kate,Kumite|default:Izaberite kategoriju u kojoj se sportista natječe',
        'market_value' => 'label:Vrijednost|type:input|name:market_value|placeholder:Unseite tržišnu vrijednost sportiste',
        'branch' => 'label:Grana|type:select|name:branch|options:Ritmička gimnastika,Sportska gimnastika|default:Izaberite granu gimnastike',
        'belt' => 'label:Pojas|type:select|name:belt|options:9 Kju Bijeli,8 Kju Žuti,7 Kju Narandžasti,6 Kju Crveni,5 Kju Zeleni,4 Kju Plavi,3 Kju Ljubičasti,2 Kju Smeđi,1 Kju Crni|default:Izaberite pojas sportiste',
        'style' => 'label:Stil|type:select|name:style|options:Slobodni stil,Prsni stil,Leđni stil,Delfin/Leptir stil,Mješovito|default:Izaberite stil plivanja sportiste',
        'distance' => 'lable:Dionica stila|type:input|name:distance|placeholder:Unesite dionicu stila plivača',
        'coach' => 'label:Trener|type:input|name:coach|placeholder:Unesite ime trenera sportiste',
        'best_rank' => 'label:Najbolji rank|type:input|name:best_rank|placeholder:Unesite najbolji rank sportiste',
    ];

    public function __construct(SportRepository $sportRepository) {
        $this->sportRepository = $sportRepository;
    }

    public function displayAddPlayerCategories() {
        $sports = $this->sportRepository
            ->getAllThatCanHavePlayers($this->availableSports);

        return view('athlete.add', compact('sports'));
    }

    public function displayAddPlayer($sport_id) {
        $sport = $this->sportRepository->getById($sport_id);

        // Provjera da li je sport dostupan za dodavanje
        if(!in_array($sport->name, $this->availableSports)){
            abort(404);
        }

        $keyOfSport = array_search($sport->name, $this->availableSports);
        $columns = Schema::getColumnListing($this->availableTableNames[$keyOfSport]);
        $to_delete = ['id', 'player_type_id', 'created_at', 'updated_at'];
        $columns = array_diff($columns, $to_delete);

        $inputs = [];
        foreach ($this->allAttributesInputs as $key => $attribute) {
            foreach ($columns as $column) {
                if($key == $column) {
                    $inputs[$key] = $attribute;
                }
            }
        }

        foreach ($inputs as $key => $input) {
            $inputs[$key] = explode('|', $input);
            foreach ($inputs[$key] as $key_in => $input_attribute) {
                $newArray = explode(':', $input_attribute);

                $inputs[$key][$newArray[0]] = $newArray[1];
                unset($inputs[$key][$key_in]);
            }
        }

        if($sport->name == 'Atletika') {
            unset($inputs['discipline']['skijanje_options']);
        }

        if($sport->name == 'Skijanje') {
            $inputs['discipline']['options'] = $inputs['discipline']['skijanje_options'];
            unset($inputs['discipline']['skijanje_options']);
        }

        if($sport->name == 'Biciklizam') {
            unset($inputs['category']['karate_options']);
        }

        if($sport->name == 'Karate') {
            $inputs['category']['options'] = $inputs['category']['karate_options'];
            unset($inputs['category']['karate_options']);
        }

        foreach ($inputs as $key => $input) {
            if(array_key_exists('options', $input)){
                $inputs[$key]['options'] = explode(',', $input['options']);
            }
        }

        $inputs = json_decode(json_encode($inputs));

        return view('athlete.new', compact('sport', 'inputs'));
    }
}
