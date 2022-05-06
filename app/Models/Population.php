<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $fillable = [
        'town_id',
        'year',
        'women',
        'total',
    ];

    protected $casts = [
        'women' => 'integer',
        'total' => 'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function town()
    {
        return $this->belongsTo(Town::class);
    }
}
