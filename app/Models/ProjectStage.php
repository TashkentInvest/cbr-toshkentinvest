<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStage extends Model
{
    protected $fillable = ['project_id', 'name', 'start_date', 'end_date', 'description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
