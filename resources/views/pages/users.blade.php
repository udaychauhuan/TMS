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
                        @if (!empty($user))
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($user as $item)
                                <tr>
                                    <th class="text-center">{{ $i++ }}</th>
                                    <td>
                                        <img src="{{ $item->profile_image ?? '\assets\male-plac-img.png' }}"
                                            style="height:35px;width:35px;" class="rounded-circle card-img-top"
                                            alt="..." title="{{$item->name}}">
                                        <b>{{ $item->name }}</b>
                                    </td>
                                    <td><b>{{ $item->email }}</b></td>
                                    <td><b>
                                            @if ($item->user_type == 1)
                                                {{ 'Admin' }}
                                            @elseif($item->user_type == 2)
                                                {{ 'Project manager' }}
                                            @else
                                                {{ 'Employee' }}
                                            @endif
                                        </b>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item view-user" href="#"  data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#view-user">view</a></li>
                                                <li><a class="dropdown-item edit-btn" href=""
                                                        data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#create-user">edit</a></li>
                                                <li><a class="dropdown-item" onclick="if (confirm('Are you sure , to delete this user')) return true; else return false;" href="{{route('userdelete', ['id' => $item->id])}}">delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $('.edit-btn').click(function(e) {
            $.ajax({
                /* the route pointing to the post function */
                url: "{{ route('useredit') }}",
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    _token: CSRF_TOKEN,
                    id: $(this).data("id")
                },
                dataType: 'JSON',
                success: function(data) {
                    $('.modal-title').html('update user');
                    $('input[name=name]').val(data.name);
                    $('input[name=email]').val(data.email);
                    $('input[name=id]').val(data.id);
                    $('input[name=Password]').val(data.password);
                    $('input[name=CPassword]').val(data.password);
                    $('select[name=gender]').val(data.gender);
                    $('select[name=user_type]').val(data.user_type);
                    $('input[name=phone]').val(data.phone);
                    $('input[name=profile_image]').val(data.profile_image);

                    $('#createUser').attr('action', "{{route('userupdate')}}");
                }
            });
        });

        $('.view-user').click(function(e) {
            $.ajax({
                /* the route pointing to the post function */
                url: "{{ route('useredit') }}",
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    _token: CSRF_TOKEN,
                    id: $(this).data("id")
                },
                dataType: 'JSON',
                success: function(data) {
                    $('#user-name').html(data.name);
                    $('#user-gmail').html(data.email);
                    console.log(data);
                }
            });
        });


    </script>
@endsection
