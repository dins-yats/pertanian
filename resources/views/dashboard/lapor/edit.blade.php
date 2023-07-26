@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Pengaduan</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="/dashboard/lapors/{{ $lapor->user_id }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="id_poktan" class="form-label">ID poktan</label>
      <input type="text" class="form-control @error('id_poktan') is-invalid @enderror" id="id_poktan" name="id_poktan" required autofocus 
      value="{{ old('id_poktan', $lapor->id_poktan) }}">
      @error('id_poktan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="poktan" class="form-label">Nama</label>
      <input type="text" class="form-control" id="poktan" name="poktan" required value="{{ old('poktan', $lapor->poktan) }}">
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <input type="text" class="form-control" id="status" name="status" required value="{{ old('status', $lapor->status) }}">
    </div>
    <div class="mb-3">
      <label for="Kelurahan" class="form-label">Nama</label>
      <input type="text" class="form-control" id="Kelurahan" name="Kelurahan" requiredvalue="{{ old('Kelurahan', $lapor->kelurahan) }}">
    </div>
    <button type="submit" class="btn btn-primary">Update Postingan</button>
  </form>
</div>



<script>
  const title= document.querySelector('#poktan');
    // const status= document.querySelector('#poktan');



    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

</script>


@endsection