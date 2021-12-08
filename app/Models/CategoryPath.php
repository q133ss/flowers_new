<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class CategoryPath
 * @package App\Models
 * @version December 5, 2021, 6:40 pm UTC
 *
 * @property \App\Models\Category $category
 * @property string $model
 * @property integer $model_id
 * @property integer $category_id
 * @property string $status
 * @property boolean $charge
 */
class CategoryPath extends Model
{


    public $table = 'category_paths';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'model',
        'model_id',
        'category_id',
        'status',
        'charge'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'model' => 'string',
        'model_id' => 'integer',
        'category_id' => 'integer',
        'status' => 'string',
        'charge' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'model' => 'required|string|max:50',
        'model_id' => 'required',
        'category_id' => 'required',
        'status' => 'required|string|max:50',
        'charge' => 'nullable|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
}
