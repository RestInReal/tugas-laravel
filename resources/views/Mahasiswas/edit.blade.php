public function edit(Karyawan $karyawan)
{
//
return view('karyawans.edit',compact('karyawan'));
}

public function destroy(Karyawan $karyawan)
{
//
$karyawan->delete();
return redirect()->route('karyawans.index')
->with('success','Karyawan berhasil dihapus');
}
