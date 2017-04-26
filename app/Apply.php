<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    //应用
    protected $table = 'apply';

    public  $fillable = ['id','name','icon','game'];

    public $timestamps = false;
}
