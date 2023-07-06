@extends('layouts.second')

@section('container')

<img class="wave" src="img/rename.png">
	<div class="container">
		<div class="img">
			<img src="img/80.svg">
		</div>
		<div class="login-content">

            {{-- notif login berhasil --}}
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
          </button>
        </div>
         
        @endif
			<form action="/login" method="post">
                <img src="/img/muba.png" style="margin-right:10px">
				<img src="/img/siketantitle.png" style="margin-left:10px">
				<h2 class="title">Silahkan Login</h2>

                @csrf
                <div class="form-floating mb-3">
                  <input type="text" name="id_poktan" class="form-control @error('username') is-invalid @enderror" id="id_poktan" placeholder="id_poktan" autofocus required>
                  <label for="id_poktan">Username</label>
                  @error('username') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div> 
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="floatingPassword">Password</label>
                </div>

                <button class="btn" type="submit">Login</button>
            </form>
        </div>
    </div>

  
@endsection
