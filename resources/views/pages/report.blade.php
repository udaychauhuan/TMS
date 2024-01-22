@extends('layout.index')
@php
    $title = 'Report';
@endphp
@section('title', $title)
@section('containt')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary">{!! $title !!}</a>
        </div>
    </nav>

    <div class="container p-3">
        <div class="col-lg-12">
            <div class="card card-outline card-success">
                <div class="card-body">
                    <table class="table tabe-hover table-condensed" id="list">
                        <colgroup>
                            <col width="5%">
                            <col width="15%">
                            <col width="20%">
                            <col width="15%">
                            <col width="15%">
                            <col width="10%">
                            <col width="10%">
                            <col width="10%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Project</th>
                                <th>Task</th>
                                <th>Project Started</th>
                                <th>Project Due Date</th>
                                <th>Project Status</th>
                                <th>Task Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>
                                    <p>
                                        <img src="https://picsum.photos/200" style="height:35px;width:35px;"
                                        class="rounded-circle card-img-top" alt="..." title="mayank">
                                        <b>callyzer inquiry managemnet</b>
                                    </p>
                                </td>
                                <td>
                                    <p><b>task 1</b></p>
                                    <p class="truncate">its just for thr demo</p>
                                </td>
                                <td> task 1</td>
                                <td><b>01-01-2023</b></td>
                                <td><b>01-06-2023</b></td>
                                <td class="text-center">
                                    <span class='badge bg-primary '>in-progress</span>
                                </td>
                                <td class="text-center">
                                    <span class='badge bg-secondary '>Pending</span>
                                </td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="true">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item new_productivity" data-pid = '1' data-tid = '1'
                                            data-task = '1' href="javascript:void(0)">Add Productivity</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
