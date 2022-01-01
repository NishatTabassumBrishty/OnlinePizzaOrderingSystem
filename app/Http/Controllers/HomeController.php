<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        {
            if(auth()->user()->is_admin == 1){
                return redirect()->route('pizza.create');
            }
            $orders = Order::latest()->where('user_id',auth()->user()->id)->get();
            return redirect()->route('frontpage');
            
           // return view('home',compact('orders'));
        }
        
    }
}
