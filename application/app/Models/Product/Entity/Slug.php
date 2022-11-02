<?php

declare(strict_types=1);

namespace App\Models\Product\Entity;

use Webmozart\Assert\Assert;

final class Slug
{
    public function __construct(private string $slug)
    {
        Assert::notEmpty($slug);
    }

    public function getValue(): string
    {
        return $this->slug;
    }
}
