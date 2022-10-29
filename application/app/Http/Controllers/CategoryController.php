<?php

namespace App\Http\Controllers;

use App\Models\Category\Entity\Slug;
use App\ReadModel\Category\CategoryQueryBuilder;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    public function __construct(
        private readonly CategoryQueryBuilder $readModel,
    ) {
    }

    public function getCategories(): ?Collection
    {
        return $this->readModel->getAll();
    }

    public function getCategory(string $slug): Collection
    {
        return $this->readModel->getCategoryBySlug(new Slug($slug));
    }
}
