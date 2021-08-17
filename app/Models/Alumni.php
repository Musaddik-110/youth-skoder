<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Alumni
 * @package App\Models
 * @version February 21, 2021, 9:53 am +06
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $designation
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 * @property string $image
 */
class Alumni extends Model
{

    public $table = 'alumnis';
    



    public $fillable = [
        'name',
        'email',
        'phone',
        'designation',
        'facebook',
        'twitter',
        'linkedin',
        'image'
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
        'phone' => 'string',
        'designation' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'linkedin' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'email' => 'required|email|max:191',
        'phone' => 'required|string|max:191',
        'designation' => 'required|string|max:191',
        'facebook' => 'nullable|url|max:191',
        'twitter' => 'nullable|url|max:191',
        'linkedin' => 'nullable|url|max:191',
        'image' => 'required|image|max:10000'
    ];

    
}
