<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Setting
 * @package App\Models
 * @version February 21, 2021, 6:33 pm +06
 *
 * @property string $key
 * @property string $value
 */
class Setting extends Model
{

    public $table = 'settings';
    



    public $fillable = [
        'key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'key' => 'required|string|max:191',
        'value' => 'required|string|max:191'
    ];

    
}
