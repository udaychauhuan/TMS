@extends('layout.index')
@php
    $title = 'User';
@endphp
@section('title', $title)
@section('containt')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary">{!! $title !!}</a>
            <div class="d-flex " role="search">
                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle" title="create User"
                    data-bs-toggle="modal" data-bs-target="#create-user">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="col-lg-12 p-3">
        <div class="card card-outline card-success">
            <div class="card-body">
                <table class="table tabe-hover table-bordered" id="list">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <td>
                                <img src="https://picsum.photos/200" style="height:35px;width:35px;"
                                    class="rounded-circle card-img-top" alt="..." title="mayank">
                                <b> uday pratap</b>
                            </td>
                            <td><b>pratap.uday.chauhan@gmail.com</b></td>
                            <td><b>Admin</b></td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="true">
                                    Action
                                </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item view_user" href="javascript:void(0)" data-id="">View</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="./index.php?page=edit_user&id=1">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item delete_user" href="javascript:void(0)" data-id="">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection
