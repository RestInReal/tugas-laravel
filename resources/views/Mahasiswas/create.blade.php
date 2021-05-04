public function store(Request $request)
{
//
$request->validate([
'nama' => 'required',
‘nim' => 'required',
‘email' => 'required',
]);
Mahasiswa::create($request->all());
return redirect()->route(mahasiswas.index')
->with('success’,’mahasiswa berhasil ditambahkan.');
}
