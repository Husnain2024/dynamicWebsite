@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Create New Homebanner</h2>
                <form action="{{ route('homebanner.store') }}" method="POST">
                    @csrf
                    <input type="text" name="type" class="form-control" hidden value="home-banner">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="first_btn_url">First Button URL:</label>
                        <input type="text" name="first_btn_url" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="second_btn_url">Second Button URL:</label>
                        <input type="text" name="second_btn_url" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
