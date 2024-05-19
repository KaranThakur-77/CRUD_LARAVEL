<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("layouts.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("layouts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "username"=>"required",
            "email"=> "required|email",
            "msg"=> "required|min:10",  
        ]);
        // dd($request->all());
        $product = new Products;
        $product->name = $request->username;
        $product->email = $request->email;
        $product->message = $request->msg;
        $product->image = $request->image;

        $product->save();
        return back()->with("success","Product created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
