@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Cart</div>

                <div class="card-body">
                @if (Auth::check())
                <form action="{{ route('order.store') }}" method="post">@csrf
                                <div class="form-group">
                                    <p>Name: {{ auth()->user()->name }}</p>
                                    <p>Email: {{ auth()->user()->email }}</p>
                                    <p>Phone Number: <input type="number" class="form-control" name="phone" required></p>
                                    <p>Small pizza  <input type="number" class="form-control" name="small_pizza"
                                            value="0"></p>
                                    <p>Medium pizza  <input type="number" class="form-control" name="medium_pizza"
                                            value="0"></p>
                                    <p>Large pizza  <input type="number" class="form-control" name="large_pizza"
                                            value="0"></p>
                                    
                                            <p>Address:<textarea class="form-control" name="address" required></textarea></p>

                                    <label  >Choose the payment method:</label>

<select name="payment_method" required>
<option value=""></option>
  <option value="Cash on delivery">Cash on delivery</option>
  <option value="bkash">Bkash</option>
  
</select>
                                    <p><input type="hidden" name="pizza_id" value="{{ $pizza->id }}"></p>

                                    <p class="text-center">

                                      <button class="btn btn-warning" type="submit">Confirm order</button>
                                    </p>

                                    @if (session('message'))
                                       <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                         </div>
                                    @endif
                                    @if (session('errmessage'))
                                    <div class="alert alert-danger" role="alert">
                                    {{ session('errmessage') }}
                                    </div>
                                    @endif
</div>
</form>
                    @else
                    <p><a href="/login">Please Login to place order</a></p>
                @endif                  
                    
                </div>
            </div>
        </div>
        

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Pizza</div>

                                <div class="card-body">
<html>
 <head>
<style>
p.ex1 {
  font-size: 50px;
  
}
p.ex2 {
  font-size: 25px;
}

</style>
</head>       
<body >  
                    
                                   <!-- <img src="{{ Storage::url($pizza->image) }}" class="img-thumbnail" style="width: 100%;">-->
                                    <p class="ex1">{{$pizza->name}}</p>
                                    <p class="ex2">{{$pizza->description}}</h3>
                                    <br>
                                    <p class="lead">Small pizza price: {{ $pizza->small_pizza_price }}Tk</p>
                                    <p class="lead">Medium pizza price: {{ $pizza->medium_pizza_price }}Tk</p>
                                    <p class="lead">Large pizza price: {{ $pizza->large_pizza_price }}Tk</p>
</br>

                                    </a>
                                </div>
                            
                        
                    </div>
                </div>


                </body>
</html>               
                
           

<style>
    a.list-group-item{
        front-size:18px;
    }
    a.list-group-item:hover {
        background-color: #ECDF7F;
        color: #fff;
        }
        .card-header {
            background-color: #ECDF7F;
            color: #fff;
            font-size: 20px;
        }
</style>
@endsection
