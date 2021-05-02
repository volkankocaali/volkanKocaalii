<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeveloperResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'time' => $this->time,
            'difficulty' => $this->difficulty,
            'sum' => ceil($this->task->sum('time') / 45),
            'assign_task' => $this->task,
        ];
    }
}
