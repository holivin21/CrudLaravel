@extends('master/Home')
@section('body')
<div class="container">
    <form action="tambah/menambah" method="POST">
        {{ csrf_field() }}
        <div>
            <span>Nama:</span>
            <input type="text" placeholder="Nama" name="nama">
        </div>
        <div>
            <span>Tanggal lahir:</span>
            <input type="date" placeholder="Tanggal lahir" name='dob'>
        </div>
        <div>
            <span>Umur</span>
            <input type="number" placeholder="Umur" name="umur">
        </div>
        <input type="submit" value="simpan">
    </form>
</div>
@endsection
