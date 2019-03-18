<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\User;
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
        //$data['products'] = Product::all();//paimti visus irasus
        //$data['product'] = Product::find($id);

        /*$data['products'] = Product::where('id',1)->orderBy('name', 'DESC')->get();//paima visus irasus
        /*$data['product'] = Product::where('qty',0)->first();*///paima tik pirma irasa
        /*$data['product'] = User::where('role_id',1)->value('email');*///gaunam visus emailus



        //return view('admin.products.list', $data);*/
        $data['products'] = Product::all();
        //$data['categories'] = Category::all();



       
        return view('admin.products.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();

        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        /*$category = new Category();*/
        $product->name = $request->name;
        $product->price = $request->price;
        $product->slug = $request->slug;
        $product->description = $request->description;
        /*$category->parent_id = $request->parent_id;*/

        $product->save();
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product'] = Product::find($id);
        return view('admin.products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product','id'));
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
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        
        $product = Product::find($id);
        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = $request->get('slug');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
