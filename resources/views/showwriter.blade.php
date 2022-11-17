@extends('layouts.app')

@section('container')
    <h1>{{ $maintitle }}</h1>
    <div class="mt-4 p-5 rounded">
        <h1>{{ $writers['name'] }}</h1>
        <p>Country : {{ $writers['country'] }}</p>
        <p>Contact : {{ $writers['contact'] }}</p>
        <p>Photo :  <img src={{ asset("pictures/{$writers['photo']}") }} style="width: 100px; height: 100px"></p>

        <h1>Books</h1>
        <table class="table table-striped">
            <tr>
                <td>No</td>
                <td>Title</td>
                <td>Synopsis</td>
                <td>Cover Photo</td>
            </tr>
    
            @foreach ($writers->books as $book)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->synopsis }}</td>
                    <td>
                        <img src={{ asset("pictures/{$book['coverphoto']}") }} style="width: 100px; height: 100px">
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection