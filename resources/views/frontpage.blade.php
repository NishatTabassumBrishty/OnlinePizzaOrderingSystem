@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!--<div class="col-md-4">
        <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">Category1</a>
                        <a href="" class="list-group-item list-group-item-action">Category2</a>
                        <a href="" class="list-group-item list-group-item-action">Category3</a>
                        <a href="" class="list-group-item list-group-item-action">Category4</a>
                        <a href="" class="list-group-item list-group-item-action">Category5</a>

                    </ul>
                    
                </div>-->
            
        

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Menu ({{count($pizzas)}} pizza)</div>
 
                <div class="card-body">
                    <div class="row">
                    @forelse ($pizzas as $pizza )
                                <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                                    <img src="{{ Storage::url($pizza->image) }}"  style="width: 100%;">
                                    <p>{{ $pizza->name }}</p>
                                    <p>{{ $pizza->description }}</p>
                                    <a href="{{route('pizza.show',$pizza->id)}}">
                                
                                        <button class="btn btn-outline-warning mb-1">Order now</button>
                                    </a>
                                </div>
                            @empty
                                <p>no pizzas to show</p>

                            @endforelse
                            </div>
        </div>
                        
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
