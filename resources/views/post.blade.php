@extends('layouts.main')

@section('container')

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">


         <h1 class="mb-3">{{ $post->title }}</h1>
         <p>Oleh <a href="/authors/{{ $post->user->ketua }}" class="text-decoration-none">{{ $post->user->ketua }} </a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
         {{-- <h5>{{ $post->author }}</h5> --}}

         @if ($post->image)
         <div style="max-height: 500px; overflow:hidden">
         <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
         </div>
         @else
         <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
         @endif

         <article class="my-5">

            {!! $post->body !!}
            {{-- {{ $post->body }} --}}
         </article>
        

         <a href="/posts" class="text-decoration-none">Kembali ke Artikel</a>
      </div>
   </div>
</div>




   @endsection