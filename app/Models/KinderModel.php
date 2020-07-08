<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Kinder
 * @package App\Models
 * @version June 30, 2020, 11:57 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $message
 */
class KinderModel extends Model
{

    public $table = 'kinder_models';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'integer',
        'subject' => 'string',
        'message' => 'longText'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|integer',
        'subject' => 'required',
        'message' => 'required'
    ];

    
}
