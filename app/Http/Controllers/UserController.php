<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\merchantlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(){
        return view('signup');
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
        return view('adminDashboard');
    }
    public function merchantDashboard(){
        return view('merchantDashboard');
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
}

