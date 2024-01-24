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

            @if (!empty($project))
                @foreach ($project as $item)
                    <div class="col-md-3">
                        <div class="card pt-" style="width: 18rem;">
                            <div class="row gutter d-flex justify-content-center">
                                <div class="col-9 d-flex p-2">
                                    <img src="https://picsum.photos/200" style="height:6rem;width:6rem;"
                                        class="rounded-circle card-img-top" alt="...">
                                    <p class="m-1 text-uppercase fw-semibold text-start"> {!! $item->p_name !!}
                                    </p>
                                </div>
                                <div class="col-2 d-flx p-2 text-center">
                                    <a href="#" aria-current="page" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false"aria-current="page" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical text-primary"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#create-project" data-id="{{$item->id}}">
                                                <i class="fa-solid fa-pen-nib"></i> Edit
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i>
                                                delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- discription --}}
                                <p class="card-text text-muted">
                                    {!! $item->description !!}
                                </p>
                                {{-- progress --}}
                                <div class="row ">
                                    <div class="col-4">
                                        <p>Progress</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="progress" role="progressbar" aria-label="Example with label"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
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
                                        @php
                                            $pStatus = '';
                                            if ($item->p_status == 1) {
                                                $pStatus = 'Pending';
                                            } elseif ($item->p_status == 2) {
                                                $pStatus = 'In-Progress';
                                            } else {
                                                $pStatus = 'Complete';
                                            }
                                        @endphp
                                        {{ $pStatus }}
                                    </div>
                                </div>
                                {{-- due date --}}
                                <div class="row ">
                                    <div class="col-4">
                                        <p>Due Date</p>
                                    </div>
                                    <div class="col-6 text-muted">
                                        {{ date('d-m-y', strtotime($item->end_date)) }}
                                    </div>
                                </div>
                                {{-- assigend user --}}
                                <div class="row ">
                                    <div class="col-4">
                                        <p>Team Members</p>
                                    </div>
                                    <div class="col-6 ">
                                        {{-- team members image --}}
                                        <img src="https://picsum.photos/200" style="height:25px;width:25px;"
                                            class="rounded-circle card-img-top" alt="..." title="mayank">
                                    </div>
                                </div>
                                <a href="{{ route('tasks') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-list-check"></i> View Task</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection

@section('js')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $('.edit-btn').click(function(e) {
            $.ajax({
                /* the route pointing to the post function */
                url: "{{ route('projectedit') }}",
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    _token: CSRF_TOKEN,
                    id: $(this).data("id")
                },
                dataType: 'JSON',
                success: function(data) {
                    // $('.modal-title').html('update user');
                    // $('input[name=name]').val(data.name);
                    // $('input[name=email]').val(data.email);
                    // $('input[name=id]').val(data.id);
                    // $('input[name=Password]').val(data.password);
                    // $('input[name=CPassword]').val(data.password);
                    // $('select[name=gender]').val(data.gender);
                    // $('select[name=user_type]').val(data.user_type);
                    // $('input[name=phone]').val(data.phone);
                    // $('input[name=profile_image]').val(data.profile_image);

                    // $('#createUser').attr('action', "{{ route('userupdate') }}");

                    console.log(data);
                }
            });
        });
    </script>
@endsection
