<?php

namespace App\Models\Category\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
