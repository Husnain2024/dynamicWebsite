@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Edit Homebanner</h2>
                <form action="{{ route('homebanner.update', $homebanner->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input hidden type="text" name="type" class="form-control" value="{{ $homebanner->type }}">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $homebanner->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea name="content" class="form-control">{{ $homebanner->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="first_btn_url">First Button URL:</label>
                        <input type="text" name="first_btn_url" class="form-control"
                            value="{{ $homebanner->first_btn_url }}">
                    </div>
                    <div class="form-group">
                        <label for="second_btn_url">Second Button URL:</label>
                        <input type="text" name="second_btn_url" class="form-control"
                            value="{{ $homebanner->second_btn_url }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
