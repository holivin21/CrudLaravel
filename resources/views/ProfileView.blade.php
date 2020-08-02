@extends('master/Home')
@section('body')
    <div class="container">
        <a href="/tambah">+Tambah baru </a>
        <table border="1px">
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>DOB</th>
              <th>AGE</th>
              <th>ACTION</th>
            </tr>
            @foreach ($profile as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->NAME}}</td>
                    <td>{{$a->DOB}}</td>
                    <td>{{$a->AGE}}</td>
                    <td>
                        <a href="edit/{{$a->id }}">Edit</a>
                        <a href="delete/{{$a->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
