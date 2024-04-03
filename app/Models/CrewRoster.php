<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrewRoster extends Model
{
    use HasFactory;    
    protected $table = 'crew_rosters';
    public $timestamps = false;
    protected $guarded = [];
    protected $hidden = ['id','created_at','updated_at'];

    public function getDateAttribute($value)
    {
        return date("D d", strtotime($value));
    }
   
}
