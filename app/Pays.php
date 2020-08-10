<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
   protected $guarded=[];
 public function Captale()
 {
    return $this->hasOne(Captale::class);
 }   
}
