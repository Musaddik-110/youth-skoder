<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Gallery
 * @package App\Models
 * @version February 18, 2021, 7:04 pm +06
 *
 * @property string $type
 * @property string $image
 */
class Gallery extends Model
{

    public $table = 'galleries';
    



    public $fillable = [
        'type',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required|string|max:191',
        'image' => 'required|image|max:10000'
    ];

    
}
