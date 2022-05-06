<?php

namespace App\Repositories;

use App\Models\Post2;
use App\Repositories\BaseRepository;

/**
 * Class Post2Repository
 * @package App\Repositories
 * @version May 6, 2022, 5:16 pm UTC
*/

class Post2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post2::class;
    }
}
