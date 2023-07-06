@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-4">
       <div class="col-lg-8">
 
 
          <h1 class="mb-3">{{ $post->title }}</h1>
            <div class="mb-3">
          <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span> Kembali Ke Menu Post</a>
          <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Hapus</a>
         </div>

          <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
 
          <article class="my-5">
 
             {!! $post->body !!}
             {{-- {{ $post->body }} --}}
          </article>
         

       </div>
    </div>
 </div>
 

@endsection