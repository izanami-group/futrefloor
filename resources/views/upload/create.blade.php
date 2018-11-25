@extends('layouts.app')

@section('title', 'Image Upload')

@section('styles')
    <style type="text/css">
        .images {
            display: grid;
            grid-template-columns: repeat(5, minmax(110px, 1fr));
            grid-gap: 5px;
        }

        .img img {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="form">
        <form action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="file" name="image" />
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="images">
        @foreach($images as $image)
            <div class="img">
                <img src="{{ asset('storage/' . $image->src) }}" alt="{{ $image->id }}">
            </div>
        @endforeach
    </div>
@endsection
