<?php

namespace App\Providers;

use App\Repositories\AttributeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\Contracts\AttributeRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\CountryRepositoryInterface;
use App\Repositories\Contracts\CustomerRepositoryInterface;
use App\Repositories\Contracts\NotificationRepositoryInterface;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Contracts\SellerRepositoryInterface;
use App\Repositories\Contracts\SeoRepositoryInterface;
use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Repositories\Contracts\VariantRepositoryInterface;
use App\Repositories\CountryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SellerRepository;
use App\Repositories\SeoRepository;
use App\Repositories\ShopRepository;
use App\Repositories\VariantRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface to an implementation repository class
     */
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }
}
