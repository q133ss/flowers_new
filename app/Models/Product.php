<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;



/**
 * Class Product
 * @package App\Models
 * @version December 5, 2021, 6:44 pm UTC
 *
 * @property \App\Models\Category $category
 * @property \Illuminate\Database\Eloquent\Collection $orderProducts
 * @property \Illuminate\Database\Eloquent\Collection $photos
 * @property \Illuminate\Database\Eloquent\Collection $productColors
 * @property \Illuminate\Database\Eloquent\Collection $productPaths
 * @property \Illuminate\Database\Eloquent\Collection $productSizePaths
 * @property \Illuminate\Database\Eloquent\Collection $productSizes
 * @property \Illuminate\Database\Eloquent\Collection $productTags
 * @property \Illuminate\Database\Eloquent\Collection $productViews
 * @property \Illuminate\Database\Eloquent\Collection $reviews
 * @property string $name
 * @property string $descr
 * @property string $img
 * @property integer $price
 * @property boolean $score
 * @property boolean $sale
 * @property string $status
 * @property integer $order
 * @property integer $category_id
 */
class Product extends Model implements Sortable
{

    use SortableTrait;

    public $table = 'products';

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'descr',
        'img',
        'price',
        'score',
        'sale',
        'status',
        'order',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'descr' => 'string',
        'img' => 'string',
        'price' => 'integer',
        'score' => 'boolean',
        'sale' => 'boolean',
        'status' => 'string',
        'order' => 'integer',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'descr' => 'required|string',
        'img' => 'nullable|string|max:255',
        'price' => 'required|integer',
        'score' => 'nullable|boolean',
        'sale' => 'nullable|boolean',
        'status' => 'required|string|max:50',
        'order' => 'integer',
        'category_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderProducts()
    {
        return $this->hasMany(\App\Models\OrderProduct::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function photos()
    {
        return $this->hasMany(\App\Models\Photo::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productColors()
    {
        return $this->hasMany(\App\Models\ProductColor::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productPaths()
    {
        return $this->hasMany(\App\Models\ProductPath::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productSizePaths()
    {
        return $this->hasMany(\App\Models\ProductSizePath::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productSizes()
    {
        return $this->hasMany(\App\Models\ProductSize::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productTags()
    {
        return $this->hasMany(\App\Models\ProductTag::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productViews()
    {
        return $this->hasMany(\App\Models\ProductView::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class, 'product_id');
    }
}
