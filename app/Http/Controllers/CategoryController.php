<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoryService->all($request);
        /*
            - xử lý dữ liệu sau khi nhận được
            - hoặc trả về json đối với API
        */
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
           $this->categoryService->store($request);
           return redirect()->route('categories.index');
        } catch (\Execption $e) {
           return redirect()->route('categories.index');
            
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->categoryService->find($id);
         /*
            - xử lý dữ liệu sau khi nhận được
            - hoặc trả về json đối với API
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryService->find($id);
         /*
            - xử lý dữ liệu sau khi nhận được
            - hoặc trả về json đối với API
        */
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            $this->categoryService->update($request,$id);
            return redirect()->route('categories.index');

        } catch (\Execption $e) {
            return redirect()->route('categories.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->categoryService->destroy($id);
            return redirect()->route('categories.index');

        } catch (\Execption $e) {
            return redirect()->route('categories.index');

        }
    }
}
