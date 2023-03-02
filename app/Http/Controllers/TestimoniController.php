<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        return view('testimoni.index', [
            'testimonis' => Testimoni::all(),
        ]);
    }
    
    public function store(Request $request){


        $validatedData = $request->validate([
            'email' => 'required|email|email:dns',
            'name' => 'required',
            'pesan' => 'required'
        ]);

        Testimoni::create($validatedData);

        return redirect('/testimoni')->with('success', 'New Blog Has Been Added Successful!');
    }
}