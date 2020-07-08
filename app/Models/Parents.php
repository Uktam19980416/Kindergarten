<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Parents
 * @package App\Models
 * @version July 4, 2020, 7:30 am UTC
 *
 * @property string $images
 * @property string $about_kinder
 * @property string $full_name
 * @property string $parent
 */
class Parents extends Model
{

    public $table = 'parents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'images',
        'about_kinder',
        'full_name',
        'parent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'images' => 'string',
        'about_kinder' => 'string',
        'full_name' => 'string',
        'parent' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'about_kinder' => 'required',
        'full_name' => 'required',
        'parent' => 'required'
    ];

    
}
