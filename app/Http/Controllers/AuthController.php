<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function authAdmin(Request $request)
    {
        $isAuthenticated = Auth::guard('admin')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if (! $isAuthenticated)
        {
            return view('admin.admin_login', ['login_message' => 'Invalid Credentials']);
        }

        return redirect(route('admin.my_profile'));
    }

    public function authTeacher(Request $request)
    {
        $isAuthenticated = Auth::guard('teacher')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if (! $isAuthenticated)
        {
            return view('teacher.teacher_login', ['login_message' => 'Invalid Credentials']);
        }

        return redirect(route('teacher.my_profile'));
    }

    public function authStudent(Request $request)
    {
        $isAuthenticated = Auth::guard('student')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if (! $isAuthenticated)
        {
            return view('student.student_login', ['login_message' => 'Invalid Credentials']);
        }

        return redirect(route('student.my_profile'));
    }
}
