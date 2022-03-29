<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <style>
        .f-smedia a{
            text-decoration: none;
            padding:10px;
            display: inline-block;
            height: 45px;
            width: 45px;
            margin-left: 5px;
            margin-top:1px;
            border-radius: 50%;
            background-color: white;
        }
            * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    
}
.product-img{
  height:500px !important;
}
.cart-img{
  height:100px !important;
  width:100px !important;
}
.viewport {
    background-image: url("img/cover.JPG");
    background-repeat: no-repeat;
    background-size: 100%;
    background-position:center center;
    max-width: 100%;
    padding-top: 35%;
  
}
.detail{
    color: #fff;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    }

@media(max-width: 992px){


}
@media(max-width: 768px){
  
}
@media(max-width: 576px){
  
}
.logo {
    height: 120px;
    padding-left: 50px;
    padding-top: 10px;
}
.downarrow {
    color: white;
    top:90%;
    
   
}
.bidhya {
    color: orange;
    text-align: center;
    font-size: 50px;
}
.column1 {
    float: left;
    width: 25.33%;
    padding: 10px;
    height: 300px;
}

.column2,
.column3 {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px;
    
   
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

.row {
    text-align: justify;
}

.aboutus {
    padding: 30px;
    margin: 25px;
}

.aboutus-title {
    color: rgba(155, 6, 6, 0.76);
}
.column2 {
    text-align: justify;
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
    overflow: hidden;
    
}

.column3 {
    text-align: center;
}

.lunching {
    border-radius: 5px;
}

#aboutuss {
    transition-delay: 200s;
}

.downarrow {
    color: white;
}

html {
    scroll-behavior: smooth;
}
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
    float: right;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;´+
    margin-top: 30px;
    
}
.card-img{
    background-image: url("img/necklace.JPG");
    height: 230px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover,
.overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
    .overlay a {
        font-size: 20px
    }
    .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
    }
}
#parent-pool{
  position: relative;
  
}

.card-text{
    width: 400px;
    height: 250px;
    background-color: rgb(75, 0, 0);
    color: white;
    position: absolute;
    top: -100px;
    left: 10%;
    padding: 20px;
    margin-top: 15px;
}
.cardp01{
    color: orange;
    font-size: larger;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.cardp02{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    letter-spacing: 1px;
}
.column1-1 {
   
    
    padding-left: 100px;
    padding-top: 50px;
    height: 300px;
    letter-spacing: 2px;
    color: rgb(110, 0, 0);
}

.column2-1
 {
   
  
    padding: 50px;
    
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
}

.column3-1{
   
   
    padding: 40px;
   
    text-align: justify;
}
.rows:after {
    content: "";
    display: table;
    clear: both;
    
}
.view-room-button{
    padding: 13px;
  font-size: medium;
  background-color: rgb(75, 0, 0);
  color: white;
  margin-left: 90px;
}
.view-room-button:hover{
    background-color: black;
}

#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 2;
  background-color: rgb(0,0,0);
  
  }
  
  #mySidenav a:hover {
  left: 0;
  
  
  }
  #products{
  top: 140px;
  background-color: #f44336;
  z-index: 2;
  }
   #mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 2;
  background-color: rgb(0,0,0);
  
  }
  .product-grid{
    padding-bottom: 20px;
    padding-top: 20px;
    }
    .product-grid:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .image{
    position: relative;
    }
    .overlay{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: rgba(67, 68, 68, 0.7);
    }
    .image:hover .overlay{
    opacity: 1;
    }
    .detail{
    color: #fff;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    }
    
/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  font-size: 14px;
  background: #37517e;
}

#footer .footer-newsletter {
  padding: 50px 0;
  background: #f3f5fa;
  text-align: center;
  font-size: 15px;
  color: #444444;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #37517e;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
  text-align: left;
}

#footer .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #47b2e4;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
  background: #209dd8;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #fff;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h3 {
  font-size: 28px;
  margin: 0 0 10px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  text-transform: uppercase;
  font-weight: 600;
  color: #37517e;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
  color: #5e5e5e;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #37517e;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #47b2e4;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #777777;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #47b2e4;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #47b2e4;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #209dd8;
  color: #fff;
  text-decoration: none;
}

#footer .footer-bottom {
  padding-top: 30px;
  padding-bottom: 30px;
  color: #fff;
}

#footer .copyright {
 
}

#footer .credits {
  float: right;
  font-size: 13px;
}

#footer .credits a {
  transition: 0.3s;
}

@media (max-width: 768px) {
  #footer .footer-bottom {
    padding-top: 20px;
    padding-bottom: 20px;
  }
  #footer .copyright, #footer .credits {
    text-align: center;
    float: none;
  }
  #footer .credits {
    padding-top: 4px;
  }
}

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  p-0 m-0 shadow-sm">
            <div class="container-fluid">
                
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div style="display: inline-block;"><img src="/img/logo.png" alt="" height="50px" width="50px"></div>
                        <div style="display: inline-block;">{{ config('app.name', 'Laravel') }}</div>
                    </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="/">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/product">{{ __('Product') }}</a>
                                </li>
                                @if (Route::has('/'))
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutus">{{ __('AboutUs') }}</a>
                                </li>
                                 @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form class="d-flex" method="get" action="/search">
                                <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:15em; height:2em;margin-top:4px;background-color:#EBEBEB;">
                                
                              </form>
                        </li>
                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if (Auth()->user()->id == '1')
                            <li class="nav-item">
                                <a class="nav-link" href="/adminpannel">Dashboard</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <div style="display: inline-block"><a class="nav-link" href="/cart">Cart</a></div>
                                @if (Auth()->user()->carts()->count() > 0)
                                <div align="center"; style = "font-size:10pt; display:inline-block; color: white; background-color:red; border-radius:50%; padding:2px; margin-left:-8px; width:25px;">{{Auth::user()->carts()->count()}}</div>
                                @endif
                                
                            </li>
                            @endif
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a href=>  <b>MY PROFILE</b></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  <!--  <a class="dropdown-item" href="/deactivate/{{Auth()->user()->id}}" >
                                        Deactivate
                                    </a> -->
                                </div>
                                
                                
                                
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="p-0 m-0">
            @yield('content')
        </main>


        <footer id="footer" class=" bottom-0 mt-5 start-0 w-100">



<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>BidyaJewellers</h3>
        <p>
        <
        <li>Hakha,Lalitpur</li> 
         <li><strong>Phone:</strong> +977-9860125928,+977-9860631</li>
          <li><strong>Email:</strong>bidyajewellersb@gmail.com</li>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">products</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">contact</a></li>
         
        </ul>
      </div>

     

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p></p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fab fa-skype"></i></a>
          <a href="#" class="linkedin"><i class="fab fa-viber"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>BidyaJewellers</h3>
        <p>
        <li>   <img src="/img/logo.png" class="logo"></li>
       
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
</div>
</footer>
    </div>

    
</body>
</html>
