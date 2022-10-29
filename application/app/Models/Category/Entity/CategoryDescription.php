<?php

namespace App\Models\Category\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class CategoryDescription extends Model
{
    use HasFactory;

    private function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    protected $table = 'category_descriptions_ua';

    public const NAME_TABLE = [
        'ua' => 'category_descriptions_ua',
        'ru' => 'category_descriptions_ru',
    ];

    public static function create(string $local): void
    {
        $category = new self();
        $category->table = self::NAME_TABLE[$local];
    }

    /**
     * @return HasOne<Category>
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
