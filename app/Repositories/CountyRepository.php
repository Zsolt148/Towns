<?php

namespace App\Repositories;

use App\Models\County;
use App\Repositories\BaseRepository;

/**
 * Class CountyRepository
 * @package App\Repositories
 * @version May 6, 2022, 7:05 pm UTC
*/

class CountyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return County::class;
    }
}
