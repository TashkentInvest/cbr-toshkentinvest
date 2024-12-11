<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id',
        'unique_number',
        'district',
        'street',
        'mahalla',
        'land',
        'contact_person',
        'image',
        'implementation_period',
        'status',
        'srok_realizatsi'
    ];

    // Relationships
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
