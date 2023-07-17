<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\category;
use Auth;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            // untuk memanggil semua post
            // 'post' =>post::all() 
            'posts' =>post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => category::all()
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

        $request->validate([
            'title'         => 'required|max:255',
            'slug'          => 'required',
            'category_id'   => 'required',
            'image'         => 'image|file|max:2048',
            'body'          => 'required',
        ]);


        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('post-images', $file_name);



        $title          = $request->title;
        $slug           = $request->slug;
        $category_id    = $request->category_id;
        $image           = $image;
        $body           = $request->body;


        $data = new post();
        $data->user_id      = Auth::id();
        $data->title        = $title;
        $data->slug         = $slug;
        $data->category_id  = $category_id;
        $data->image        = $image;
        $data->excerpt      = Str::limit(strip_tags($request->body), 200);
        // $data->excerpt      = '-';
        $data->body         = $body;
        $data->save();

        return redirect('/dashboard/posts')->with('success', 'Post telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('dashboard.posts.show',[
             'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('dashboard.posts.edit',[
            'post' => $post,
            'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {

        $request->validate([
            'title'         => 'required|max:255',
            'slug'          => 'required',
            'category_id'   => 'required',
            'image'         => 'image|file|max:2048',
            'body'          => 'required',
        ]);
        
        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('post-images', $file_name);


        $title          = $request->title;
        $slug           = $request->slug;
        $category_id    = $request->category_id;
        $image           = $image;
        $body           = $request->body;

        $data = post::find($post->id);
        $data->user_id      = Auth::id();
        $data->title        = $title;
        $data->slug         = $slug;
        $data->category_id  = $category_id;
        $data->image        = $image;
        $data->excerpt      = Str::limit(strip_tags($request->body), 200);
        // $data->excerpt      = '-';
        $data->body         = $body;
        $data->save();

        return redirect('/dashboard/posts')->with('success', 'Post Telah berhasil di Update');

    //     $rules = ([
    //         'title'         => 'required|max:255',
    //         // 'slug'          => 'required|unique:post',
    //         'category_id'   => 'required',
    //         'body'          => 'required',
    //     ]);

    //     if($request->slug != $post->slug) {
    //         $rules['slug'] = 'required|unique:post';
    //     }

    //    $validatedData =  $request->validate($rules);

    //    $validatedData['user_id'] = auth()->user()->id;
    //    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    //    post::where('id', $post->id)
    //         ->update($validatedData);

            // return redirect('/dashboard/posts')->with('success', 'Post Telah berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }   
        post::destroy($post->id); 
        return redirect('/dashboard/posts')->with('success', 'Post telah dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' =>$slug]);
    }
}
