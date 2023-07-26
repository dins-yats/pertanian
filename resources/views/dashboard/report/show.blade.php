@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-4">
       <div class="col-lg-8">
 
 
          <h1 class="mb-3">Lihat data pengaduan </h1>
            <div class="mb-3">
          <a href="/dashboard/report" class="btn btn-primary"><span data-feather="arrow-left"></span> Kembali Ke Menu Post</a>
          <a href="/dashboard/report/{{ $report->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/report/{{ $report->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('apakah yakin ingin menghapus data')">
              <span data-feather="trash-2"></span>Hapus</button>
            </form>
         </div>
            
            @csrf
            <div class="mb-3">
              <label for="id_poktan" class="form-label">ID poktan</label>
              <input type="text" class="form-control @error('id_poktan') is-invalid @enderror" id="id_poktan" name="id_poktan" disabled autofocus 
              value="{{ old('id_poktan', $report->id_poktan) }}">
            </div>
            <div class="mb-3">
               <label for="title" class="form-label">Judul</label>
               <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" disabled autofocus 
               value="{{ old('title', $report->title) }}">
             </div>
             <div class="mb-3">
               <label for="status" class="form-label">Status</label>
               <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" disabled autofocus 
               value="{{ old('status', $report->status) }}">
             </div>
             <div class="mb-3">
               <label for="poktan" class="form-label">Poktan</label>
               <input type="text" class="form-control @error('poktan') is-invalid @enderror" id="poktan" name="poktan" disabled autofocus 
               value="{{ old('poktan', $report->poktan) }}">
             </div>
             <div class="mb-3">
               <label for="kelurahan" class="form-label">Kelurahan</label>
               <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" name="kelurahan" disabled autofocus 
               value="{{ old('kelurahan', $report->kelurahan) }}">
             </div>
             <div class="mb-3">
               <label for="kecamatan" class="form-label">Kecamatan</label>
               <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" disabled autofocus 
               value="{{ old('kecamatan', $report->kecamatan) }}">
             </div>
             <div class="mb-3">
               <label for="laporan" class="form-label">laporan</label>
               <textarea class="form-control" id="laporan" name="laporan" value="{{ old('laporan', $report->laporan) }}" style="height: 250px" disabled>{{ old('laporan', $report->laporan) }}</textarea>
             </div>
             {{-- <div class="mb-3">
              <label for="solusi" class="form-label">Solusi</label>
              <input id="solusi" type="hidden" name="solusi" value="{{ old('solusi', $report->solusi) }}" required>
              <trix-editor input="solusi"></trix-editor>
            </div> --}}

             <div class="mb-3">
               <label for="solusi" class="form-label">Solusi</label>
               <textarea class="form-control" id="solusi" name="solusi" style="height: 250px" disabled>{{ old('solusi', $report->solusi) }}</textarea>
             </div>
            </div>
           
          
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