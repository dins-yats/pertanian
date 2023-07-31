@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Kelompok tani</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
  </div>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>

@endif

<div class="row justify-content-center mb-3 col-lg-8">
  <div class="col-md-6">
    <form action="" method="get">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Postingan" name="keyword" value="{{ request('keyword') }}"  aria-describedby="basic-addon2">
        <button class="input-group-text btn btn-info" id="basic-addon2">Cari</button>
      </div>
    </form>
  </div>
</div>
{{-- <div class="row justify-content-center mb-3 col-lg-8">
  <div class="col-md-6">
    <form action="" method="get">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Postingan" name="keyword"  aria-describedby="basic-addon2">
        <button class="input-group-text btn btn-info" id="basic-addon2">Cari</button>
      </div>
    </form>
  </div>
</div> --}}

<div class="table-responsive col-lg-8">
  <a href="/dashboard/poktan/create" class="btn btn-primary mb-3"><span data-feather="plus"></span>Tambah Kelompok Tani</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Poktan</th>
          <th scope="col">Nama Kelompok Tani</th>
          <th scope="col">NIK</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->id_poktan }}</td>
            <td>{{ $user->nama_poktan }}</td>
            <td>{{ $user->NIK }}</td>
            <td>{{ $user->kecamatan }}</td>
            <td>
              <a href="/dashboard/poktan/{{ $user->id }}"
              
                 class="badge bg-info"> <span data-feather="eye"></span></a>

                <a href="/dashboard/poktan/{{ $user->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                <form action="/dashboard/poktan/{{ $user->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('apakah yakin ingin menghapus data')">
                    <span data-feather="trash-2"></span></button>
                  </form>
                
            </td>
          </tr>  
        @endforeach
       
      </tbody>
    </table>
  </div>

  <div class="d-flex justify-content-center">
    {{ $users->links() }}
  </div>
@endsection