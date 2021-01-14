<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

        <!-- lightsliderrrrrrrrrr -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css')}}">
        <link rel="shortcut icon" href="images/iconjudul.png">
        <script src="https:kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!-- jQueryyyy -->
        <script src="js/JQuery.js"></script>
        <!-- lightsliderrjs -->
        <script src="js/lightslider.js"></script>

    </head>
    <body>
        <!--navigasi-bar---------->
        <nav>
            <div class="logo">
                <img src="{{ asset('images/iconjudul.png')}}">
            </div>

            <ul>
                <li><a href="">Beranda</a></li>
                <li><a href="#tentangkami">Tentang Kami</a></li>
            </ul>
            <div class="right-menu">
                <!-- user akun ------------->
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <a href="{{ route('logout') }}">LogOut</a>
                </a>
            </div>
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        

        <!-- Slider foto ------------------->
        <ul id="adaptive" class="cs-hidden">
            <!-- box 1 ------------------>
            <li class="item-a">
                <!--box----------------->
                <div class="full-slider-box f-slider-1">
                    <!--slider text Container-->
                    <div class="slider-text-container">

                    <div class="f-slider-text">
                        <span>Kereta Api Indonesia</span>
                        <strong>Jelajahi Kekayaan alam <br>Nusantara 
                        bersama <br><font>PT.Kereta Api Indonesia</font></strong>
                        <span>#AyoNaikKereta</span>
                    </div>
                    </div>
                </div>
            </li>

             <!-- box 2 ------------------>
             <li class="item-a">
                <!--box----------------->
                <div class="full-slider-box f-slider-2">
                    <!--slider text Container-->
                    <div class="slider-text-container">

                    <div class="f-slider-text">
                        <span>Kereta Api Indonesia</span>
                        <strong>Jelajahi Kekayaan alam <br>Nusantara 
                        bersama <br><font>PT.Kereta Api Indonesia</font></strong>
                        <span>#AyoNaikKereta</span>
                    </div>
                    </div>
                </div>
            </li>

             <!-- box 3 ------------------>
             <li class="item-a">
                <!--box----------------->
                <div class="full-slider-box f-slider-3">
                    <!--slider text Container-->
                    <div class="slider-text-container">

                    <div class="f-slider-text">
                        <span>Kereta Api Indonesia</span>
                        <strong>Jelajahi Kekayaan alam <br>Nusantara 
                        bersama <br><font>PT.Kereta Api Indonesia</font></strong>
                        <span>#AyoNaikKereta</span>
                    </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- Box Pemesanan Tiket KA ---------------->
        <div class="about-container">
            <!-- info -->
            <div class="box-pesan">
                <h1>Cari, Reservasi & Pesan Tiket Kereta Api KAI Online</h1>
                <div class="cari">
                <form method="get" action="/index/carikereta">
                    Dari :<input type="text" name="berangkat">
                    Tujuan: <input type="text" name="tujuans">
                    Tanggal: <input type="date" name="date">
                    <input type="submit" value="carikereta">
                </form>
                </div>
            </div>
        </div>
        <div class="container">
            <form method="get">
            <h2>Table Stasiun</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kereta</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">tgl_berangkat</th>
                        <th scope="col">tgl_sampai</th>
                        <th scope="col">kelas</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php  $n=1;?>
                    @foreach($jadwal as $s)
                        <tr>
                            <td><?php echo $n ?></td>
                            <td>{{ $s->nama_kereta }}</td>
                            <td>{{ $s->tujuan}}</td>
                            <td>{{ $s->nama_stasiun }}</td>
                            <td>{{ date('m-d-Y H:i:s', strtotime($s->tgl_berangkat))}}</td>
                            <td>{{ date('m-d-Y H:i:s', strtotime($s->tgl_sampai))}}</td>
                            <td>{{ $s->kelas }}</td>
                            <td>Rp.{{ number_format($s->harga, 0, ',', '.')}}</td>
                            <td><a href="/index/pesan/{{$s->id}}">Pesan</a></td>
                        </tr>
                    <?php  $n++?>
                    @endforeach
                </tbody>    
            </table>
            </form>
        </div>
        

        <!-- Deskripsi Tiket ---------------------->
        <div class="container">
            <h1 class="bg-light text-dark text-center mt-4">Cek Tiket Kereta Api ke Destinasi Favorit kamu!</h1>
            <div class="bg-light text-dark text-center mt-4">
                <p id="tentangkami">
                    Kamu ingin berangkat liburan atau pulang kampung, tapi belum tahu 
                    jadwal kereta api menuju ke kota kamu?Kamu bisa cek tiket kereta api 
                    ke destinasi yang kamu inginkan di PT.KAI.&nbsp;
                </p>
                <p>&nbsp;</p>
                <p>
                    Masukkan destinasi, tanggal perjalanan, jumlah penumpang, lalu klik cari kereta. Maka kamu akan segera
                    menemukan jadwal kereta yang tersedia, lengkap dengan ketersediaan tiket yang bisa kamu booking.&nbsp;
                </p>
                <p>&nbsp;</p>
                <p>
                    Semakin mudan bukan untuk kamu memilih tiket KAI Online yang paling sesuai?Kuy, pesan tiket kereta api
                    hari ini juga di PT.KAI.
                </p>
            </div>
        </div>

        <script src="js/script.js"></script>
        
        <script type="text/javascript">
            /*---slider foto-------*/
            $(document).ready(function(){
                $('#adaptive').lightSlider({
                    adaptiveHeight:true,
                    auto:true,
                    item:1,
                    slideMargin:0,
                    loop:true
                });
            });
        </script>
        <footer>
            <div class="footer-wrapper">
                <div class="single-footer">
                    <h2>YuDaGl</h2>
                    <p>Kerja Kerja Kerja</p>
                </div>
                <div class="single-footer">
                    <h2>GodBless</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Makan</a></li>
                        <li><a href="#">Tidur</a></li>
                        <li><a href="#">Kos-kosan</a></li>
                        <li><a href="#">Kontrakan</a></li>
                    </ul>   
                </div>
                <div class="single-footer">
                    <h2>Get Help</h2>
                    <ul>
                        <li><a href="#">Glenn Steven 0822545664</a></li>
                        <li><a href="#">Daniel 0356402112</a></li>
                        <li><a href="#">Yudha 05487984532</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>