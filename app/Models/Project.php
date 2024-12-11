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
        'elon_fayl',
        'pratakol_fayl',
        'qoshimcha_fayl',
        'implementation_period',
        'status',
        'srok_realizatsi',
        'start_date',
        'end_date',
        'second_stage_start_date',
        'second_stage_end_date',
        'investor_initiative_date',
        'company_name',
        'hokim_resolution_no',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
