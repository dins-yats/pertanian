@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-4">
       <div class="col-lg-8">
 
 
          <h1 class="mb-3">Buat Pengaduan </h1>
            <div class="mb-3">
          <a href="/dashboard/reportus" class="btn btn-primary mb-4"><span data-feather="arrow-left"></span> Kembali Ke Menu Post</a>
            
            @csrf
            <div class="mb-3">
              <label for="id_poktan" class="form-label">ID poktan</label>
              <input type="text" class="form-control @error('id_poktan') is-invalid @enderror" id="id_poktan" name="id_poktan" autofocus 
              value="{{ old('id_poktan') }}">
            </div>
            <div class="mb-3">
               <label for="title" class="form-label">Judul</label>
               <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus 
               value="{{ old('title') }}">
             </div>
             <div class="mb-3">
               <label for="poktan" class="form-label">Poktan</label>
               <input type="text" class="form-control @error('poktan') is-invalid @enderror" id="poktan" name="poktan" autofocus 
               value="{{ old('poktan') }}">
             </div>
             <div class="mb-3">
               <label for="kelurahan" class="form-label">Kelurahan</label>
               <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" autofocus 
               value="{{ old('kelurahan') }}">
             </div>
             <div class="mb-3">
               <label for="kecamatan" class="form-label">Kecamatan</label>
               <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" autofocus 
               value="{{ old('kecamatan') }}">
             </div>
             <div class="mb-3">
               <label for="laporan" class="form-label">Laporan</label>
               <textarea class="form-control" id="laporan" name="laporan" value="{{ old('laporan') }}" style="height: 250px"></textarea>
             </div>
             {{-- <div class="mb-3">
              <label for="solusi" class="form-label">Solusi</label>
              <input id="solusi" type="hidden" name="solusi" value="{{ old('solusi', $report->solusi) }}" required>
              <trix-editor input="solusi"></trix-editor>
            </div> --}}

           
          
        </div>
       </div>
 
 <script>
   const title= document.querySelector('#title');
      const slug= document.querySelector('#slug');
  
  
      title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });
  
      document.addEventListener('trix-editor-boolean', function(e) {
        e.preventDefault();
        
        
      })
  
      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
        
        
      })
  
  </script>

@endsection