<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany(User::class,'user_roles');
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class,'role_permissions')->withPivot('create', 'read','update','delete','restore','list','download');
    }
}