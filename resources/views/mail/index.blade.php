@extends('todo.layout.master')
@section('content')
    <div class="card" style="width: 800px; margin: auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Send Email</h5>
            <a href="{{ route('todo.index') }}" class="btn btn-dark">home</a>
        </div>
        <div class="card-body">
            <form action="{{ route('email.send') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="category">The text</label>
                    <input name="text" type="text" class="form-control" id="text"
                           placeholder="The text you enter here will send to hp.armin@yahoo.com">
                    <div class="form-text text-danger">@error('text') {{ $message }} @enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">Send</button>
            </form>
        </div>
    </div>
@endsection
