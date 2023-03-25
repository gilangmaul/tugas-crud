<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   {{-- Feather icons --}}
   <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
{{-- navbar --}}
<nav class="navbar navbar-expand-lg" style="background-color: #1fa9;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tugas CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item m-3">
          <a class="nav-link active position-absolute top-0 end-20" aria-current="page" href="/layouts.cart"> <i data-feather="shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- end Navbar --}}

    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    {{-- feather icons script --}}
    <script>
      feather.replace()
    </script>
</body>

</html>