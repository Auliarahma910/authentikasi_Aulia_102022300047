<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->get();
        return view('buku.index', ['buku' => $buku]);
    }
}
