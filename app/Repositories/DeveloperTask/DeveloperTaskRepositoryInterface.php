<?php

namespace App\Repositories\DeveloperTask;

interface DeveloperTaskRepositoryInterface
{
    public function truncate();
    public function create($data);
}

