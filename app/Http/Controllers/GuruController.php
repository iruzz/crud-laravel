<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
   public function index()
   {
    $gurus  = Guru::latest()->paginate(10);
    return view('guru.index', compact('gurus'));
   }

   public function create()
   {
       return view('guru.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'nama' => 'required',
           'umur' => 'required|integer',
           'email' => 'required|email',
       ]);

       Guru::create($request->all());

       return redirect()->route('guru.index')->with('success', 'Guru created successfully.');
   }
}
