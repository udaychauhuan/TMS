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
    <div class="col-md-12 p-2">
        <div class="card card-outline card-success">
            <div class="card-body p-0">
                <div class="table-responsive" id="printable">
                    <table class="table m-0 table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Project</th>
                            <th>Task</th>
                            <th>Team member</th>
                            <th>Work Duration</th>
                            <th>Progress</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a>
                                        Callyzer inquiry managent
                                    </a>
                                    <br>
                                    <small>
                                        Due: 01-06-2022
                                    </small>
                                </td>
                                <td class="text-center">
                                    task 1
                                </td>
                                <td class="text-center">
                                    <img src="https://picsum.photos/200" style="height:35px;width:35px;"
                                    class="rounded-circle card-img-top" alt="..." title="mayank">
                                    Uday pratap singh
                                </td>
                                <td class="text-center">
                                    06 Hr/s
                                </td>
                                <td class="project_progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                        </div>
                                    </div>
                                </td>
                                <td class="project-state">
                                    <span class='badge bg-secondary'>Pending</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
