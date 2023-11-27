<?php

namespace App\Providers;

use App\Models\Category;
use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Support\ServiceProvider;

/* PostService */
use App\Services\Interfaces\PostServiceInterface;
use App\Services\PostService;

/* PostRepository */
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Eloquents\PostRepository;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Services\CategoryService;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\ProductService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
            Các interface không thể dùng để khởi tạo đối tượng
            Binding interface với một lớp giúp chúng ta có thể dùng được
            Tắt dòng binding là thấy tai hại liền :)
        */
        /* Binding Services*/
        $this->app->singleton(PostServiceInterface::class, PostService::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);


        
        /* Binding Repositories*/
        $this->app->singleton(PostRepositoryInterface::class, PostRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
