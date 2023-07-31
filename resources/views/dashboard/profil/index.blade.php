@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">INFORMASI KELOMPOK TANI</h1>
 
</div>


<div class="container bootdey flex-grow-1 container-p-y ">

            <div class="media align-items-center py-3 mb-3">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-100 rounded-circle">
              <div class="media-body ml-4">
                <h4 class="font-weight-bold mb-2">{{ Auth()->user()->nama_poktan }}<span class="text-muted font-weight-normal">  @ {{ Auth()->user()->nama_poktan }}</span></h4>
                <div class="text-muted mb-2">ID KELOMPOK TANI : {{ Auth()->user()->id_poktan }}</div>
              </div>
            </div>

            <div class="card mb-4">
              <div class="card-body">
                <h6 class="mt-2 mb-3">KETUA KELOMPOK TANI</h6>
                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Nama Ketua</td>
                      <td>{{ Auth()->user()->ketua }}</td>
                    </tr>
                    <tr>
                      <td>NIK </td>
                      <td>{{ Auth()->user()->NIK }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>             
            </div>

            <div class="card">
              <hr class="border-light m-0">
              <div class="card-body">

                <h6 class="mt-2 mb-3">ALAMAT</h6>
                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Alamat Sekretariat</td>
                      <td>{{ Auth()->user()->alamat_sekretariat}}</td>
                    </tr>
                    <tr>
                      <td>Kelurahan</td>
                      <td>{{ Auth()->user()->kelurahan }}</td>
                    </tr>
                    <tr>
                      <td>Kecamatan</td>
                      <td>{{ Auth()->user()->kecamatan }}</td>
                    </tr>
                  </tbody>
                </table>

                <h6 class="mt-4 mb-3">BANTUAN</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td></td>
                      <td>
                        Rock,
                        Alternative,
                        Electro,
                        Drum &amp; Bass,
                        Dance
                      </td>
                    </tr>
                    <tr>
                      <td>Jenis Bantuan</td>
                      <td>
                        {{ Auth()->user()->jenis_bantuan }}
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>

          </div>

{{-- <div class="table-responsive col-lg-8">

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
     --}}
    
@endsection


