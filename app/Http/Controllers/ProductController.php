<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(12);
        $categories = Category::all();
        return view('home')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::all();
        $product = Product::where('slug', $slug)->firstOrFail();
        $alsoLike = Product::where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();

        return view('product')->with([
            'product' => $product,
            'alsoLike' => $alsoLike,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")->paginate(12);
        return view('search')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function category($slug)
    {
        $categories = Category::all();
        $category = optional(Category::where('slug', $slug)->first());
        $products = Product::where('category_id', $category->id)->get();

        return view('category')->with([
            'products' => $products,
            'categories' => $categories,
            'category' => $category
        ]);
    }
}
