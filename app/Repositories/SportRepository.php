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
        return $this->model->orderBy('name', 'asc')->get();
    }

}