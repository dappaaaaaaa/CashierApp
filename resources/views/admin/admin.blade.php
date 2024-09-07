@extends('admin.app')
@section('content')
<a href="{{ route('admin.tambah')}}" class="btn btn-primary">Tambah</a>
<table class="table text-center" style="border: 1px">
    <tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    @foreach ($adm as $no=>$am)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$am->nama_menu}}</td>
        <td>{{$am->harga}}</td>
        <td>
            <a href="" class="btn btn-warning">Edit</a>
            <button class="btn btn-danger">Hapus</button>
        </td>
    </tr>    
    @endforeach
    
</table>
@endsection