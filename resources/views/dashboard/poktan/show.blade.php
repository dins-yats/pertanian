@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Detail Data Kelompok Tani</h1>
</div>

<div class="col-lg-8">
    {{-- <form method="POST" action="{{ url('/dashboard/poktan/store') }}" enctype="multipart/form-data"> --}}
    <form method="POST" action="/dashboard/poktan/store" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
      <label for="id_poktan" class="form-label">ID Poktan</label>
      <input type="text" class="form-control @error('id_poktan') is-invalid @enderror" id="id_poktan" name="id_poktan" disabled required autofocus 
      value="{{ old('id_poktan', $user->id_poktan) }}">
      @error('id_poktan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="nama_poktan" class="form-label">Nama Poktan</label>
        <input type="text" class="form-control @error('nama_poktan') is-invalid @enderror" id="nama_poktan" name="nama_poktan" disabled required autofocus 
        value="{{ old('nama_poktan', $user->nama_poktan) }}">
        @error('nama_poktan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="NIK" class="form-label">Nomor Induk Kependudukan</label>
        <input type="text" maxlength="16"  class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK" disabled required autofocus 
        value="{{ old('NIK', $user->NIK) }}">
        @error('NIK')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="ketua" class="form-label">Ketua</label>
        <input type="text" class="form-control @error('ketua') is-invalid @enderror" id="ketua" name="ketua" disabled required autofocus value="{{ old('ketua', $user->ketua) }}">
        @error('ketua')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kelurahan" class="form-label">Kelurahan</label>
        <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" disabled required autofocus value="{{ old('kelurahan', $user->kelurahan) }}">
        @error('kelurahan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" disabled required autofocus value="{{ old('kecamatan', $user->kecamatan) }}">
        @error('kecamatan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="verifikasi" class="form-label">VERIFIKASI POKTAN</label>
        <input type="text" class="form-control @error('verifikasi') is-invalid @enderror" id="verifikasi" name="verifikasi" disabled required autofocus value="{{ old('verifikasi', $user->verifikasi) }}">
        @error('verifikasi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="bantuan" class="form-label">bantuan</label>
        <input type="text" class="form-control @error('bantuan') is-invalid @enderror" id="bantuan" name="bantuan" disabled required autofocus value="{{ old('bantuan', $user->bantuan) }}">
        @error('bantuan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      {{-- <div class="mb-3">
        <label for="alamat_sekretariat" class="form-label">Alamat Sekretariat</label>
        <textarea class="form-control" id="alamat_sekretariat" name="alamat_sekretariat" disabled>{{ strip_tags($user->alamat_sekretariat) }}</textarea>
      </div> --}}
      <div class="mb-3">
        <label for="alamat_sekretariat" class="form-label">Alamat Sekretariat</label>
        <textarea class="form-control" id="alamat_sekretariat" name="alamat_sekretariat" disabled>{{ $user->alamat_sekretariat }}</textarea>
      </div>
      <div class="mb-3">
        <label for="alamat_sekretariat" class="form-label">Jenis Bantuan</label>
        <textarea class="form-control" id="alamat_sekretariat" name="alamat_sekretariat" disabled>{{ $user->jenis_bantuan }}</textarea>
      </div>

  </form>
</div>



<script>

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })



</script>


@endsection