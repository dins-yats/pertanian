<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- icon dari bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- css login --}}
    
    <link rel="icon" type="image/jpg" href="/img/ketanhijau.ico">

    <title>Siketan | {{ $title }}</title>



    {{-- percobaan --}}
    {{-- <style>
      .banner-image {
        background-image: url('img/banner-img.jpg');
        background-size: cover;
      }
    </style> --}}

  </head>
  <body>
      @include('partials.navbarr')

    <div class="container mt-4">
        @yield('container')
        <!-- nama bebas tapi harus sama dengan section untuk isi contoh container! -->
    </div>



    <script type="text/javascript" src="formlog/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- perobaan --}}
    {{-- <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-success', 'shadow','navbar-dark');
        } else {
          nav.classList.remove('bg-success', 'shadow');
        }
      });
    </script> --}}
  </body>

   
  </body>
</html>