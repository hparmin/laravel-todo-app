@extends('todo.layout.master')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-12 col-xl-10">
        <div class="card mask-custom">
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
                <tr class="fw-normal">
                    <th>
                        <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="avatar 1" style="width: 45px; height: auto;">
                    </th>
                    <td class="align-middle">
                        <span>Call Sam For payments</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                    </td>
                    <td class="align-middle">
                        <a href="#" type="button" class="btn btn-outline-danger">Completed</a>
                        <a href="#" type="button" class="btn btn-secondary">Show</a>
                    </td>
                </tr>
                <tr class="fw-normal">
                    <th>
                        <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                            alt="avatar 1" style="width: 45px; height: auto;">
                    </th>
                    <td class="align-middle">Office rent</td>
                    <td class="align-middle">
                        <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                    </td>
                    <td class="align-middle">
                        <a href="#" type="button" class="btn btn-outline-danger">Completed</a>
                        <a href="#" type="button" class="btn btn-secondary">Show</a>
                    </td>
                </tr>
                <tr class="fw-normal">
                    <th class="border-0">
                        <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                            alt="avatar 1" style="width: 45px; height: auto;">
                    </th>
                    <td class="border-0 align-middle">Ask for Lunch to Clients</td>
                    <td class="border-0 align-middle">
                        <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                    </td>
                    <td class="border-0 align-middle">
                        <a href="#" type="button" class="btn btn-outline-danger">Completed</a>
                        <a href="#" type="button" class="btn btn-secondary">Show</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
