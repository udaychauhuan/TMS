@extends('layout.index')
@php
    $title = 'Task';
@endphp
@section('title', $title)
@section('containt')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary">{!! $title !!}</a>
            <form class="d-flex " role="search">
                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle" title="create project"
                    data-bs-toggle="modal" data-bs-target="#create-project">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container m-4 ">
        <div class="row p-2">
            <div class="col-md-4 text-center">
                <div class="card card-header">
                    Todo
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card card-header">
                    In-Progress
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card card-header">
                    Completed
                </div>
            </div>
        </div>
        {{-- display the task list --}}
        <div class="row">
            {{-- list for todo --}}
            <div class="col-md-4 bg">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">#Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        {{-- status --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Status</p>
                            </div>
                            <div class="col-6 text-muted">
                                in-progress
                            </div>
                        </div>
                        {{-- due date --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Due Date</p>
                            </div>
                            <div class="col-6 text-muted">
                                01-06-2025
                            </div>
                        </div>
                        {{-- assigend user --}}
                        <div class="row">
                            <div class="col-4">
                                <p>Team Members</p>
                            </div>
                            <div class="col-6 ">
                                {{-- team members image --}}
                                <img src="https://picsum.photos/200" style="height:35px;width:35px;"
                                    class="rounded-circle card-img-top" alt="..." title="mayank">
                                {{-- user Name --}}
                                <span class="text-muted"> uday pratap</span>
                            </div>
                        </div>
                        <div class="row fs-3">
                            <div class="col-10">
                                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle"
                                    title="Edit Task" data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle"
                                    title="Start Task" data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-primary me-2 border-primary rounded-circle" title="Start Task"
                                data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-pause"></i>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- list for in-progress --}}
            <div class="col-md-4 bg">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">#Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        {{-- status --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Status</p>
                            </div>
                            <div class="col-6 text-muted">
                                in-progress
                            </div>
                        </div>
                        {{-- due date --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Due Date</p>
                            </div>
                            <div class="col-6 text-muted">
                                01-06-2025
                            </div>
                        </div>
                        {{-- assigend user --}}
                        <div class="row">
                            <div class="col-4">
                                <p>Team Members</p>
                            </div>
                            <div class="col-6 ">
                                {{-- team members image --}}
                                <img src="https://picsum.photos/200" style="height:35px;width:35px;"
                                    class="rounded-circle card-img-top" alt="..." title="mayank">
                                {{-- user Name --}}
                                <span class="text-muted"> uday pratap</span>
                            </div>
                        </div>
                        <div class="row fs-3">
                            <div class="col-10">
                                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle"
                                    title="Edit Task" data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle"
                                    title="Start Task" data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-primary me-2 border-primary rounded-circle" title="Start Task"
                                data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-pause"></i>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- list for complte --}}
            <div class="col-md-4 bg">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">#Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        {{-- status --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Status</p>
                            </div>
                            <div class="col-6 text-muted">
                                in-progress
                            </div>
                        </div>
                        {{-- due date --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Due Date</p>
                            </div>
                            <div class="col-6 text-muted">
                                01-06-2025
                            </div>
                        </div>
                        {{-- assigend user --}}
                        <div class="row">
                            <div class="col-4">
                                <p>Team Members</p>
                            </div>
                            <div class="col-6 ">
                                {{-- team members image --}}
                                <img src="https://picsum.photos/200" style="height:35px;width:35px;"
                                    class="rounded-circle card-img-top" alt="..." title="mayank">
                                {{-- user Name --}}
                                <span class="text-muted"> uday pratap</span>
                            </div>
                        </div>
                        <div class="row fs-3">
                            <div class="col-10">
                                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle"
                                    title="Edit Task" data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle"
                                    title="Start Task" data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-primary me-2 border-primary rounded-circle" title="Start Task"
                                data-bs-toggle="modal" data-bs-target="#create-project">
                                    <i class="fa-solid fa-pause"></i>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
