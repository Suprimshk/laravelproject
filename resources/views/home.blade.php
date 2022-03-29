
@extends('layouts.app')
@section("content")


<section class="m-0 p-0">
    
<div class="viewport img-fluid mx-auto d-block">
<div id="mySidenav" class="sidenav">
           
           <a href="https://www.fenegosida.org/" id="tp">Today's Gold Price</a>
        </div>
        
        <div class="bidhya">
            <a href="#aboutuss" class="downarrow"><i class="fas fa-angle-double-down"></i></a>
        </div>
    </div>
    <!-- ABOUT US STARTS HERE -->
    <div class="aboutus container ml-5 center pl-5" id="aboutuss">
    <div class="row">
  <div class="col-xs-6 col-sm-4"><h2 class="aboutus-title">ABOUT US </h2><br>
                <i class="mb-5">“Jewellery Is the Way of Keeping Memories Alive.”</i></div>
  <div class="col-xs-6 col-sm-4"> <p>Bidhya Jewellery is located in heart place Hakha(near patan durbar) in Lalitpur. Bidhya Jewellery makes 
                    handmade jwels made up of gold and silver. 
                With high customer satisfaction bidhya jewellers have been providing services since past 80 years.</p><br><br>
              </div>
  <div class="col-xs-6 col-sm-4"> <img class="img-fluid mx-auto d-block ml-5 pl-5" src="{{ asset('img/reason.jpg') }}" height="300px " width="550px " class="lunching "></div>
</div>
        
    </div>

    <div id="parent-pool">
        <div class="card-img"></div>
        <div class="card-text">
            <p class=" cardp01">One of the most appreciated Jewellery Shop</p>
            <br>
            <br>
            <p class="cardp02">Our upscale transformation has consistently led our shop to be rated among the best, based on user reviews.</p>
        </div>
        </div>
        <!-- here starts our room section -->
    <div class="container">
  <div class="row">
    <div class="col-sm column1-1">
    <h2 class="our-rooms">OUR PRODUCTS</h2>
</div>
    <div class="col-sm column2-1">
    <p class="carded">Our upscale transformation has consistently led our shop to be rated among the best, based on user reviews.
            Our products are made from scratch. All our team works behind for the detail in our products.All our team works behind for the detail in our products.All our team works behind for the detail in our products.</p>
    </div>
    <div class="col-sm column3-1">
    <a href="/product">      <button class="view-room-button">VIEW ALL PRODUCTS </button> </a>
    </div>
  </div>
</div>
  
@endsection


