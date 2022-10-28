<?php

namespace App\Repositories\Blog;

use App\Repositories\BaseRepositoriesInterface;

interface BlogRepositoryInterface extends BaseRepositoriesInterface
{
    public function getLatestBlogs($limit = 3);
}
