<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('custom/custom.css')}}" crossorigin="anonymous">
  <title>Hello, world!</title>
  <style>
    .container1 {
      margin: 10px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light" style="background-color: rgb(237, 27, 36);">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/logo.jpg')}}" width="200" height="100" class="d-inline-block align-top" alt=""> &nbsp;
      <span class="judul">Program Kasir Toko Sembako Maju Mundur</span>
    </a>
  </nav>
  <br>
</body>
<div class="container1">
  <div class="row">
    <div class="col-sm-2">
      <nav class="navbar navbar-light" style="background-color: rgb(237, 27, 36);">
        <a class="navbar-brand">
          <span class="text-white">Menu</span>
        </a>
      </nav>

      <nav class="navbar navbar-light menu">
        <a class="navbar-brand" href="/kasir/transaksi">
          <img src="{{asset('img/shopping-cart.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">
          Transaksi
        </a>
      </nav>
      <nav class="navbar navbar-light menu">
        <a class="navbar-brand" href="/kasir/tambah">
          <img src="{{asset('img/plus.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">
          Tambah Barang
        </a>
      </nav>
      <nav class="navbar navbar-light menu">
        <a class="navbar-brand" href="/kasir/data">
          <img src="{{asset('img/document.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">
          Daftar Barang
        </a>
      </nav>
    </div>

    <div class="col-sm-9">
      <div class="row">
        <h3>Transaksi</h3>
        <table class="table table-borderless">
          <tbody>
            <tr>
              <th>Kode Barang</th>
              <td><input type="text"><button type="button" class="btn btn-light"><img src="{{asset('img/loupe.png')}}" width="25" height="25" class="d-inline-block align-top" alt=""></button></td>
              <th>Total</th>
              <td><input class="form-control" readonly></td>
            </tr>
            <tr>
              <th>Nama Barang</th>
              <td><input class="form-control" readonly></td>
              <th>Bayar</th>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <th>Harga</th>
              <td><input class="form-control" readonly></td>
              <th>Kembali</th>
              <td><input class="form-control" readonly></td>
            </tr>
            <tr>
              <th>Jumlah</th>
              <td><input type="text" class="form-control"></td>
              <td><button type="button" class="btn btn-primary"><img src="{{asset('img/cart.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">Tambah</button></td>
            </tr>
            <tr>
              <th>Sub-Total</th>
              <td><input class="form-control" readonly></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h3>Daftar Belanja</h3>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>