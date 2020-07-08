<?php

namespace App\Repositories;

use App\Models\KinderNews;
use App\Repositories\BaseRepository;

/**
 * Class KinderNewsRepository
 * @package App\Repositories
 * @version June 30, 2020, 12:00 pm UTC
*/

class KinderNewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desrciption'
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
        return KinderNews::class;
    }
}
