
@extends('layouts.main')

@section('container')



<h1 class="mb-4 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">

      {{-- biar url tetap di category --}}
      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-success" type="submit">Cari</button>
      </div>
    </form>
  </div>
</div>


@if ($posts->count())
    
<div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"> 
      {{-- {{ posts[0]->category->name }}   //untuk memanggil gambar  --}}
      <img src="/img/tanihome.jpg"
       class="d-block w-100" style="height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
  
      <img src="/img/tanihomee.jpg"
       class="d-block w-100" style="height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
  
      <img src="/img/hometani.jpg"
       class="d-block w-100" style="height: 500px;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="container">
  <div class="row">
    @foreach ($posts as $post)
        
  
    <div class="col-md-4 mb-3">
      <div class="card">

        {{-- untuk label diatas --}}
        <div class="position-absolute px-3 py-2 " style="background-color : rgba(0, 0, 0, 0.5 )">
          <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
        </div>
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
        </div>
        @else
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" 
        alt="{{ $post->category->name }}">
         @endif
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
          {{ $post->created_at->diffForHumans() }}
            
            </small>
          </p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

    
@else

<P class="text-center fs-3">Postingan Tidak Ditemukan</P>
    
@endif

<div class="d-flex justify-content-center">
  {{ $posts-> links() }}
</div>


        
   @endsection