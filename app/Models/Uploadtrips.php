<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadtrips extends Model
{
    protected $table = 'manual_trips';
    protected $primaryKey = 'trip_id';
    protected $fillable = ['trip_name', 'pick_up_locations'];
}
