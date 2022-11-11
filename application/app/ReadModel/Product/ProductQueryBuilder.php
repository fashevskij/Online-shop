<?php

declare(strict_types=1);

namespace App\ReadModel\Product;

use App\Models\Product\Entity\Slug;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

final class ProductQueryBuilder implements ProductReadModel
{
    private Builder $db;
    private string $tableName;

    public function __construct()
    {
        $local = app()->getLocale();
        $this->tableName = "product_descriptions_$local";
        $this->db = DB::table($this->tableName);
    }

    public function getProducts(): ?Collection
    {
        return $this->db
            ->join('products', 'products.id', '=', "$this->tableName.product_id")
            ->get(['name', 'short_description', 'full_description', 'seo_title', 'seo_description', 'slug']);
    }

    public function getProductItemsBySlug(Slug $slug): Collection
    {
        return $this->db
            ->join('product_items', 'product_items.product_id', '=', "$this->tableName.product_id")
            ->join('product_colors', 'product_colors.id', '=', "product_items.color_id")
            ->join('product_weights', 'product_weights.id', '=', "product_items.weight_id")
            ->join('product_volumes', 'product_volumes.id', '=', "product_items.volume_id")
            ->join('products', 'products.id', '=', "$this->tableName.product_id")
            ->where('products.slug', '=', $slug->getValue())
            ->get();
    }
}
