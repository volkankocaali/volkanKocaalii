<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Developer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function task(): BelongsToMany
    {
        return $this->belongsToMany(Task::class,'developer_tasks')->using(DeveloperTask::class);
    }

}
