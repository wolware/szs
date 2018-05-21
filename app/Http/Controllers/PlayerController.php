<?php

namespace App\Http\Controllers;

use App\Repositories\ClubRepository;
use App\Repositories\PlayerRepository;
use App\Repositories\RegionRepository;
use App\Repositories\SportRepository;
use App\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class PlayerController extends Controller
{
    protected $sportRepository;
    protected $playerRepository;
    protected $regionRepository;
    protected $clubRepository;

    protected $allAttributesInputs = [
        'preferred_leg' => 'label:Primarna noga|type:select|name:preferred_leg|options:Desna noga,Lijeva noga,Obje|default:Izaberite primarnu nogu sportiste',
        'preferred_arm' => 'label:Primarna ruka|type:select|name:preferred_arm|options:Desna ruka,Lijeva ruka,Obje|default:Izaberite primarnu ruku sportiste',
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

    protected $playerCommonValidationRules = [
        'avatar' => 'image|dimensions:min_width=512,min_height=512,max_width=2048,max_height=2048',
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'date_of_birth' => 'nullable|date',
        'continent' => 'required|integer|exists:regions,id',
        'country' => 'required|integer|exists:regions,id',
        'province' => 'integer|exists:regions,id',
        'region' => 'integer|exists:regions,id',
        'municipality' => 'integer|exists:regions,id',
        'city' => 'required|max:255|string',
        'weight' => 'nullable|numeric',
        'height' => 'nullable|numeric',
        'facebook' => 'nullable|max:255|string',
        'instagram' => 'nullable|max:255|string',
        'twitter' => 'nullable|max:255|string',
        'youtube' => 'nullable|max:255|string',
        'video' => 'nullable|max:255|string',
        'biography' => 'nullable|string',
        'requested_club' => 'nullable|integer|exists:clubs,id',
        'player_nature' => 'integer|exists:player_natures,id',
        // History
        'history' => 'array',
        'history.*' => 'array',
        'history.*.season' => 'required|max:255|string',
        'history.*.club' => 'required|max:255|string',
        // Slike
        'galerija' => 'array',
        'galerija.*' => 'required|image',
    ];

    protected $playerUniqueValidationRules = [
        'preferred_leg' => 'nullable|max:255|string',
        'preferred_arm' => 'nullable|max:255|string',
        'rank' => 'nullable|integer',
        'discipline' => 'nullable|max:255|string',
        'best_result' => 'nullable|numeric',
        'agent' => 'nullable|max:255|string',
        'position' => 'nullable|max:255|string',
        'competition' => 'nullable|max:255|string',
        'category' => 'nullable|max:255|string',
        'market_value' => 'nullable|integer',
        'branch' => 'nullable|max:255|string',
        'belt' => 'nullable|max:255|string',
        'style' => 'nullable|max:255|string',
        'distance' => 'nullable|integer',
        'coach' => 'nullable|max:255|string',
        'best_rank' => 'nullable|integer',
    ];

    public function __construct(SportRepository $sportRepository, PlayerRepository $playerRepository, RegionRepository $regionRepository, ClubRepository $clubRepository) {
        $this->sportRepository = $sportRepository;
        $this->playerRepository = $playerRepository;
        $this->regionRepository = $regionRepository;
        $this->clubRepository = $clubRepository;
    }

    public function displayAddPlayerCategories() {
        $sports = $this->sportRepository
            ->getAllActiveSports();

        return view('athlete.add', compact('sports'));
    }

    public function displayAddPlayer($sport_id) {
        $sport = $this->sportRepository
            ->getById($sport_id);

        // Provjera da li je sport dostupan za dodavanje
        if(!$sport->active){
            abort(404);
        }

        $columns = Schema::getColumnListing($sport->players_table);
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

        $playerNatures = $this->playerRepository
            ->getAllPlayerNatures();

        $regions = $this->regionRepository
            ->getAll();

        $clubs = $this->clubRepository
            ->getAllForSport($sport_id);

        return view('athlete.new', compact('sport', 'inputs', 'playerNatures', 'regions', 'clubs'));
    }

    public function createPlayer(Request $request, $sport_id) {
        $sport = $this->sportRepository
            ->getById($sport_id);

        // Provjera da li je sport dostupan za dodavanje
        if(!$sport->active){
            abort(404);
        }

        $columns = Schema::getColumnListing($sport->players_table);
        $to_delete = ['id', 'player_type_id', 'created_at', 'updated_at'];
        $columns = array_diff($columns, $to_delete);

        $uniqueValidationRules = [];
        foreach ($columns as $column) {
            $uniqueValidationRules[$column] = $this->playerUniqueValidationRules[$column];
        }

        $completeValidationRules = array_merge($this->playerCommonValidationRules, $uniqueValidationRules);

        $validator = Validator::make($request->all(), $completeValidationRules);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $createPlayer = $this->playerRepository
                ->createPlayer($request, $sport, $columns);

            if($createPlayer) {
                flash()->overlay('Uspješno ste dodali sportistu.', 'Čestitamo');
                return back();
            }
        }
    }

    public function showPlayer($id) {
        $player = $this->playerRepository
            ->getByIdWithAllData($id);

        if($player) {
            $regions = collect();
            $currentRegion = $player->region;
            while ($currentRegion) {
                $regions->put(strtolower($currentRegion->region_type->type), $currentRegion->name);

                $currentRegion = $currentRegion->parent_region;
            }

            $player->setAttribute('regions', $regions);

            return view('athlete.profile', compact('player'));
        }

        abort(404);
    }
}
