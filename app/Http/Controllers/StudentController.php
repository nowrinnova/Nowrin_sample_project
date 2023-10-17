<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view("student");
    }
    public function correct(Request $request)
    {
        // $validated =
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required |confirmed',
        ]);
        return redirect("showcourse");
    }
}
