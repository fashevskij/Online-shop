<?php

declare(strict_types=1);

namespace App\ReadModel\Product;

use App\Models\Product\Entity\Slug;
use Illuminate\Support\Collection;

interface ProductReadModel
{
    public function getProducts(): ?Collection;

    public function getProductItemsBySlug(Slug $slug): Collection;
}
