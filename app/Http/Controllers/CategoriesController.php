<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('categories.create',compact("statuses"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:50|unique:categories,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $category = new Category();
        $category->name = $request['name'];
        $category->slug = Str::slug($request['name']);
        $category->status_id = $request['status_id'];
        $category->user_id = $user_id;

        $category->save();
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show',["category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('categories.edit')->with('category',$category)->with('statuses',$statuses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name'=>['required','max:50','unique:categories,name,'.$id],
            'status_id'=>['required','in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $category = Category::findOrFail($id);
        $category->name = $request['name'];
        $category->slug = Str::slug($request['name']);
        $category->status_id = $request['status_id'];
        $category->user_id = $user_id;

        $category->save();
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
}
