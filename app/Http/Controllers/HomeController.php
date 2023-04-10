<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        if(auth()->user()->role_id == 1){
            $user = User::where('role_id',2)->first();
            return view('admin.pages.dashboard',compact('user'));
        }
        elseif(auth()->user()->role_id == 2){
            return view('pages.index');
        }
    }
}
