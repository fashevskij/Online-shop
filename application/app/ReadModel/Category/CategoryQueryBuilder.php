<?php

declare(strict_types=1);

namespace App\ReadModel\Category;

use App\Models\Category\Entity\Slug;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

final class CategoryQueryBuilder implements CategoryReadModel
{
    private Builder $db;
    private string $tableName;

    public function __construct()
    {
        $local = app()->getLocale();
        $this->tableName = "category_descriptions_$local";
        $this->db = DB::table($this->tableName);
    }

    public function getAll(): ?Collection
    {
        return $this->db
            ->join('categories', 'categories.id', '=', "$this->tableName.category_id")
            ->get(['name', 'seo_title', 'seo_description', 'slug']);
    }

    public function getCategoryBySlug(Slug $slug): Collection
    {
        return $this->db
            ->join('categories', 'categories.id', '=', "$this->tableName.category_id")
            ->where('categories.slug', '=', $slug->getValue())
            ->get();
    }
}
