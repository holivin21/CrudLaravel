@extends('master/Home');
@section('body')
    <div class='container'>
        <form action="update/{{$profile->id}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <span>Name:</span><input type="text" name="name" value="{{$profile->NAME}}"><br>
            <span>Tanggal Lahir:</span><input type="date" name="dob" value="{{$profile->DOB}}"><br>
            <span>Umur:</span><input type="number" name='umur' value="{{$profile->AGE}}"><br>
            <input type="submit" value="edit">
        </form>
    </div>
@endsection
