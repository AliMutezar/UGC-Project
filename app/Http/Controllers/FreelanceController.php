<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'tlpn' => 'required',
            'email' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Freelance::create($validateData);
        return redirect('/contact')->with('success', "Thank's, your data has been saved");
    }

    public function show() 
    {
        return view('pages.admin.freelances.index', [
            'freelances' => Freelance::get()
        ]);
    }
}
