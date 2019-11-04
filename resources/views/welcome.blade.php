<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class ="container">
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class = "container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                    <img src="1.png" width="45" height="45">
                    </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cari Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                
                </ul>
            </div>
            </nav>

            </div>
            </div>
            </div>

        <div class = "container">
        <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <div class="col py-3 px-lg-5"> karena di LockerNich memiliki kelengkapan informasi untuk anda semua dalam mencari lowongan pekerjaan yang anda indamkan, 
                        LockerNich lah solusi yang anda butuhkan, dapat mencari lowongan pekerjaan dengan basic yang anda punya dan tentuny dengan gaji yang 
                        anda butuhkan, tunggu apa lagi ? ayo sekarang daftarkan dirimu !!!  </div>

            <div class="col py-3 px-lg-5"><img src="3.png"></div>
        </div>
        <button type="button" class="btn btn-primary">Primary</button>
        <hr>
        <h5>Mengapa Harus Dengan Kami ?</h5>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-sm">
                <center>
            <a class="nav-link" href="#" >
                <img src="a.png" width="180" height="180">
                <h6>Gaji Impian</h6>
                </a>
            </div>
            <div class="col-sm">
                <center>
            <a class="nav-link" href="#" >
                <img src="b.png" width="180" height="180">
                <h6>Akses Mudah</h6>
                </a>
            </div>
            <div class="col-sm">
                <center>
            <a class="nav-link" href="#" >
                <img src="c.png" width="180" height="180">
                <h6>24 Jam Service</h6>
                </a>
            </div>
            <div class="col-sm">
                <center>
            <a class="nav-link" href="#" >
                <img src="d.png" width="180" height="180">
                <h6>Informasi Lengkap</h6>
                </a>
            
            </div>
            
        </div>
        </div>
        <br><br><br>
        <form>
            <div>
                <h4>Input Data</h4>
            </div>
        <div class="form-group">
            <label for="pendidikan"></label>
            <input type="text" class="form-control" id="oendidikan" placeholder="Pendidikan Terakihir">
        </div>
        <div class="form-group">
            <label for="bidang"></label>
            <input type="text" class="form-control" id="bidang" placeholder="Bidang Yang Diinginkan">
        </div>
        <div class="form-group">
            <label for="lokasi"></label>
            <input type="text" class="form-control" id="lokasi" placeholder="Lokasi Yang Diinginkan">
        </div>
        <div class="form-group">
            <label for="gaji"></label>
            <input type="text" class="form-control" id="gaji" placeholder="Gaji Yang DiinginkanS">
        </div>
       
        <button type="submit" class="btn btn-primary" style = "margin : 0px 0px 0px 940px">Search</button>
        </form>

        <footer class="page-footer font-small blue" style="margin-top: 4%;">
        <img src="e.png" width="1020" height="250">
            </div>

    </div>
    </div>
        





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
            </div>
        </div>
    </body>
</html>
