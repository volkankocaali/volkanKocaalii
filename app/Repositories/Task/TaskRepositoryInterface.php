<?php

namespace App\Repositories\Task;

interface TaskRepositoryInterface {
    public function all();
    public function create($data);
    public function destroy($id);
    public function truncate();
}
