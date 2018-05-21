<?php

namespace App\Repositories;

use App\Gallery;
use App\Player;
use App\PlayerClubHistory;
use App\PlayerNature;
use App\Sport;
use App\Trophy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PlayerRepository {
    protected $model;

    protected $allAttributes = [
        'preferred_leg' => [
            'icon' => '',
            'label' => [
                'bs' => 'Primarna noga'
            ]
        ],
        'preferred_arm' => [
            'icon' => '',
            'label' => [
                'bs' => 'Primarna ruka'
            ]
        ],
        'rank' => [
            'icon' => 'list-atp.svg',
            'label' => [
                'bs' => 'Rank'
            ]
        ],
        'discipline' => [
            'icon' => '',
            'label' => [
                'bs' => 'Disciplina'
            ]
        ],
        'best_result' => [
            'icon' => 'najrez.svg',
            'label' => [
                'bs' => 'Najbolji rezultat'
            ]
        ],
        'agent' => [
            'icon' => 'agent.svg',
            'label' => [
                'bs' => 'Agent'
            ]
        ],
        'position' => [
            'icon' => 'icon.svg',
            'label' => [
                'bs' => 'Pozicija'
            ]
        ],
        'competition' => [
            'icon' => 'stadium-icon.svg',
            'label' => [
                'bs' => 'Takmičenje'
            ]
        ],
        'category' => [
            'icon' => 'list-atp.svg',
            'label' => [
                'bs' => 'Kategorija'
            ]
        ],
        'market_value' => [
            'icon' => 'money.svg',
            'label' => [
                'bs' => 'Vrijednost'
            ]
        ],
        'branch' => [
            'icon' => '',
            'label' => [
                'bs' => 'Grana'
            ]
        ],
        'belt' => [
            'icon' => 'rang-pojas.svg',
            'label' => [
                'bs' => 'Pojas'
            ]
        ],
        'style' => [
            'icon' => 'swimming-figure.svg',
            'label' => [
                'bs' => 'Stil'
            ]
        ],
        'distance' => [
            'icon' => 'pool.svg',
            'label' => [
                'bs' => 'Dionica stila'
            ]
        ],
        'coach' => [
            'icon' => 'coach.svg',
            'label' => [
                'bs' => 'Trener'
            ]
        ],
        'best_rank' => [
            'icon' => 'list-atp-best.svg',
            'label' => [
                'bs' => 'Najbolji rank'
            ]
        ],
    ];

    public function __construct(Player $model)
    {
        $this->model = $model;
    }

    public function getAll($sports = null)
    {
        if ($sports === null)
        {
            return $this->model->all();
        }

        return $this->model->all();
    }

    public function getAllPlayerNatures() {
        return PlayerNature::all();
    }

    public function createPlayer(Request $request, Sport $sport, $unique_columns) {
        $newLogoName = 'default.png';

        if($request->file('avatar')){
            $logo = $request->file('avatar');
            $newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
            $destinationPath = public_path('/images/athlete_avatars');
            $logo->move($destinationPath, $newLogoName);
        }

        // Provjeri najmanji level regije
        $region_id = $request->get('country');

        if($request->has('province')) {
            $region_id = $request->get('province');
        }

        if($request->has('region')) {
            $region_id = $request->get('region');
        }

        if($request->has('municipality')) {
            $region_id = $request->get('municipality');
        }

        $createPlayer = $this->model->create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'avatar' => $newLogoName,
            'date_of_birth' => new Carbon($request->get('date_of_birth')),
            'weight' => $request->get('weight'),
            'height' => $request->get('height'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
            'youtube' => $request->get('youtube'),
            'video' => $request->get('video'),
            'region_id' => $region_id,
            'player_type_id' => $sport->id,
            'requested_club' => $request->get('requested_club'),
            'player_nature' => $request->get('player_nature'),
            'biography' => $request->get('biography'),
            'user_id' => Auth::user()->id,
            'city' => $request->get('city')
        ]);

        if($createPlayer) {
            $attributesToInsert = [];
            $attributesToInsert['id'] = $createPlayer->id;

            foreach ($unique_columns as $column) {
                $attributesToInsert[$column] = $request->get($column);
            }

            $attributesToInsert['player_type_id'] = $sport->id;
            $attributesToInsert['created_at'] = new Carbon();
            $attributesToInsert['updated_at'] = new Carbon();

            $createPlayerUnique = DB::table($sport->players_table)->insert($attributesToInsert);

            if($createPlayerUnique) {
                if($request->filled('history')){
                    foreach($request->get('history') as $key => $history){
                        if($history){
                            PlayerClubHistory::create([
                                'season' => $request['history'][$key]['season'],
                                'club' => $request['history'][$key]['club'],
                                'player_id' => $createPlayer->id
                            ]);
                        }
                    }
                }

                if($request->filled('nagrada')){
                    foreach($request->get('nagrada') as $key => $nagrada){
                        if($nagrada){
                            Trophy::create([
                                'type' => $request['nagrada'][$key]['vrsta'],
                                'place' => $request['nagrada'][$key]['tip'],
                                'competition_name' => $request['nagrada'][$key]['takmicenje'],
                                'level_of_competition' =>  $request['nagrada'][$key]['nivo'],
                                'season' =>  $request['nagrada'][$key]['sezona'],
                                'player_id' => $createPlayer->id
                            ]);
                        }
                    }
                }

                if($request->file('galerija')){
                    $galerije = $request->file('galerija');
                    foreach($galerije as $key => $slika){
                        $newgalName = $key . '-' .time() . '-' .  $createPlayer->id . '.' . $slika->getClientOriginalExtension();
                        $destPath = public_path('/images/galerija_sportista');
                        $slika->move($destPath, $newgalName);

                        Gallery::create([
                            'image' => $newgalName,
                            'player_id' => $createPlayer->id
                        ]);
                    }
                }

                return $createPlayer;
            } else {
                $createPlayer->delete();
                return null;
            }
        }

        return null;
    }

    public function getById($id) {
        return Player::where('id', $id)
            ->with(['player_type', 'player_nature'])
            ->first();
    }

    public function getByIdWithAllData($id) {
        $player = $this->getById($id);

        if($player) {
            $playerData = DB::table($player->player_type->players_table)
                ->where('id', $id)
                ->first();

            if($playerData) {
                $playerData = $this->unsetData(['id', 'player_type_id', 'created_at', 'updated_at'], $playerData);
                $player->setAttribute('player_data', $playerData);
                $player->setAttribute('player_data_names', $this->allAttributes);
            }

            return $player;
        }

        return null;
    }

    public function unsetData($dataToUnset = [], $array = []) {

        $dataToUnset = json_decode(json_encode($dataToUnset), true);
        $array = json_decode(json_encode($array), true);

        foreach ($dataToUnset as $data) {
            unset($array[$data]);
        }

        return $array;
    }
}