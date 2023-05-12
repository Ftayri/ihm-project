<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $image
 * @property string $slug
 * @property integer $service_category_id
 * @property ServiceCategory $serviceCategory
 */

class ServiceSubCategory extends Model
{
    use HasFactory;
    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
