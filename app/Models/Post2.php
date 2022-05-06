<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post2
 * @package App\Models
 * @version May 6, 2022, 5:16 pm UTC
 *
 * @property belongsTo
 * @property string $title
 * @property string $content
 * @property unsignedInteger $user_id
 */
class Post2 extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'post2s';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'content',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
