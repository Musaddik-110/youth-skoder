<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Member
 * @package App\Models
 * @version February 21, 2021, 10:05 am +06
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $designation
 * @property string $about
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 * @property string $image
 */
class Member extends Model
{

    public $table = 'members';
    



    public $fillable = [
        'name',
        'email',
        'phone',
        'designation',
        'about',
        'facebook',
        'twitter',
        'linkedin',
        'image',
        'status'
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
        'about' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'linkedin' => 'string',
        'image' => 'string',
        'status' => 'boolean'
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
        'about' => 'required|string|max:191',
        'facebook' => 'nullable|url|max:191',
        'twitter' => 'nullable|url|max:191',
        'linkedin' => 'nullable|url|max:191',
        'image' => 'required|image|max:10000'
    ];

    
}
