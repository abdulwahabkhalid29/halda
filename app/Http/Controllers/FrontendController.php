<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontendController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function detail(){
        return view('pages.detail');
    }
    public function shop(){
        return view('pages.shop');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function blog_detail(){
        return view('pages.blog_detail');
    }
    public function about(){
        return view('pages.about');
    }
    public function squad(){
        return view('pages.squad');
    }
    public function match(){
        return view('pages.match');
    }
    public function tournament(){
        return view('pages.tournament');
    }
    public function dashboard(){
        $user = User::where('role_id',1)->firstorfail();
        return view('admin.pages.dashboard',compact('user'));
    }
}
