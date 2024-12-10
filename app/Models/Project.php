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
        'mahalla_name',
        'land',
        'investor_initiative_date',
        'company_name',
        'contact_person',
        'hokim_resolution_no',
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
