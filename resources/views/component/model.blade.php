<!-- create project module -->
<div class="modal fade" id="create-project" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-lg-12">
                <div class="card card-outline card-primary">
                    <div class="card-body">
                        <form action="" id="manage-project">

                            <input type="hidden" name="id" value="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Name</label>
                                        <input type="text" class="form-control form-control-sm" name="name"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="status" class="custom-select custom-select-sm">
                                            <option value="0">Pending</option>
                                            <option value="3">On-Hold</option>
                                            <option value="5">Done</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Start Date</label>
                                        <input type="date" class="form-control form-control-sm" autocomplete="off"
                                            name="start_date" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">End Date</label>
                                        <input type="date" class="form-control form-control-sm" autocomplete="off"
                                            name="end_date" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Project Manager</label>
                                        <select class="form-control form-control-sm select2" name="manager_id">
                                            <option>uday pratap</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="manager_id" value="">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Project Team Members</label>
                                        <select class="form-control form-control-sm select2" multiple="multiple"
                                            name="user_ids[]">
                                            <option> anshul</option>
                                            <option value="">mayank</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="" class="control-label">Description</label>
                                        <textarea name="description" id="" cols="30" rows="10" class="summernote form-control">
					                    </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-top border-info">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <button class="btn btn-primary mx-2" form="manage-project">Save</button>
                            <button class="btn btn-dark mx-2" data-bs-dismiss="modal" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
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
                        <button type="button" class="btn-close"  onclick="this.form.reset();" data-bs-dismiss="modal" aria-label="Close"></button>
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

@section('js')

@endsection
