<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $image
 */

class ServiceSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'service_category_id',
    ];
    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
