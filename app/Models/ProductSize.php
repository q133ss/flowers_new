<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ProductSize
 * @package App\Models
 * @version December 5, 2021, 6:44 pm UTC
 *
 * @property \App\Models\Product $product
 * @property \App\Models\Size $size
 * @property integer $product_id
 * @property integer $size_id
 * @property boolean $is_main
 * @property integer $price
 * @property boolean $sale
 * @property integer $status
 */
class ProductSize extends Model
{


    public $table = 'product_sizes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'size_id',
        'is_main',
        'price',
        'sale',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'size_id' => 'integer',
        'is_main' => 'boolean',
        'price' => 'integer',
        'sale' => 'boolean',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'size_id' => 'required',
        'is_main' => 'required|boolean',
        'price' => 'required',
        'sale' => 'nullable|boolean',
        'status' => 'required|integer'
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
