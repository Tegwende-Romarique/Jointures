<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitale extends Model
{
    protected $guarded=[];
    public function Pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
