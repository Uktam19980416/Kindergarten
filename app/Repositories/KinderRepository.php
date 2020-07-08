<?php

namespace App\Repositories;

use App\Models\Kinder;
use App\Repositories\BaseRepository;

/**
 * Class KinderRepository
 * @package App\Repositories
 * @version June 30, 2020, 11:57 am UTC
*/

class KinderRepository extends BaseRepository
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
        return Kinder::class;
    }
}
