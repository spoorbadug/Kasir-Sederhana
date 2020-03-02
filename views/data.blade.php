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

        <div class="col-sm-10">
            <h3>Daftar Belanja</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr class=" text-center">
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brg as $b)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $b->kode }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->harga }}</td>
                        <td>{{ $b->stok }}</td>
                        <td class=" text-center"><a href="">Hapus</a> | <a href="">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


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