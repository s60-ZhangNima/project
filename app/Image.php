<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';

    public  $fillable = ['id','icon'];

    public $timestamps = false;

}
