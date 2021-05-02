<?php
namespace App\Repositories\DeveloperTask;

use App\Models\DeveloperTask;
use App\Models\Provider;

class DeveloperTaskRepository implements DeveloperTaskRepositoryInterface {

    public $model;

    public function __construct(DeveloperTask $developerTask)
    {
        $this->model = $developerTask;
    }

    public function truncate()
    {
        return $this->model->truncate();
    }

    public function create($data)
    {
        return $this->model->create();
    }

}
