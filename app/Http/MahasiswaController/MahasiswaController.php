<?php

namespace Mahasiswa\Http\Controllers;

use Mahasiswa\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
public function index(request $request)
{
	$mahasiswa = Mahasiswa::latest()->paginate(10);
	return view('Mahasiswas.index',compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
}
}
