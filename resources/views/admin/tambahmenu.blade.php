@extends('admin.app')
@section('content')
    <form action="{{ route('admin.submit')}}" method="POST">
        @csrf
        <label>Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control mb-2">
        <label>Harga</label>
        <input type="number"name="harga" class="form-control mb-2">
        <button class="btn btn-success">save</button>
    </form>
@endsection