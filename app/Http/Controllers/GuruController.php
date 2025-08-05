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
}
