<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    protected $table = 'districts';

    public function region()
    {
        return $this->belongsTo(Regions::class, 'region_id', 'id'); 
    }

    public function streets()
{
        return $this->hasMany(Street::class, 'district_id', 'id'); 
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }



}
