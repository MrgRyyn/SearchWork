<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $products = app()->make('App\Http\Controllers\ProductController')->profile();
        $projects = app()->make('App\Http\Controllers\ProjectController')->profile();
        
        return view('user-profile', ['products' => auth()->user()->products()->get()], ['projects' => auth()->user()->projects()->get()]);
    }
    public function manage()
    {
        $products = app()->make('App\Http\Controllers\ProductController')->manage();
        $projects = app()->make('App\Http\Controllers\ProjectController')->manage();
        
        return view('manage', ['products' => auth()->user()->products()->get()], ['projects' => auth()->user()->projects()->get()]);
    }

    // seller profile
    // public function sellerProfile(User $user)
    // {
    //     $products = app()->make('App\Http\Controllers\ProductController')->sellerProfile();
    //     $projects = app()->make('App\Http\Controllers\ProjectController')->sellerProfile();

    //     return view('seller-profile', compact('user', 'products', 'projects'));
    // }
    public function sellerProfile($id) {
        $seller = User::findOrFail($id);
        $products = $seller->products()->latest()->get();
        $projects = $seller->projects()->latest()->get();
    
        return view('seller-profile', compact('seller', 'products', 'projects'));
    }
    

}
