<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chinkungunya extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}