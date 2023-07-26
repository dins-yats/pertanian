@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Profil</h1>
 
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>

@endif

<div class="table-responsive col-lg-8">

  <div class="container">
    <div class="row justify-content-center">
      <!--md agar responsif-->
      <div class="card border-secondary col-md-4 mb-3">
        <div class="card-body text-dark">
          <h5 class="card-title">Nama Poktan</h5>
          <p class="card-text"> {{ Auth()->user()->nama_poktan }}</p>
          <h5 class="card-title mt-4">ID Poktan</h5>
          <p class="card-text"> {{ Auth()->user()->id_poktan }}</p>
          <h5 class="card-title mt-4">NIK Ketua</h5>
          <p class="card-text"> {{ Auth()->user()->NIK }}</p>
        </div>
      </div>
      <div class="card border-secondary col-md-4 mb-3">
        <div class="card-body text-dark">
          
          <h5 class="card-title">Nama Ketua</h5>
          <p class="card-text"> {{ Auth()->user()->ketua }}</p>
          <h5 class="card-title mt-4">kelurahan</h5>
          <p class="card-text"> {{ Auth()->user()->kelurahan }}</p>
          <h5 class="card-title mt-4">kecamatan</h5>
          <p class="card-text"> {{ Auth()->user()->kecamatan }}</p>
        </div>
      </div>
      <div class="card border-secondary col-md-4 mb-3">
        <div class="card-body text-dark">
          <h5 class="card-title">Bantuan</h5>
          <p class="card-text"> {{ Auth()->user()->bantuan }}</p>
        </div>
      </div>
      <div class="card border-secondary col-md-4 mb-3">
        <div class="card-body text-dark">
          <h5 class="card-title">Jenis Bantuan</h5>
          <p class="card-text"> {{ Auth()->user()->jenis_bantuan }}</p>
        </div>
      </div>
    </div>
  </div>
    
    
@endsection


