<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $guarded =[];
    public $timestamps = false;

    //
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
