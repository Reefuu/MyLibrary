@extends('layouts.app')

@section('container')
    <h1>{{ $maintitle }}</h1>
    <form action="/" method="GET" class="form-inline w-25 d-flex gap-2">
        <input type="search" name="search" placeholder="Search" class="form-control">
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>
    <table class="table table-striped mt-3">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Country</td>
            <td>Description</td>
            <td>Contact</td>
            <td>Photo</td>
        </tr>

        @foreach ($writers as $writer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="index/{{ $writer['id'] }}">{{ $writer['name'] }}</a></td>
                <td>{{ $writer['country'] }}</td>
                <td>
                    @if ($loop->first)
                        Urutan Teratas
                    @elseif ($loop->last)
                        Urutan Terbawah
                    @elseif($loop->odd)
                        Urutan Ganjil
                    @elseif($loop->even)
                        Urutan Genap
                    @endif
                </td>
                <td>
                    {{ $writer['contact'] }}
                </td>
                <td>
                    <img src="pictures/{{ $writer['photo'] }}" style="width: 100px; height: 100px">
                </td>
            </tr>
        @endforeach
    </table>

    {{ $writers->links() }}

    <h1>Books</h1>

    @if (Auth::check() && Auth::user()->status == 'admin')
        <a href="{{ route('books.create') }}" class="btn btn-outline-primary">Create Book</a>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Synopsis</th>
                <th>Writer Name</th>
                <th>Cover Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['synopsis'] }}</td>
                    <td>{{ $book->writer->name }}</td>
                    <td>
                        <img src="pictures/{{ $book['coverphoto'] }}" style="width: 100px; height: 100px">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
