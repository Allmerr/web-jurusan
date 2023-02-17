<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blog.index', [
            'posts' => Blog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:blogs|required',
            'image' => 'image|file|max:4000',
            'body' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 30, '...');

        Blog::create($validatedData);

        return redirect('/dashboard/blog')->with('success', 'New Blog Has Been Added Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blog.show', [
            'post' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', [
            'post' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if($request->slug != $blog->slug){
            $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($blog->image){
                Storage::delete($blog->image);
            }
            
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 30, '...');

        Blog::where('id', $blog->id)->update($validatedData);

        return redirect('/dashboard/blog')->with('success', 'A Blog Has Been Updated Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->image){
            Storage::delete($blog->image);
        }
        Blog::destroy($blog->id);
        return redirect('dashboard/blog')->with('success', 'A Blog Has Been Deleted Successful!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}