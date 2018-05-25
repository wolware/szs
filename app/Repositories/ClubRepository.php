<?php

namespace App\Repositories;

use App\Club;
use App\ClubCategory;

class ClubRepository {
    protected $model;
    protected $clubCategoryModel;

    public function __construct(Club $model, ClubCategory $clubCategory)
    {
        $this->model = $model;
        $this->clubCategoryModel = $clubCategory;
    }

    public function getSportCategories() {
        return $this->clubCategoryModel->all();
    }

    public function getAllForSport($sport_id) {
        return $this->model
            ->where('sport_id', $sport_id)
            ->get();
    }

    public function getAll() {
        return $this->model->all();
    }

}