<?php

namespace App\Models;

use Eloquent as Model;
use Str;

/**
 * Class Activity
 * @package App\Models
 * @version February 20, 2021, 9:34 am +06
 *
 * @property string $title
 * @property string $details
 * @property string $image
 */
class Activity extends Model
{

    public $table = 'activities';




    public $fillable = [
        'title',
        'details',
        'image'
    ];

    public function url()
    {
        return route('activity',[Str::slug($this->title, '-'), $this->id]);
    }
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'details' => 'string',
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
        'image' => 'required|image|max:10000'
    ];
}
