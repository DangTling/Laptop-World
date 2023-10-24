<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Companies;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('q');

        $data = Products::query()->where(column: 'name', operator: 'like',  value: '%' . $search . '%')->paginate(5);
        $data->appends(['q' => $search]);
        return view('admin.products.index', [
            'data' => $data,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Companies::all();
        return view('admin.products.create', [
            'companies' => $companies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obj = new Products();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/avatar');

            $obj->image = 'avatar/' . $request->file('image')->hashName();
        }
        if ($request->hasFile('image-second')) {
            $path = $request->file('image-second')->store('public/avatar');

            $obj->image_second = 'avatar/' . $request->file('image-second')->hashName();
        }
        if ($request->hasFile('image-third')) {
            $path = $request->file('image-third')->store('public/avatar');

            $obj->image_third = 'avatar/' . $request->file('image-third')->hashName();
        }
        $obj->name = $request['name'];
        $obj->type = $request['type'];
        $obj->price = $request['price'];
        $obj->description = $request['description'];
        $obj->producer = $request['producer'];

        $obj->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        $companies = Companies::all();
        return view('admin.products.edit', [
            'data' => $products,
            'companies' => $companies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/avatar');

            $products->image = 'avatar/' . $request->file('image')->hashName();
        }
        if ($request->hasFile('image_second')) {
            $path = $request->file('image_second')->store('public/avatar');

            $products->image_second = 'avatar/' . $request->file('image_second')->hashName();
        }
        if ($request->hasFile('image_third')) {
            $path = $request->file('image_third')->store('public/avatar');

            $products->image_third = 'avatar/' . $request->file('image_third')->hashName();
        }
        $products->name = $request['name'];
        $products->type = $request['type'];
        $products->price = $request['price'];
        $products->description = $request['description'];
        $products->producer = $request['producer'];

        $products->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('products.index');
    }
}
