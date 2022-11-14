<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property string $name
 * @property string $description
 * @property string $use
 * @property string $feature
 * @property string $specification
 * @property string $documentation
 * @property string $seo_title
 * @property string $seo_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDocumentation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereFeature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereUse($value)
 * @mixin \Eloquent
 */
class ProductTranslation extends Model
{
    use HasFactory;
}
