<?php

namespace App\Models\Product\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product\Entity\ProductItem
 *
 * @property int $id
 * @property int $barcode
 * @property int $product_id
 * @property int|null $color_id
 * @property int|null $weight_id
 * @property int|null $volume_id
 * @property string $type
 * @property int $price
 * @property int $status
 * @property int $show
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereVolumeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductItem whereWeightId($value)
 * @mixin \Eloquent
 */
class ProductItem extends Model
{
    use HasFactory;
}
