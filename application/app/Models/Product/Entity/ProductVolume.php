<?php

namespace App\Models\Product\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product\Entity\ProductVolume
 *
 * @property int $id
 * @property float $volume
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVolume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVolume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVolume query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVolume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVolume whereVolume($value)
 * @mixin \Eloquent
 */
class ProductVolume extends Model
{
    use HasFactory;

    public $timestamps = false;

}
