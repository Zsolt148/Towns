<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Town
 *
 * @package App\Models
 * @version May 6, 2022, 7:11 pm UTC
 *
 * @property County                                   $county
 * @property \Illuminate\Database\Eloquent\Collection $populations
 * @property integer                                  $county_id
 * @property string                                   $name
 * @property boolean                                  $county_seat
 * @property boolean                                  $county_level
 */
class Town extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'towns';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'county_id',
        'name',
        'county_seat',
        'county_level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'county_id' => 'integer',
        'name' => 'string',
        'county_seat' => 'boolean',
        'county_level' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'county_id' => 'required',
        'name' => 'required|string|max:255',
        'county_seat' => 'required|boolean',
        'county_level' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function county()
    {
        return $this->belongsTo(County::class, 'county_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function populations()
    {
        return $this->hasMany(Population::class, 'town_id');
    }
}
