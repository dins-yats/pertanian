@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-4">
       <div class="col-lg-8">
 
 
          <h1 class="mb-3">{{ $lapor->poktan }}</h1>
            <div class="mb-3">
          <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span> Kembali Ke Menu Post</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('apakah yakin ingin menghapus data')">
              <span data-feather="trash-2"></span>Hapus</button>
            </form>
         </div>
 
             {!! $lapor->laporan !!}
             {{-- {{ $post->body }} --}}
          </article>
         

       </div>
    </div>
 </div>
 

@endsection