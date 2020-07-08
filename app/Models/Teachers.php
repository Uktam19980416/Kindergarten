<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Teachers
 * @package App\Models
 * @version July 4, 2020, 7:30 am UTC
 *
 * @property string $images
 * @property string $full_name
 * @property string $job
 * @property string $slogan
 */
class Teachers extends Model
{

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'images',
        'full_name',
        'job',
        'slogan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'images' => 'string',
        'full_name' => 'string',
        'job' => 'string',
        'slogan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required',
        'job' => 'required',
        'slogan' => 'required'
    ];

    
}
