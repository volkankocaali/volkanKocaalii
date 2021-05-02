<?php

namespace App\Repositories\Developer;

interface DeveloperRepositoryInterface {
    public function all();
    public function orderBy($field);
    public function truncate();
}
