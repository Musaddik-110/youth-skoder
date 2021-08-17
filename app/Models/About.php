<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class About
 * @package App\Models
 * @version February 17, 2021, 7:48 pm +06
 *
 * @property string $details
 */
class About extends Model
{

    public $table = 'abouts';
    



    public $fillable = [
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'details' => 'required|string|max:65530'
    ];

    
}
