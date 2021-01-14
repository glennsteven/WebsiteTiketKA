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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            
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
        </table>
        
      
        </body>
</html>