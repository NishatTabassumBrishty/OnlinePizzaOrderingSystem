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
                                    
                                    
                                            <p>Address:<textarea class="form-control" name="address" required></textarea></p>

                                    <label  >Choose the payment method:</label>

<select name="payment_method" required>
<option value=""></option>
  <option value="Cash on delivery">Cash on delivery</option>
  <option value="bkash">Bkash</option>
  
</select>
                                    <p><input type="hidden" name="pizza_id" value="{{ $pizza->id }}"></p>

                                    <p class="text-center">

                                     <button class="btn btn-danger" type="submit">Confirm order</button> 
                                    </p>

                                   
</div>
</form>
                                     
                    
                </div>
            </div>
        </div>
        </div>
        </div>
        

                
           

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

