<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainors extends Model
{
    use HasFactory;
    public function courses(){
        return $this->hasMany('App\Models\Courses');
    }
    public function user(){
        return $this->belongsTo('App\Models\Users');
    }
}
