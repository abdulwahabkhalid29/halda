<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:191',
            'message' => 'required|max:191',
        ]);
        $store = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        if(!empty($store->id)){
            return redirect()->route('pages.contact')->with('success','Contact Added');
        }
        return redirect()->route('pages.contact')->with('error','Something Went Wrong');
    }
}
