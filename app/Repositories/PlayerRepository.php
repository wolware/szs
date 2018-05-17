<?php

namespace App\Repositories;

use App\Player;

class PlayerRepository {
    protected $model;

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
}