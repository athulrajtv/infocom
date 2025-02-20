<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function Login()
    {
        return view('admin.login.loginpage');
    }

    public function Register()
    {
        return view('admin.login.register');
    }

    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:logins,email', // Ensure email is unique 
            'password' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }   

        Login::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('success', 'Registration Successfully'); 
    }

    public function post_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        $user = Login::where('email', $credentials['email'])->first();

        if($user)
        {
            // Verify password
            if(Hash::check($credentials['password'], $user->password))
            {
                // Login the user and regenerate session to prevent fixation attacks
                Auth::login($user);
                $request->session()->regenerate();

                $userId = Auth::id(); // Fetch User ID after login

                // Check user type
                if($user->user_type === 'admin')
                {
                    Log::info('Admin login successful for email and ID:', [
                        'email'=>$credentials['email'],
                        'user_id'=>$userId,
                    ]);

                    // Redirect to admin dashboard
                    return redirect()->intended(route('admin.dashboard'));
                }
                elseif($user->user_type === 'staff')
                {
                    Log::info('Admin login successful for email and ID:', [
                        'email'=>$credentials['email'],
                        'user_id'=>$userId,
                    ]);

                    // Redirect to admin dashboard
                    return redirect()->intended(route('admin.dashboard'));
                }
                elseif($user->user_type === 'student')
                {
                    Log::info('Admin login successful for email and ID:', [
                        'email'=>$credentials['email'],
                        'user_id'=>$userId,
                    ]);

                    // Redirect to admin dashboard
                    return redirect()->intended(route('admin.dashboard'));
                }
                else
                {
                    Log::warning('Login failed due to invalid user type for email:', [
                        'email' => $credentials['email']
                    ]);
        
                    // Redirect back with an error for user type
                    return back()->withErrors([
                        'email' => 'Invalid user type.',
                    ])->onlyInput('email');
                }
            }
            else
            {
                Log::warning('Login failed due to incorrect password for email:', [
                    'email' => $credentials['email']
                ]);
        
                // Redirect back with an error for the password
                return back()->withErrors([
                    'password' => 'The provided password is incorrect.',
                ])->onlyInput('email');
            }
        }
        else
        {
            Log::warning('Login failed due to non-existent email:', [
                'email' => $credentials['email']
            ]);
        
            // Redirect back with an error for the email
            return back()->withErrors([
                'email' => 'No account found with this email address.',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(route('admin.login.loginpage'))->with('success', 'Successfully logged out');
    }

}
