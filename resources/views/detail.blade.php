@extends ('layouts.app')
@section('content')
<section class="p-5">
    
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="imgdetail" src="{{$product['gallery']}}" alt="pic">
        </div>
        <div class="col-md-6 cartdetail pt-5 ">
          <div><h4 class="section-title">Name:</h4><h1 class="section-info ">{{$item['name']}}</h1></div> 
           <h4 class="section-title">Price:</h4> <h1 class=" section-info ">Rs.&nbsp; {{$item['price']}}</h1>
           <h4 class="section-title">Description:</h4><h1 class=" section-info "> {{$item['description']}}</h1>
        
            <div class="row">
                   <div class="col-md-6 ">
                 
                       
                          <a href="{{route('add-Cart',[$product->id])}}"> <button class="btn btn-primary text-centre ">Add To Cart</button>
                                </a>  
                     </div>
                     <div class="col-sm">
              @if (!Auth::check())
                            <a href="/login" class="btn m-4 p-4 btn-danger">Buy</a>
                      @elseif (Auth()->user()->id == 1)
                      <a href="/update/{{$item['id']}}" class="btn btn-secondary">Update</a> 
                        
                      @else
                          <form action="https://uat.esewa.com.np/epay/main" method="POST" style="display: inline-block;">
                            <input value="{{(float)$item['price']}}" name="tAmt" type="hidden">
                            <input value="{{(float)$item['price']}}" name="amt" type="hidden">
                            <input value="0" name="txAmt" type="hidden">
                            <input value="0" name="psc" type="hidden">
                            <input value="0" name="pdc" type="hidden">
                            <input value="EPAYTEST" name="scd" type="hidden">
                            <input value="{{$item['id']}}" name="pid" type="hidden">
                            <input value="http://127.0.0.1:8000/sucess" type="hidden" name="su">
                            <input value="http://127.0.0.1:8000/failed" type="hidden" name="fu">
                            <input value="Buy" type="submit" class="btn btn-danger">
                            </form>
                      @endif
                  
                      @if (!Auth::check())
                            <a href="/login" class="btn m-4 p-2 btn-secondary">Cart</a>
                      @elseif (Auth()->user()->id == 1)
                      <a href="/remove/{{$item['id']}}" class="btn btn-danger">Delete</a>
                      
                        
                      @else
                        <a href="/cart/add/{{$item['id']}}" class="btn btn-primary">Cart</a>
                        {{-- <cart-manager item-id = "{{$item['id']}}"></cart-manager> --}}
                      @endif
                      
                      {{-- <a href="/cart/add/{{$item['id']}}" class="btn btn-primary" style="display: inline-block;">Add to cart</a> --}}
                </div>
            </div>
			
			<!-- ./Product -->
@endforeach
		
		</div>

	</div>
             </div>
        </div>   
    </div>
</div>

</section>
@endsection