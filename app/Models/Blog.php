<?php

namespace App\Models;

use Eloquent as Model;
use Str;

/**
 * Class Blog
 * @package App\Models
 * @version February 20, 2021, 4:26 pm +06
 *
 * @property string $title
 * @property string $details
 * @property string $image
 */
class Blog extends Model
{

    public $table = 'blogs';


    public function url()
    {
        return route('blog', [Str::slug($this->title, '-'), $this->id]);
    }

    public $fillable = [
        'title',
        'details',
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
