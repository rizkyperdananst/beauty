<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/beauty/style.css') }}">
  </head>
  <body>

     {{-- Start Header --}}
     <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container-fluid">
                 <a class="navbar-brand" href="{{ route('home') }}">Beauty</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                   <div class="navbar-nav ms-auto">
                     <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                     <a class="nav-link" href="#disease">Disease</a>
                     <a class="nav-link" href="#product">Product</a>
                     <a class="nav-link" href="#about">About</a>
                     <a class="nav-link" href="{{ route('login') }}">Login</a>
                   </div>
                 </div>
               </div>
          </nav>
     </header>
     {{-- End Header --}}

     <main>
          @yield('content')
     </main>

     <footer class="bg-light">
          <div class="row mt-5 p-5">
               <div class="col-md-6">
                    <img src="{{ url('assets/beauty/bg-hero.jpg') }}" width="80%" height="200px" alt="">
               </div>
               <div class="col-md-6">
                    <h5>Alamat Kami</h5>
                    <h6>Jln Sisingamangaraja No 52</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolor reprehenderit, non nesciunt repudiandae tempora rem molestias sapiente. Explicabo, vel ducimus, provident ipsa perferendis modi veniam rem a quam reprehenderit sint cum accusamus. Facilis, velit labore voluptatum dicta animi accusantium iusto consectetur consequuntur a quo cum veritatis reprehenderit nihil ea.</p>
               </div>
          </div>
     </footer>
     <div class="copyright text-center bg-primary p-2">
          <span>&copy; copyright <a href="#" class="text-dark text-decoration-none fw-bold">Beauty</a></span> 
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>