@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Data Kelompok Tani</h1>
</div>

<div class="col-lg-8">
    {{-- <form method="POST" action="{{ url('/dashboard/poktan/store') }}" enctype="multipart/form-data"> --}}
    <form method="POST" action="/dashboard/poktan/store" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
      <label for="id_poktan" class="form-label">ID Poktan</label>
      <input type="number" class="form-control @error('id_poktan') is-invalid @enderror" id="id_poktan" name="id_poktan" required autofocus value="{{ old('id_poktan') }}">
      @error('id_poktan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="nama_poktan" class="form-label">Nama Poktan</label>
        <input type="text" class="form-control @error('nama_poktan') is-invalid @enderror" id="nama_poktan" name="nama_poktan" required autofocus value="{{ old('nama_poktan') }}">
        @error('nama_poktan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="NIK" class="form-label">Nomor Induk Kependudukan</label>
        <input type="text" maxlength="16"  class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK" required autofocus value="{{ old('NIK') }}">
        @error('NIK')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="ketua" class="form-label">Ketua</label>
        <input type="text" class="form-control @error('ketua') is-invalid @enderror" id="ketua" name="ketua" required autofocus value="{{ old('ketua') }}">
        @error('ketua')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kelurahan" class="form-label">Kelurahan</label>
        <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" required autofocus value="{{ old('kelurahan') }}">
        @error('kelurahan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" required autofocus value="{{ old('kecamatan') }}">
        @error('kecamatan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div>
        <label for="verifikasi" class="form-label">VERIFIKASI POKTAN</label>
      <select class="form-select" id="verifikasi" name="verifikasi" required value="{{ old('verifikasi') }}">
        <option selected></option>
        <option value="belum dikonfimasi">SUDAH</option>
        <option value="Proses">BELUM</option>
      </select>
    </div>
      <div>
        <label for="bantuan" class="form-label">Bantuan</label>
      <select class="form-select" id="bantuan" name="bantuan" required value="{{ old('bantuan') }}">
        <option selected></option>
        <option value="belum dikonfimasi">SUDAH</option>
        <option value="Proses">BELUM</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="alamat_sekretariat" class="form-label">Alamat Sekretariat</label>
      @error('alamat_sekretariat')
      <p class="text-danger">
        {{ $message }}
      </p>
      @enderror
      <textarea class="form-control" id="alamat_sekretariat" name="alamat_sekretariat"></textarea>
    </div>
    {{-- <div class="mb-3">
      <label for="alamat_sekretariat" class="form-label">Alamat Sekretariat</label>
      @error('alamat_sekretariat')
      <p class="text-danger">
        {{ $message }}
      </p>
      @enderror
      <input id="alamat_sekretariat" type="hidden" name="alamat_sekretariat" value="{{ old('alamat_sekretariat') }}">
      <trix-editor input="alamat_sekretariat"></trix-editor>
    </div> --}}
    <div class="mb-3">
        <label for="jenis_bantuan" class="form-label">Jenis Bantuan</label>
        @error('jenis_bantuan')
        <p class="text-danger">
          {{ $message }}
        </p>
        @enderror
        <input id="jenis_bantuan" type="hidden" name="jenis_bantuan" value="{{ old('jenis_bantuan') }}">
        <trix-editor input="jenis_bantuan"></trix-editor>
      </div>
    <button type="submit" class="btn btn-primary">Buat Postingan</button>
  </form>
</div>



<script>

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })



</script>


@endsection