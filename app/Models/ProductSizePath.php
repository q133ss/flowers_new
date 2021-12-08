<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductSizePath
 * @package App\Models
 * @version December 5, 2021, 6:44 pm UTC
 *
 * @property \App\Models\Product $product
 * @property \App\Models\Size $size
 * @property string $model
 * @property integer $model_id
 * @property boolean $main
 * @property integer $product_id
 * @property integer $size_id
 * @property string $status
 * @property integer $price
 * @property boolean $score
 * @property boolean $sale
 */
class ProductSizePath extends Model
{


    public $table = 'product_size_paths';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'model',
        'model_id',
        'main',
        'product_id',
        'size_id',
        'status',
        'price',
        'score',
        'sale'
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
        'main' => 'boolean',
        'product_id' => 'integer',
        'size_id' => 'integer',
        'status' => 'string',
        'price' => 'integer',
        'score' => 'boolean',
        'sale' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'model' => 'required|string|max:50',
        'model_id' => 'required',
        'main' => 'required|boolean',
        'product_id' => 'required',
        'size_id' => 'required',
        'status' => 'required|string|max:50',
        'price' => 'nullable|integer',
        'score' => 'nullable|boolean',
        'sale' => 'nullable|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function size()
    {
        return $this->belongsTo(\App\Models\Size::class, 'size_id');
    }
}
