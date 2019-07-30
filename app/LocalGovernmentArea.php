<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalGovernmentArea extends Model
{
    //
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
