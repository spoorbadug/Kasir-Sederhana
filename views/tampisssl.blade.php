<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-info">
  <a class="navbar-brand" href="#">
    <img src="{{asset('img/cashier.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
    Program Kasir Toko Sembako Maju Mundur
  </a>
</nav>
<br>

  <div class="row">
    <div class="col-sm-3">
      <nav class="navbar navbar-light bg-info">
      <a class="navbar-brand">
      Menu
      </a>
      </nav>

      <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="">
        <img src="{{asset('img/shopping-cart.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">
      Transaksi
      </a>
      </nav>
      <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="">
        <img src="{{asset('img/plus.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">
      Tambah Barang
      </a>
      </nav>
      <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="">
        <img src="{{asset('img/document.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">
      Daftar Barang
      </a>
      </nav>
    </div>

    <div class="col-sm-5">
      <nav class="navbar navbar-light">
      <a class="navbar-brand">
      Transaksi
      </a>
      </nav>

      <form class="form-inline">
        <div class="form-group mb-2">
          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="ID Barang">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <input type="text" class="form-control" id="id">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>

    <form class="form-inline">
      <div class="form-group mb-2">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nama Barang">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <fieldset disabled>
        <input type="text" class="form-control" id="id">
      </fieldset>
      </div>
    </form>
    <form class="form-inline">
      <div class="form-group mb-2">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Harga">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <fieldset disabled>
        <input type="text" class="form-control" id="id">
      </fieldset>
      </div>
    </form>


    </div>

    <div class="col-sm">
      asgasgds
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>