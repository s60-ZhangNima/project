<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class focus extends Model
{
    public $timestamps = false;
    public $table = 'focus';
    protected  $primaryKey = 'uid';
}
