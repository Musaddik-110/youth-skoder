<?php

namespace App\Models;

use Eloquent as Model;
use Str;

/**
 * Class Event
 * @package App\Models
 * @version February 20, 2021, 2:36 pm +06
 *
 * @property string $title
 * @property string $details
 * @property string $date
 * @property string $place
 * @property string $image
 */
class Event extends Model
{

    public $table = 'events';

    public function url()
    {
        return route('event', [Str::slug($this->title, '-'), $this->id]);
    }


    public $fillable = [
        'title',
        'details',
        'date',
        'time',
        'place',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'details' => 'string',
        'date' => 'date',
        'time' => 'time',
        'place' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:191',
        'details' => 'required|string|max:65530',
        'date' => 'required|date',
        'time' => 'required',
        'place' => 'required|string|max:191',
        'image' => 'required|image|max:10000'
    ];

    
}
