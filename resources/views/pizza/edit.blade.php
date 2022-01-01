@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
        @if(count($errors)>0)
            <div class="card mt-5">
                <div class="card-body">
                
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error) 
                    <p>{{$error}}</p>
                    @endforeach
                </div>
                </div>

            </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Pizza</div>
            
                
            <form action="{{route('pizza.update', $pizza->id)}}" method="post" enctype="multipart/form-data">@csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of Pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza" value="{{$pizza->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description of Pizza</label>
                        <textarea class="form-control" name="description">{{$pizza->description}}</textarea>
                    </div>
                    <div class="form-inline">
                        <label>Pizza Price(Tk)</label>
                        <input type="text" name="small_pizza_price" class="form-control" placeholder="small_pizza_price" value="{{$pizza->small_pizza_price}}">
                        <input type="text" name="medium_pizza_price" class="form-control" placeholder="medium_pizza_price" value="{{$pizza->medium_pizza_price}}">
                        <input type="text" name="large_pizza_price" class="form-control" placeholder="large_pizza_price" value="{{$pizza->large_pizza_price}}">
                    </div>
                            <!--<div class="form-group">
                                <label for="description">Category</label>
                                <select class="form-control" name="category">
                                    <option value=""></option>
                                    <option value="vegetarian">Vegetarian Pizza</option>
                                    <option value="nonvegetarian">Non vegetarian Pizza</option>
                                    <option value="traditional">Traditional Pizza</option>

                                </select>
                            </div>-->
                    <!--<div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        <img src="{{ Storage::url($pizza->image) }}" width="80">
                    </div>-->
                    <div class="form-group text-center">
                        <button class="btn btn-outline-warning" type="submit">Save</button>

                    </div>

                    
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