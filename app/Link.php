<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $table = 'link';
    public $timestamps = false;
    public  $fillable = ['id','name','url'];
}
