@extends('layouts.app');


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Homebanners</h2>
                <a href="{{ route('homebanner.create') }}" class="btn btn-primary mb-3">Create New Homebanner</a>
                @if ($homebanners->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homebanners as $homebanner)
                                <tr>
                                    <td>{{ $homebanner->id }}</td>
                                    <td>{{ $homebanner->type }}</td>
                                    <td>{{ $homebanner->title }}</td>
                                    <td>
                                        <a href="{{ route('homebanner.show', $homebanner->id) }}"
                                            class="btn btn-info">View</a>
                                        <a href="{{ route('homebanner.edit', $homebanner->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('homebanner.destroy', $homebanner->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this homebanner?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No homebanners found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
