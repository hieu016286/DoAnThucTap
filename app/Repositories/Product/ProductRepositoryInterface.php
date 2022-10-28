<?php

namespace App\Repositories\Product;

use App\Repositories\BaseRepositoriesInterface;

interface ProductRepositoryInterface extends BaseRepositoriesInterface
{
    public function getRelatedProducts($product, $limit = 4);
    public function getFeaturedProductsByCategory($categoryId);
    public function getProductOnIndex($request);
    public function getProductsByCategory($request, $categoryName);
}
