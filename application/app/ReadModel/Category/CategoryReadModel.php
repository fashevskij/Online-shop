<?php

declare(strict_types=1);

namespace App\ReadModel\Category;

use App\Models\Category\Entity\Slug;
use Illuminate\Support\Collection;

interface CategoryReadModel
{
    public function getAll(): ?Collection;

    public function getCategoryBySlug(Slug $slug): Collection;
}
