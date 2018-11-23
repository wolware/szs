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

    public function displayDisabilitySports()
    {
        $sports = $this->sportRepository->getAllSportWithDisabilities();
        return view('sports.sports-list-disability', compact('sports'));
    }

    public function displaySport($id)
    {
        $sport = $this->sportRepository->getByIdWithAllDetails($id);
        $numberOfViews = isset($sport->sportDetails->number_of_views) ? $sport->sportDetails->number_of_views + 1 : 0;
        DB::update('UPDATE sport_details SET number_of_views = ? WHERE sport_id= ?',[$numberOfViews,$sport->id]);
        return view('sports.profile', compact('sport'));
    }
}
