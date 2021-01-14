<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <link rel="shortcut icon" href="images/iconjudul.png">
        <script src="https:kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <!--navigasi-bar---------->
        <nav>
            <div class="logo">
                <img src="{{ asset('images/iconjudul.png')}}">
            </div>

            <ul>
                <li><a href="#">Beranda</a></li>
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
        </ul>

        <div class="container">
            <h3 style="text-align: center;" class="font-weight-bold">Data diri untuk Tiket KA</h3>
            <div class="container">
                <br><br>


        <div class="row">
            <div class="col-6" style="padding-left: 0px;">
                <div class="shadow p-4 mb-4 " style="text-align: left; border-radius: 10px; background-color: white; ">
                    <div style='text-align: center'>
                    
                        <font class='h2'><strong> Isi data diri anda </strong></font>
                    </div>
                  
                        <form  method="post" action="/transfer">
                            {{ csrf_field() }}
                            <div class="pr-3">
                                <table style="margin-left: 10%;">
                                    <tr>
                                        <td>
                                            <label>Title</label>
                                        </td>
                                        <td>
                                        <select name="gen" class="form-control">
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama : </td>
                                        <td><input type="text" class="form-control" name="nama" ></td>
                                    </tr>
                                    <tr>
                                        <td>NIK :</td>
                                        <td><input type="text" class="form-control" name="identitas" ></td>
                                    </tr>
                                    <tr>
                                        <td>No.Telp :</td>
                                        <td><input type="text" class="form-control" name="no_telp" ></td>
                                    </tr>
                                    <tr>
                                        <td>email :</td>
                                        <td><input type="text" class="form-control" name="email" ></td>
                                    </tr>
                      
                                    <tr>
                                    <td><input type="submit" value="Done" class="btn btn-primary" ></td>
                                </tr>
                                </table>
                            </div>
                        </form>
                </div>
            </div>
            
            <div class="col-6 " style="padding-right: 0px;">
                        <div class="shadow p-4 mb-4 " style="text-align: left; border-radius: 10px; background-color: white; ">
                            <div>
                        <div style='text-align: center'>
                            <font class='h2'> <strong> Tiket Kereta </strong> </font>
                        </div>
                    </div>
                    <hr>
                    <form action="/beranda" method="get">
                        <div class="pr-4">
                            <table>
                                @foreach($jadwal as $j)
                                <tr>
                                    <td>Nama Kereta :</td>
                                    <td>{{ $j->nama_kereta }}</td>
                                </tr>
                                <tr>
                                    <td>Asal :</td>
                                    <td>{{ $j->tujuan }}</td>
                                </tr>
                                <tr>
                                    <td>Tujuan :</td>
                                    <td>{{ $j->nama_stasiun }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Berangkat :</td>
                                    <td>{{ date('m-d-Y H:i:s', strtotime($j->tgl_berangkat))}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Sampai :</td>
                                    <td>{{ date('m-d-Y H:i:s', strtotime($j->tgl_sampai))}}</td>
                                </tr>
                                <tr>
                                    <td>Kelas :</td>
                                    <td>{{ $j->kelas }}</td>
                                </tr>
                                <tr>
                                    <td>Harga :</td>
                                    <td>Rp.{{ number_format($j->harga, 0, ',', '.')}}</td>
                                </tr>
                            @endforeach
                            </table>
                            <input type="submit" name="save" value="Batal" class="btn btn-danger" style="margin-left:44%; ">
                        </div>
                    </form>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        </body>
</html>