<?php

namespace App\Repositories;

use App\Objects;
use App\ObjectTypes;

class ObjectRepository {
    protected $model;
    protected $objectTypeModel;

    /**
     * ObjectRepository constructor.
     * @param Objects $model
     * @param ObjectTypes $objectTypes
     */
    public function __construct(Objects $model, ObjectTypes $objectTypes){
        $this->model = $model;
        $this->objectTypeModel = $objectTypes;
    }

    public function getAllObjectTypes() {
        return $this->objectTypeModel->all();
    }

    public function getById($id) {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function getObjectTypeById($id) {
        return $this->objectTypeModel
            ->where('id', $id)
            ->first();
    }

}