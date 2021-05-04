@extends('Mahasiswas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
        <a class="btn btn-success" href="{{route('mahasiswa.create')}}"> Tambah Mahasiswa</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <form action="{{url()->current()}}">
        <div class="pull-right">
            <h6>Nama &nbsp;</h6>
            <input class="typehead form-control" type="text" name="nama">
            <button type="submit" class="btn btn-primary">
            cari
            </button>
            <a class="btn btn-primary" href="{{route('mahasiswa.index')}}">reset</a>
        </div>
        </form>
    </div>
</div>

@if ($massage = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$massage}}</p>
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>alamat</th>
        <th>semester</th>
        <th>ipk</th>
        <th>khs</th>
        <th width="280px">Action</th>
    </tr>
    </thead>
    @foreach ($Mahasiswas as mahasiswa)
    <tr>
        <th>{{$mahasiswa->id}}</th>
        <th>{{$mahasiswa-nama}}</th>
        <th>{{$mahasiswa->alamat}}</th>
        <th>{{$mahasiswa->smt}}</th>
        <th>{{$mahasiswa->}}</th>
        <th>{{$mahasiswa->khs}}</th>
    <td>
        <form action="{{ route('mahasiswa.destroy,$Mahasiswas->id')}}" method="POST">
        <a class="btn btn-primary" href="{{route('mahasiswas.edit',$Mahasiswas['id'])}}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-primary"> </button>
        </form>
    </td>
</tr>
    @endforeach
</table>
{!!$Mahasiswas->links() !!}
@endsection