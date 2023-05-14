<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $score
 * @property string $comment
 * @property Service $service
 */
class Evaluation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'score',
        'comment',
        'service_id',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
