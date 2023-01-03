<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.posts.index', [
            'table_title'   =>  'News Data',
            'posts' =>  Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.posts.create', [
            'categories'    =>  Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dump die debug
        // ddd($request);

        // test upload gambar
        // return $request->file('image')->store('news-images');

        $validateData = $request->validate([
            'title' =>  'required|max:255',
            'slug'  =>  'required|unique:posts',
            'image' =>  'image|file|max:2048',
            'body'  =>  'required',
            'category_id' => 'required'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('news-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::create($validateData);
        return redirect('admin/posts')->with('success', 'News has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('pages.admin.posts.show', [
            'post'  =>  $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('pages.admin.posts.edit', [
            'post'  =>  $post,
            'categories'    => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            "title" =>  'required|max:255',
            "body"  =>  'required',
            "image" =>  'image|file|max:2048',
            "category_id"   =>  'required'  
        ];

        if($request->slug != $post->slug) {
            $rules['slug']  = 'required|unique:posts';
        }

        $validateData = $request->validate($rules);

        // upload iamges must be after validation, kalo ngga gini nanti yg di simpen di DB adalah path temporary-nya jadi filenya ngga muncul
        if($request->image) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('news-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::where('id', $post->id)
                ->update($validateData);
        
        return redirect('admin/posts')->with('success', 'News has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if($post->image) {
            Storage::delete($post->image);
        }
        
        Post::destroy($post->id);
        return redirect('admin/posts')->with('success', 'News has been deleted');
    }
}
