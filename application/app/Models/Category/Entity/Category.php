<?php

namespace App\Models\Category\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Category\Entity\Category
 *
 * @property int $id
 * @property string $slug
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @mixin \Eloquent
 */
final class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'slug',
    ];

    /**
     * @return HasOne<CategoryDescription>
     */
    public function description(): HasOne
    {
        return $this->hasOne(CategoryDescription::class);
    }
}
