<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Courses
 * @package App\Models
 * @version July 4, 2020, 7:24 am UTC
 *
 * @property string $images
 * @property string $course_name
 * @property string $course_time
 * @property string $about_course
 */
class Courses extends Model
{

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'images',
        'course_name',
        'course_time',
        'about_course'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'images' => 'string',
        'course_name' => 'string',
        'course_time' => 'string',
        'about_course' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required',
        'course_time' => 'required',
        'about_course' => 'required'
    ];

    
}
