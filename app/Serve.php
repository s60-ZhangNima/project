<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
    //
    protected $table = 'serve';

    public  $fillable = ['id','icon'];
    public $timestamps = false;
}
