<?php

namespace App\Models\Product\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product\Entity\ProductWeight
 *
 * @property int $id
 * @property float $weight
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWeight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWeight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWeight query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWeight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductWeight whereWeight($value)
 * @mixin \Eloquent
 */
class ProductWeight extends Model
{
    use HasFactory;

    public $timestamps = false;

}
