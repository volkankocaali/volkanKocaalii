<?php
namespace App\Repositories\Task;

use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface {

    public $model;

    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }
    public function destroy($id){
        return $this->model->destroy();
    }
    public function truncate()
    {
        return $this->model->truncate();
    }
}
