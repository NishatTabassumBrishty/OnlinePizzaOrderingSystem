<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Models\Order;

class FrontendController extends Controller
{
    
    public function index()
    {
        $pizzas = Pizza::latest()->get();
        return view('frontpage', compact('pizzas'));
    }

    public function show($id){
        $pizza = Pizza::find($id);
        return view('show',compact('pizza'));
    }
    public function store(Request $request)
    {
        if ($request->small_pizza == 0 && $request->medium_pizza == 0 && $request->large_pizza == 0) {
            return back()->with('errmessage', 'Please order atleast one pizza');
        }
        if ($request->small_pizza < 0 || $request->medium_pizza < 0 || $request->large_pizza < 0) {
            return back()->with('errmessage', 'Order should not have negative number');
        }
        Order::create([
             
            'user_id' => auth()->user()->id,
            'pizza_id' => $request->pizza_id,
            'small_pizza' => $request->small_pizza,
            'medium_pizza' => $request->medium_pizza,
            'large_pizza' => $request->large_pizza,
            'phone' => $request->phone,
            'payment_method' => $request->payment_method,
            'address' => $request->address
        ]);
        return back()->with('message', 'Your order is on your way!!');

    }
}
