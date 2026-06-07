@extends('todo.layout.master')
@section('content')
    <div class="card" style="width: 800px; margin: auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Edit category {{ $category->id }} </h5>
            <a href="{{ route('category.index') }}" class="btn btn-dark">back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update' , ['category' => $category->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="category">Title</label>
                    <input name="title" type="text" class="form-control" id="category"
                          value="{{ $category->title }}"  placeholder="Category">
                    <div class="form-text text-danger">@error('title') {{ $message }} @enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
