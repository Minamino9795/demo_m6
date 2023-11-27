<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $this->productService->all($request);
        /*
            - xử lý dữ liệu sau khi nhận được
            - hoặc trả về json đối với API
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Logic trang thêm mới
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $this->productService->store($request);
            // logic after save
        } catch (\Execption $e) {
            //logic handle error
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->productService->find($id);
         /*
            - xử lý dữ liệu sau khi nhận được
            - hoặc trả về json đối với API
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->productService->find($id);
         /*
            - xử lý dữ liệu sau khi nhận được
            - hoặc trả về json đối với API
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        try {
            $this->productService->update($request,$id);
            // logic after update
        } catch (\Execption $e) {
            //logic handle error
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->productService->destroy($id);
            // logic after destroy
        } catch (\Execption $e) {
            //logic handle error
        }
    }
}
