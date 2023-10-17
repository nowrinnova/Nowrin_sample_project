<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("upsate");
    }

    public  function ALU()
    {
        return view("ALU");
    }
    public function Login(Request $request)
    {
        // $validated =
        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'required',
        ]);
        return redirect("student_profile");


        // if ($validated) {
        //     return redirect("student_profile");
        // } else {
        //     return redirect("sir_apni_jor_kore_kaj_koracchen");
        // }
    }
}
