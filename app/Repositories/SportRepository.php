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

    public function getAllThatCanHavePlayers($list = [], $with_disabilities = false) {
        $query = $this->model->select();

        $query->where('with_disabilities', $with_disabilities);

        $query->where(function ($query) use ($list) {
            foreach ($list as $sport_name) {
                $query->orWhere('name', $sport_name);
            }
        });

        return $query
            ->orderBy('name', 'asc')
            ->get();

    }

    public function getById($id) {
        return $this->model->where('id', $id)->first();
    }
}