@extends('layouts.app')

@section('container')
    <h1>{{ $pagetitle }}</h1>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
            @if ($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Synopsis</label>
            <input type="text" name="synopsis" class="form-control">
            @if ($errors->has('synopsis'))
                <p class="text-danger">{{ $errors->first('synopsis') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover Photo</label>
            <input type="file" name="coverphoto" class="form-control">
            @if ($errors->has('coverphoto'))
                <p class="text-danger">{{ $errors->first('coverphoto') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Writer Name</label>
            <select name="writer_id" class="form-select">
                @foreach ($writers as $writer)
                    <option value="{{ $writer['id'] }}">{{ $writer['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-outline-success mx-auto">Submit</button>
        </div>
    </form>
@endsection
