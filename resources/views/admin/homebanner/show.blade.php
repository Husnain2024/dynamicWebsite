@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Homebanner Details</h2>
                <div>
                    <strong>Type:</strong> {{ $homebanner->type }} <br>
                    <strong>Title:</strong> {{ $homebanner->title }} <br>
                    <strong>Content:</strong> {{ $homebanner->content }} <br>
                    <strong>First Button URL:</strong> {{ $homebanner->first_btn_url }} <br>
                    <strong>Second Button URL:</strong> {{ $homebanner->second_btn_url }} <br>
                    <strong>Image:</strong> {{ $homebanner->image }} <br>
                    <strong>Video:</strong> {{ $homebanner->video }} <br>
                </div>
                <a href="{{ route('homebanner.index') }}" class="btn btn-primary mt-3">Back</a>
            </div>
        </div>
    </div>
@endsection
