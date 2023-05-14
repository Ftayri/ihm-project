<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $profile_picture
 * @property integer $service_sub_category_id
 * @property string $service_description
 * @property ServiceSubCategory $serviceSubCategory
 * @property Service[] $services
 */
class ServiceProvider extends User
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'profile_picture',
        'service_sub_category_id',
        'service_description',
    ];
    public function serviceSubCategory()
    {
        return $this->belongsTo(ServiceSubCategory::class);
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
