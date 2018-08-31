<?php

namespace App\Http\Controllers;

use App\Repositories\SportRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SportController extends Controller
{
    protected $sportRepository;

    public function __construct(SportRepository $sportRepository)
    {
        $this->sportRepository = $sportRepository;
    }

    public function displaySports()
    {
        $sports = $this->sportRepository->getAllSportWithoutDisabilities();
        return view('sports.sports-list', compact('sports'));
    }

    public function displaySport($id)
    {
        $sport = $this->sportRepository->getByIdWithAllDetails($id);
        DB::update('UPDATE sport_details SET number_of_views = ? WHERE sport_id= ?',[$sport->sportDetails->number_of_views+1,$sport->id]);
        return view('sports.profile', compact('sport'));
    }
}
