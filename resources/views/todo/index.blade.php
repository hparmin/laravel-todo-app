@extends('todo.layout.master')
@section('content')
    <div class="row d-flex justify-content-center align-items-center mb-5">
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
                                <h6 class="mb-0"><span class="text-bg-info">{{ $todo->category->title }}</span></h6>
                            </td>
                            <td class="align-middle">
                                    <?php
                                    if (isset($_GET['page'])) {
                                        $page = $_GET['page'];
                                    } else {
                                        $page = 1;
                                    }
                                    ?>
                                @if($todo->status)
                                    <a href="{{ route('todo.doing' , ['todo' => $todo->id])}}?page={{ $page }}"
                                       type="button"
                                       class="btn btn-outline-danger">Completed</a>
                                @else
                                    <a href="{{ route('todo.complete' , ['todo' => $todo->id]) }}?page={{ $page }}"
                                       type="button"
                                       class="btn btn-outline-info">Done?</a>
                                @endif
                                <a href="{{ route('todo.show' , ['todo' => $todo->id]) }}" type="button"
                                   class="btn btn-secondary">Show</a>
                                <form style="display: inline" action="{{ route('todo.destroy',['todo' => $todo->id]) }}"
                                      method="post">
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
            <div class="mt-3 d-flex justify-content-center">
                {{ $todos->links() }}
            </div>
        </div>
    </div>
@endsection
