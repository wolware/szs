<?php

namespace App\Http\Controllers;

use App\Association;
use App\Repositories\AssociationRepository;
use App\Repositories\ClubRepository;
use App\Repositories\SportRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AssociationController extends Controller
{
    protected $sportRepository;
    protected $clubRepository;
    protected $associationRepository;

    public function __construct(SportRepository $sportRepository, ClubRepository $clubRepository, AssociationRepository $associationRepository)
    {
        $this->sportRepository = $sportRepository;
        $this->clubRepository = $clubRepository;
        $this->associationRepository = $associationRepository;
    }

    public function index(Request $data){
        $sports = $this->sportRepository
            ->getAll();

        $query = Association::query();

        if(Input::filled('sport')){
            $query->where('sport_id', Input::get('sport'));
        }

        if(Input::filled('sort')) {
            $sort = Input::get('sort');
            if ($sort === 'name_desc') {
                $query->orderBy('name', 'DESC');
            } else if ($sort === 'name_asc') {
                $query->orderBy('name', 'ASC');
            } else if ($sort === 'sport') {
                $query->with(['sport' => function ($query) {
                    $query->orderBy('sports.name', 'DESC');
                }]);
            }
        }

        $results = $query
            ->paginate(16);

        return view('associations.index', compact('sports', 'results'));
    }

    public function showAssociation($id) {
        $association = Association::with(['clubs', 'region', 'sport'])
            ->where('id', $id)
            ->first();


        if($association) {

            $clubs = $association->clubs()->paginate(12);

            return view('associations.profile', compact('association','clubs'));
        }

        abort(404);
    }
}
