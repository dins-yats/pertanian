@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Proses pengaduan</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="/dashboard/reportus/{{ $Report->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="id_poktan" class="form-label">ID poktan</label>
      <input type="text" class="form-control @error('id_poktan') is-invalid @enderror" id="id_poktan" name="id_poktan" disabled autofocus 
      value="{{ old('id_poktan', $Report->id_poktan) }}">
      @error('id_poktan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="poktan" class="form-label">Nama</label>
      <input type="text" class="form-control" id="poktan" name="poktan" disabled value="{{ old('poktan', $Report->poktan) }}">
    </div>
    <div class="mb-3">
      <label for="kelurahan" class="form-label">kelurahan</label>
      <input type="text" class="form-control" id="kelurahan" name="kelurahan" disabled value="{{ old('kelurahan', $Report->kelurahan) }}">
    </div>
    <div class="mb-3">
      <label for="kecamatan" class="form-label">kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" name="kecamatan" disabled value="{{ old('kecamatan', $Report->kecamatan) }}">
    </div>
    <div>
      <label for="Status" class="form-label">Status</label>
    <select class="form-select" id="status" name="status" required value="{{ old('status', $Report->status) }}">
      <option selected>Pilih Status</option>
      <option value="belum dikonfimasi">belum Konfimasi</option>
      <option value="Proses">Proses</option>
      <option value="Selesai">Selesai</option>
    </select>
  </div>
    <div class="mb-3">
      <label for="laporan" class="form-label">laporan</label>
      <textarea class="form-control" id="laporan" name="laporan" value="{{ old('laporan', $Report->laporan) }}" style="height: 200px" disabled>{{ old('laporan', $Report->laporan) }}</textarea>
    </div>
    <div class="mb-3">
      <label for="solusi" class="form-label">Body</label>
      @error('solusi')
      <p class="text-danger">
        {{ $message }}
      </p>
      @enderror
      <input id="solusi" type="hidden" name="solusi" value="{{ old('solusi', $Report->solusi) }}" required>
      <trix-editor input="solusi"></trix-editor>
    </div>
   
    <button type="submit" class="btn btn-primary">Update Postingan</button>
  </form>
</div>



<script>
// const title= document.querySelector('#title');
// const slug= document.querySelector('#slug');


//     title.addEventListener('change', function() {
//       fetch('/dashboard/posts/checkSlug?title=' + title.value)
//         .then(response => response.json())
//         .then(data => slug.value = data.slug)
//     });


    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })
</script>


@endsection