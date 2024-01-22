@extends('layout.index')
@php
    $title = 'Project';
@endphp
@section('title', $title)
@section('containt')

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary">{!! $title !!}</a>
            <div class="d-flex " role="search">
                <button type="button" class="btn btn-primary me-2 border-primary rounded-circle" title="create project"
                    data-bs-toggle="modal" data-bs-target="#create-project">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="container m-4">
        <div class="row d-flex justify-content-center">
            {{-- first card --}}
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="row gutter d-flex justify-content-center">
                        <div class="col-9 d-flex p-2">
                            <img src="https://picsum.photos/200" style="height:6rem;width:6rem;" class="rounded-circle card-img-top" alt="...">
                            <p class="m-1 text-uppercase fw-semibold text-start"> Callyzer inquiry management system</p>
                        </div>
                        <div class="col-2 d-flx p-2 text-center">
                            <a href="#" aria-current="page" href="#" data-bs-toggle="dropdown" aria-expanded="false"aria-current="page" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical text-primary"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#create-project">
                                        <i class="fa-solid fa-pen-nib"></i> Edit
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- discription --}}
                        <p class="card-text text-muted">
                            Some quick example text to build on the card
                        </p>
                        {{-- progress --}}
                        <div class="row ">
                            <div class="col-4">
                                <p>Progress</p>
                            </div>
                            <div class="col-6">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%">25%</div>
                                </div>
                            </div>
                        </div>
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
                        <div class="row ">
                            <div class="col-4">
                                <p>Team Members</p>
                            </div>
                            <div class="col-6 ">
                                {{-- team members image --}}
                                <img src="https://picsum.photos/200" style="height:25px;width:25px;" class="rounded-circle card-img-top" alt="..." title="mayank">
                                <img src="https://picsum.photos/200" style="height:25px;width:25px;" class="rounded-circle card-img-top" alt="..." title="yash">
                                <img src="https://picsum.photos/200" style="height:25px;width:25px;" class="rounded-circle card-img-top" alt="..." title="anshul">
                                <img src="https://picsum.photos/200" style="height:25px;width:25px;" class="rounded-circle card-img-top" alt="..." title="uday">
                            </div>
                        </div>
                        <a href="{{route('tasks')}}" class="btn btn-primary"><i class="fa-solid fa-list-check"></i> View Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
