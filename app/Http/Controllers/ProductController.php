<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search()
    {
        $products = Product::all();
        return DataTables::of($products)
        ->addColumn('image',function ($product) {
            $image = '';
            if(isset($product->image))
            {
                $image =  '<img src="sfds" alt="">';
            }
            return $image;
        })
        ->addColumn('category',function ($product) {
                $category = '';
                if(isset($product->category))
                {
                    $category =  $product->category->name;
                }
                return $category;
            })
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
