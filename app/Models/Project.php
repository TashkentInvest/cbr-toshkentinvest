<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id', 'image', 'district_id', 'street_id',
        'land', 'implementation_period', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stages()
    {
        return $this->hasMany(ProjectStage::class);
    }

    public function documents()
    {
        return $this->hasMany(ProjectDocument::class);
    }
}
