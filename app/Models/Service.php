<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $beneficiary_id
 * @property int $service_provider_id
 * @property string $status
 * @property string $created_at
 * @property Beneficiary $beneficiary
 * @property ServiceProvider $serviceProvider
 */
class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'beneficiary_id',
        'service_provider_id',
        'status',
        'created_at',
    ];
    //relationships
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
}
