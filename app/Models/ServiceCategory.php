<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $image
 */

class ServiceCategory extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
    ];
    public function serviceSubcategories()
    {
        return $this->hasMany(ServiceSubcategory::class);
    }

}
