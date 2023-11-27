<?php

namespace App\Services;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /* Triển khai các phương thức trong PostServiceInterface */
    public function all($request){
        return $this->categoryRepository->all($request);
    }
    public function find($id){
        return $this->categoryRepository->find($id);
    }
    public function store($request){
        return $this->categoryRepository->store($request);
    }
    public function update($request, $id){
        return $this->categoryRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->categoryRepository->destroy($id);
    }
}
