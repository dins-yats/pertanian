@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Postingan</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button>
  </div>
</div>

<div class="table-responsive col-lg-8">

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="plus"></span>Tambah Postingan</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}"
                 class="badge bg-info"> <span data-feather="eye"></span></a>

                <a href="/dashboard/posts{{ $post->id }}" class="badge bg-warning"> <span data-feather="edit"></span></a>
                <a href="/dashboard/posts{{ $post->id }}" class="badge bg-danger"> <span data-feather="trash-2"></span></a>
            </td>
          
          </tr>  
        @endforeach
       
      </tbody>
    </table>
  </div>
@endsection