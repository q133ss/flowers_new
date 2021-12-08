<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductPath
 * @package App\Models
 * @version December 5, 2021, 6:43 pm UTC
 *
 * @property \App\Models\Product $product
 * @property string $model
 * @property integer $model_id
 * @property integer $product_id
 * @property string $status
 * @property integer $price
 * @property boolean $score
 * @property boolean $sale
 * @property boolean $charge
 */
class ProductPath extends Model
{


    public $table = 'product_paths';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'model',
        'model_id',
        'product_id',
        'status',
        'price',
        'score',
        'sale',
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
        'product_id' => 'integer',
        'status' => 'string',
        'price' => 'integer',
        'score' => 'boolean',
        'sale' => 'boolean',
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
        'product_id' => 'required',
        'status' => 'required|string|max:50',
        'price' => 'nullable|integer',
        'score' => 'nullable|boolean',
        'sale' => 'nullable|boolean',
        'charge' => 'nullable|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
