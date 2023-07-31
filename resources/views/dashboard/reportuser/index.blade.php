@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Pengaduan</h1>

</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>

@endif

<div class="table-responsive col-lg-8">
  

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Poktan</th>
          <th scope="col">Judul</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($Report as $Report)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Report->id_poktan }}</td>
            <td>{{ $Report->title }}</td>
            <td>{{ $Report->status }}</td>
            <td>
              
              <a href="/dashboard/reportuser/{{ $Report->slug }}"
              
                 class="badge bg-info"> <span data-feather="eye"></span></a>

                <a href="/dashboard/reportuser/{{ $Report->slug }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a>
                
                <form action="/dashboard/reportuser/{{ $Report->slug }}" method="post" class="d-inline">
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
@endsection