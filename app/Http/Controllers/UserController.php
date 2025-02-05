<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Log;
use App\Models\merchantlog;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(){
        return view('signup');
    }
    public function loginpage(){
        return view('index');
    }
    public function createUser(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:merchantlogs,email',
            'shopname' => 'required|string',
            'shoppassword' => 'required|min:5',
        ]);

        $user = merchantlog::create([
            'merchant_name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['shoppassword']), 
            'shopname' => $validatedData['shopname'],
        ]);

        if ($user) {
            return redirect()->route('merchant.login')->with('success', 'Account created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create account. Please try again.');
    }
    public function adminDashboard(){
        $data=merchantlog::where('role', 'merchant')->get();
        return view('adminDashboard',compact('data'));
    }

    public function login(Request $request){ 
        $validatedData = $request->validate([
            'email' => 'required|email',
            'shoppassword' => 'required|string',
        ]);
        
        $merchant=merchantlog::where('email', $validatedData['email'])->first();
        if($merchant && Hash::check($validatedData['shoppassword'], $merchant->password)){
            if($merchant->role == 'admin'){
                return redirect()->route('admin.dashboard')->with('success', "Login Successful");
            }else{
                return redirect()->route('merchant.dashboard')->with('success', "Login Successful");
            }
        }else{
            Log::warning('Failed login attempt: Incorrect password for email: ' . $validatedData['email']);
            return "Failed: Incorrect password";
        }
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    
    public function merchantDashboard(){
        $data=Shop::all();
        return view('merchantDashboard',compact('data'));
    }

    public function loadShop($id){
        return view('shop-single', compact('id'));
    }

}

