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
                <h3>Tambah Barang ke Database</h3>
                <table class="table table-borderless">
                    <form method="POST" action="/kasir/insertb">
                        {{ csrf_field() }}
                        <tbody>
                            <tr>
                                <th>Kode Barang</th>
                                <td><input type="text" name="kode" required></td>
                            </tr>
                            <tr>
                                <th>Nama Barang</th>
                                <td><input type="text" name="nama" required></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td><input type="text" name="harga" required></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td><input type="text" name="stok" required></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><button type="submit" name="submit" class="btn btn-primary"><img src="{{asset('img/cart.png')}}" width="25" height="25" class="d-inline-block align-top" alt="">Tambah</button></td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-12">



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