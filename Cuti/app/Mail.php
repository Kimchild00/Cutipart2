<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Mail extends Model
{
    protected $guarded =[];

    protected $table ='mails';

    public function user(){
        return $this->belongsTo("App\User",'user_id','id');
    }

        
}