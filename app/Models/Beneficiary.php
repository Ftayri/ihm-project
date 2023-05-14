<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beneficiary extends User
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function services(){
        return $this->hasMany(Service::class);
    }
}
