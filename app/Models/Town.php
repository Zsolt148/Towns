<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $fillable = [
        'county_id',
        'name',
        'county_seat',
        'county_level',
    ];

    protected $casts = [
        'county_seat' => 'boolean',
        'county_level' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function population()
    {
        return $this->hasMany(Population::class);
    }
}
