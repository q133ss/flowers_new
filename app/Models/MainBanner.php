<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class MainBanner
 * @package App\Models
 * @version December 5, 2021, 6:41 pm UTC
 *
 * @property string $img
 */
class MainBanner extends Model
{


    public $table = 'main_banners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img' => 'required|string|max:255'
    ];

    
}
