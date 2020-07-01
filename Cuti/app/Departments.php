<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->hasMany(User::class,'divisi_id','id');
    }

}
