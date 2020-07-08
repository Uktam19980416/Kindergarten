<?php

namespace App\Repositories;

use App\Models\Parents;
use App\Repositories\BaseRepository;

/**
 * Class ParentsRepository
 * @package App\Repositories
 * @version July 4, 2020, 7:30 am UTC
*/

class ParentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'images',
        'about_kinder',
        'full_name',
        'parent'
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
        return Parents::class;
    }
}
