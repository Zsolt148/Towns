<?php

namespace App\Repositories;

use App\Models\Population;
use App\Repositories\BaseRepository;

/**
 * Class PopulationRepository
 * @package App\Repositories
 * @version May 6, 2022, 7:26 pm UTC
*/

class PopulationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'town_id',
        'year',
        'women',
        'total'
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
        return Population::class;
    }
}
