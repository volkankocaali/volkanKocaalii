<?php
namespace App\Repositories\Developer;

use App\Models\Developer;

class DeveloperRepository implements DeveloperRepositoryInterface {

    public $model;

    public function __construct(Developer $developer)
    {
        $this->model = $developer;
    }

    public function all()
    {
        return $this->model->all();
    }
    public function orderBy($field){
        return $this->model->orderBy($field)->get();
    }
    public function truncate()
    {
        return $this->model->truncate();
    }

}
