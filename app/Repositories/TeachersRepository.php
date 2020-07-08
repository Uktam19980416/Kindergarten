<?php

namespace App\Repositories;

use App\Models\Teachers;
use App\Repositories\BaseRepository;

/**
 * Class TeachersRepository
 * @package App\Repositories
 * @version July 4, 2020, 7:30 am UTC
*/

class TeachersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'images',
        'full_name',
        'job',
        'slogan'
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
        return Teachers::class;
    }
}
