@extends('layouts.app')

@section('container')
    <h1>{{ $pagetitle }}</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}">
            @if ($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Synopsis</label>
            <input type="text" name="synopsis" class="form-control" value="{{ $book->synopsis }}">
            @if ($errors->has('synopsis'))
                <p class="text-danger">{{ $errors->first('synopsis') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover Photo</label>
            <br>
            <img src="{{ asset('storage/' . $book->coverphoto) }}" alt="" class="w-50 h-50">
            <input type="file" name="coverphoto" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Writer Name</label>
            <input type="text" name="writer_name" class="form-control" value="{{ $book->writer->name }}" readonly>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-outline-success mx-auto">Submit</button>
        </div>
    </form>
@endsection
