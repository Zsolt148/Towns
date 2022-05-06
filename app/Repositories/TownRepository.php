<?php

namespace App\Repositories;

use App\Models\Town;
use App\Repositories\BaseRepository;

/**
 * Class TownRepository
 * @package App\Repositories
 * @version May 6, 2022, 7:11 pm UTC
*/

class TownRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'county_id',
        'name',
        'county_seat',
        'county_level'
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
        return Town::class;
    }
}
