@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Ganti Password</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger col-lg-8" role="alert">
  {{ session('error') }}
</div>

@endif

<div class="col-lg-8">
    <form method="post" action="/dashboard/password" enctype="multipart/form-data">
      {{-- @method('PUT') --}}
      @csrf
      <div class="mb-3">
        <label for="old_password" class="form-label">Password Sekarang</label>
        <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password" required autofocus>
        @error('old_password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="new_password" class="form-label">Passsword Baru</label>
        <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password"  autofocus >
        @error('new_password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfimasi Passsword</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation"autofocus>
        @error('password_confirmation')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Update Password</button>
    </form>
  </div>
  




@endsection