<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $image
 * @property string $slug
 * @property ServiceSubCategory[] $serviceSubcategories
 */

class ServiceCategory extends Model
{
    
    use HasFactory;
    public function serviceSubcategories()
    {
        return $this->hasMany(ServiceSubcategory::class);
    }

}
