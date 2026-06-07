@extends('todo.layout.master')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="">ToDos</h5>
                    <a href="{{ route('todo.create') }}" class="btn btn-dark">creat</a>
                </div>
                <table class="castom-table table text-white mb-0">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($todos as $todo)
                        <tr class="fw-normal">
                            <th>
                                <img class="rounded"
                                    src=" {{ asset('images/'. $todo->image) }}"
                                    alt="avatar 1" style="width: 125px; height: auto;">
                            </th>
                            <td class="align-middle">
                                <span>{{ $todo->title }}</span>
                            </td>
                            <td class="align-middle">
                                <h6 class="mb-0"><span class="badge bg-warning">High priority</span></h6>
                            </td>
                            <td class="align-middle">
                                <a href="#" type="button" class="btn btn-outline-danger">Completed</a>
                                <a href="#" type="button" class="btn btn-secondary">Show</a>
                                <form style="display: inline" action="{{ route('todo.destroy',['todo' => $todo->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-dark" type="submit">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
