<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Zizaco\Entrust\EntrustRole;
class Role extends EntrustRole
{
    public  $fillable = ['name' , 'display_name', 'description'];
}
