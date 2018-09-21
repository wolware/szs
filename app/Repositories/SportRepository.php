<?php

namespace App\Repositories;

use App\Sport;

class SportRepository {
    protected $model;

    public function __construct(Sport $model)
    {
        $this->model = $model;
    }

    public function getAll() {
        return $this->model
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getAllActiveSports($with_disabilities = false) {

        return $this->model
            ->where('active', true)
            ->where('with_disabilities', $with_disabilities)
            ->orderBy('name', 'asc')
            ->get();

    }

    public function getAllSportWithoutDisabilities(){
        return $this->model
            ->where('with_disabilities', false)
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getAllSportWithDisabilities(){
        return $this->model
            ->where('with_disabilities', true)
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getById($id) {
        return $this->model
            ->where('id', $id)
            ->first();
    }
    public function getByIdWithAllDetails($id) {
        return $this->model
            ->where('id', $id)
            ->with('sportDetails')
            ->with('sportsEvents')
            ->with('sportsMenagement')
            ->with('sportPeople')
            ->with('sportTrophies')
            ->first();
    }
}