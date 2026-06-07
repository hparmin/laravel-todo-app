@extends('todo.layout.master')
@section('content')
    <div class="card" style="width: 800px; margin: auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Create category</h5>
            <a href="{{ route('category.index') }}" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="category">Title</label>
                    <input name="title" type="text" class="form-control" id="category"
                           placeholder="Category">
                    <div class="form-text text-danger">@error('title') {{ $message }} @enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
