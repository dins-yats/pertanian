@extends('layouts.main')

@section('container')

<div class="row justify-content-center ">
 <div class="col-lg-5">
  
{{-- notif login berhasil --}}
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
          </button>
        </div>
        
            
        @endif

    <main class="form-signin">
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
      
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required>
            <label for="Username">Username</label>
            @error('username') 
            <div class="invalid-feedback">
              {{ $message }}
            </div> 
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        </form>
      </main>
 </div>
</div>

  
@endsection
