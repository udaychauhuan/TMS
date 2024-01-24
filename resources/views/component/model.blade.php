<!-- create project module -->
<!-- Modal -->
<div class="modal fade" id="create-project" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="createproject" class="row g-3" action="{{ route('projectcreate') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">create Project</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="this.form.reset();"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="projectname" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="p_name" name="p_name">
                        </div>
                        <div class="col-md-6">
                            <label for="projectstatus" class="form-label">Project Status</label>
                            <select id="p_status" name="p_status" class="form-select">
                                <option value="1">Pendig</option>
                                <option value="2">In-progress</option>
                                <option value="3">Complete</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="projectname" class="form-label">Start date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="col-md-6">
                            <label for="projectstatus" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="projectname" class="form-label">Project Manager</label>
                            <select id="manager_id" name="manager_id" class="form-select">
                                <option value="1">Anjali</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="projectstatus" class="form-label">Employee</label>
                            <select class="form-control form-control-sm select2" id="assigned_users"
                                name="assigned_users" multiple="multiple">
                                <option value="1">uday</option>
                                <option value="2">Anshul</option>
                                <option value="3">Yash</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Project Icon</label>
                            <input type="file" name="p_image" id="p_image" class="course form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="" class="control-label">Description</label>
                                <textarea name="description" id="" cols="10" rows="5" class="summernote form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- create user model --}}
<div class="modal fade" id="create-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="createUser" class="row g-3" action="{{ route('usercreate') }}" method="post">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">create user</h5>
                        <button type="button" class="btn-close" onclick="this.form.reset();"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <input type="hidden" id="id" name="id" value="">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="Password" class="form-control" id="Password" name="Password">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Confirm Password</label>
                        <input type="Password" class="form-control" id="CPassword" name="CPassword">
                    </div>
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">gender</label>
                        <select id="gender" name="gender" class="form-select">
                            <option value="1">male</option>
                            <option value="2">female</option>
                            <option value="3">other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">User Type</label>
                        <select id="inputState" name="user_type" class="form-select">
                            <option value="1">Admin</option>
                            <option value="2">Project Manager</option>
                            <option value="3">Employee</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="formFile" class="form-label">User Image</label>
                        <input type="file" name="profile_image" id="profile_image" class="course form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- view user model --}}
<div class="modal fade" id="view-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">View user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="this.form.reset();"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title" id="user-name"></h5>
                        <p class="card-text" id="user-gmail"></p>
                        <a href="#" class="profile-image">
                            <img src="\assets\male-plac-img.png" style="height:6rem;width:6rem;"
                                class="rounded-circle card-img-top" alt="..." title="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
@endsection
