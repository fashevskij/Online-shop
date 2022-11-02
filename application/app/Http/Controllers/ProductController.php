<?php

namespace App\Http\Controllers;

use App\Models\Product\Entity\Slug;
use App\ReadModel\Product\ProductQueryBuilder;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductQueryBuilder $readModel
    )
    {
    }

    public function getProducts(): ?Collection
    {
        return $this->readModel->getProducts();
    }

    public function getProductItems(string $slug): Collection
    {
        return $this->readModel->getProductItemsBySlug(new Slug($slug));
    }
}
