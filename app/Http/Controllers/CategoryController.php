<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('category')->get();
        return response()->view('admin/category/index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->where('parent_id','=',Null);
        return response()->view('admin/category/create',['categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent = intval($request->parent_category) ;
        if ($request->parent_category === 'main'){
            $parent = null;
        }
        $request->validate([
            'name' => 'required|max:20|unique:categories',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $parent;
        $category->save();
        $categories = Category::all();
        return redirect('admin/category')
            ->with(['message' => 'The category successfully created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Category::find($id);
        $categories = Category::all()->where('parent_id','=',Null);
        return response()->view('admin/category/edit',['categories' => $categories, 'edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $parent = intval($request->parent_category) ;
        if ($request->parent_category === 'main'){
            $parent = null;
        }
        $request->validate([
            'name' => "required|max:20|unique:categories,name,{$category->id}"
        ]);

        $category->update([
            'name'=> $request->name,
            'parent_id'=>$parent
        ]);
        return redirect()-> route('category.index')
            ->with(['message' => 'The category was successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $name = $category->name;
        $category->delete();
        return redirect()->back()->with(['message' => 'you have successfully removed ' . $name . ' category ']);
    }
}
