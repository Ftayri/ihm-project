<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends User
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'profile_picture',
        'service_subcategory_id',
        'service_description',
    ];
    public function serviceSubcategory()
    {
        return $this->belongsTo(ServiceSubcategory::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
