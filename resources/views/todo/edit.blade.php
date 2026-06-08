@extends('todo.layout.master')
@section('content')
    <div class="card" style="width: 900px; margin: auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Todo</h5>
            <a href="{{ route('todo.index') }}" class="btn btn-dark">Back</a>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <img width="230" class="rounded" src="{{ asset('images/'.$todo->image) }}" alt="the image">
            </div>
            <form action="{{ route('todo.update' , ['todo'=> $todo->id]) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12 col-md-4 col-mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="{{ $todo->title }}" class="form-control">
                    </div>
                    <div class="col-12 col-md-4 col-mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option @if($todo->category_id == $category->id)
                                            {{ 'selected' }}
                                        @endif value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option @if($todo->status)
                                        {{ 'selected' }}
                                    @endif value="1">done
                            </option>
                            <option @if(!$todo->status)
                                        {{ 'selected' }}
                                    @endif value="0">doing...
                            </option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        <div class="form-text text-danger">@error('image') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
@endsection
