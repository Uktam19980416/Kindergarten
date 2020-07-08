<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class KinderNews
 * @package App\Models
 * @version June 30, 2020, 12:00 pm UTC
 *
 * @property string $title
 * @property string $desrciption
 * @property string $images
 */
class KinderNews extends Model
{

    public $table = 'kinder_news';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'title',
        'desrciption',
        'images'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'desrciption' => 'string',
        'images' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'title' => 'required',
        // 'desrciption',
        // 'images' => 'required|image'
    ];

    
}
