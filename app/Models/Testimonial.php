<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Testimonial
 * @package App\Models
 * @version February 20, 2021, 6:48 pm +06
 *
 * @property string $name
 * @property string $designation
 * @property string $message
 * @property string $image
 */
class Testimonial extends Model
{

    public $table = 'testimonials';
    



    public $fillable = [
        'name',
        'designation',
        'message',
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
        'designation' => 'string',
        'message' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'designation' => 'required|string|max:191',
        'message' => 'required|string|max:65530',
        'image' => 'required|image|max:10000'
    ];

    
}
