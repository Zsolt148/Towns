<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Population
 *
 * @package App\Models
 * @version May 6, 2022, 7:26 pm UTC
 *
 * @property Town    $town
 * @property integer $town_id
 * @property string  $year
 * @property integer $women
 * @property integer $total
 */
class Population extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'populations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'town_id',
        'year',
        'women',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'town_id' => 'integer',
        'women' => 'integer',
        'total' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'town_id' => 'required',
        'year' => 'required',
        'women' => 'required|integer',
        'total' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function town()
    {
        return $this->belongsTo(Town::class, 'town_id');
    }
}
