<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeveloperResource;
use App\Repositories\Developer\DeveloperRepositoryInterface;
use App\Repositories\DeveloperTask\DeveloperTaskRepositoryInterface;
use App\Repositories\Task\TaskRepositoryInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DeveloperWorkController extends Controller
{
    public $developerRepository;
    public $taskRepository;
    public $developerTaskRepository;

    public function __construct(DeveloperRepositoryInterface $developerRepository , TaskRepositoryInterface $taskRepository,DeveloperTaskRepositoryInterface $developerTaskRepository)
    {
        $this->developerRepository = $developerRepository;
        $this->taskRepository = $taskRepository;
        $this->developerTaskRepository = $developerTaskRepository;
    }

    public function index(): AnonymousResourceCollection
    {

        $this->developerTaskRepository->truncate();

        $developers = $this->developerRepository->orderBy('difficulty');
        $tasks = $this->taskRepository->all();

        foreach ($tasks as $task){
            foreach ($developers as $dev){
                if($task->level == $dev->difficulty){
                    $this->developerTaskRepository->create([
                        'developer_id' => $dev->id,
                        'task_id' => $task->id,
                    ]);
                }
            }
        }

        return DeveloperResource::collection($developers);
    }


}
