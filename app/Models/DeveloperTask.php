<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DeveloperTask extends Pivot
{
    use HasFactory;

    protected $table = "developer_tasks";
    protected $guarded = [];
}
