<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\post;
use  \App\Models\category;

class PostController extends Controller
{
    public function index ()
    {
            $title='';
            if(request('category')) {
                $category = category::firstWhere('slug', request('category'));
                $title= ' : ' . $category->name;
            }

        return view('Posts',[
            "title" => "Artikel Pertanian" . $title,
            // "posts"=> post::all(),
            "posts"=> post::latest()->filter(request(['search', 'category', 'user']))
            ->paginate(7)->withQueryString()
            // get diganti ke paginate
            // "posts"=> post::latest()->get(), kalau tidak ada pencarian pakai ini kalau ada pakai latest yang atas
        
        ]);
    }


    public function show(post $post)
    {
        return view('post', [
            "title"=>"single post",
            "post" => $post
        ]);
    }



}
