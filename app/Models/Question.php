<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';

    protected $guarded = [];


    public function answers(){

        return $this->belongsToMany('App\Models\Answer','question_id','id');

    }

}
