@extends('layouts.app_dashboard')

@section('link')
    <link href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Datatable</h4>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i class="fa-solid fa-user-plus"></i> Add User</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Role</th>
                                            <th>Name</th>
                                            <th>ID Number</th>
                                            <th>E-mail</th>
                                            <th>Created_at</th>
                                            <th>Update_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datatable">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bootstrap-modal">
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">User Information</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form class="form-valide-with-icon needs-validation" novalidate>
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="dz-password">User Type</label>
                                                        <div class="input-group transparent-append">
                                                        <input type="hidden" id="user_id">
                                                            <select class="form-control" id="role" placeholder="Choose a safe one.." required>
                                                                <option selected disabled>(Type of User)</option>
                                                                <option>Administrator</option>
                                                                <option>Instructor</option>
                                                                <option>Student</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose User type.
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_role"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="name" placeholder="Name" required>
                                                            <div class="invalid-feedback">
                                                                Name
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_fname"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">E-mail</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="email" placeholder="E-mail" required>
                                                            <div class="invalid-feedback">
                                                                E-mail
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_lname"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">ID number</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control id_number" id="id_number" placeholder="Enter an ID number.." required>
                                                            <div class="invalid-feedback">
                                                                Please Enter an ID number.
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_idnumber"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="dz-password">Password *</label>
                                                        <div class="input-group transparent-append">
                                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                            <input type="password" class="form-control" id="password" placeholder="Choose a safe one.." required>
                                                            <span class="input-group-text show-pass">
                                                                <i class="fa fa-eye-slash"></i>
                                                                <i class="fa fa-eye"></i>
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                Please Enter a password.
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_pword"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="save_user">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- update -->
                <div class="modal fade bd-update-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Update User</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form class="form-valide-with-icon needs-validation" novalidate>
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="dz-password">User Type</label>
                                                        <div class="input-group transparent-append">
                                                        <input type="hidden" id="user_id">
                                                            <select class="form-control" id="edit_role" placeholder="Choose a safe one.." required>
                                                                <option selected disabled>(Type of User)</option>
                                                                <option>Administrator</option>
                                                                <option>Instructor</option>
                                                                <option>Student</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose User type.
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_role"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="edit_name" placeholder="Name" required>
                                                            <div class="invalid-feedback">
                                                                Name
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_fname"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">E-mail</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="edit_email" placeholder="E-mail" required>
                                                            <div class="invalid-feedback">
                                                                E-mail
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_lname"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">ID number</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control id_number" id="edit_id_number" placeholder="Enter an ID number.." required>
                                                            <div class="invalid-feedback">
                                                                Please Enter an ID number.
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_idnumber"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="dz-password">Password *</label>
                                                        <div class="input-group transparent-append">
                                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                            <input type="password" class="form-control" id="password" placeholder="Choose a safe one.." required>
                                                            <span class="input-group-text show-pass">
                                                                <i class="fa fa-eye-slash"></i>
                                                                <i class="fa fa-eye"></i>
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                Please Enter a password.
                                                            </div>
                                                        </div>
                                                        <span style="color: red" id="error_pword"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="update_user">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
    
@section('script')
    <script>
        
        // added an input mask
        // document.addEventListener("DOMContentLoaded", function() {
        //     Inputmask("99-AA-9999").mask(".id_number");
        // });

        // for clearing error messages
        const clearErrorMessages = () => {
            $('#error_role').html('')
            $('#error_fname').html('')
            $('#error_lname').html('')
            $('#error_idnumber').html('')
            $('#error_pword').html('')
        }

        // for clearing inputs
        const clearInput = () => {
            $('#name').val(''),
            $('#email').val(''),
            $('#id_number').val(''),
            $('#password').val(''),
            $('#role').val('(Please select a role)')

            $('#edit_fname').val(''),
            $('#edit_id_number').val(''),
            $('#edit_role').val('(Please select a role)')
        }

        // saving user
        $('#save_user').click(function() {
            clearErrorMessages()
            var postData = {
                name: $('#name').val(),
                email: $('#email').val(),
                id_number: $('#id_number').val(),
                password: $('#password').val(),
                role: $('#role').val()
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/dashboard/user-save',
                type: 'POST',
                data: postData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInput()
                        $('#success_alert').css('display', 'block');
                        setTimeout(function() {
                            $('#success_alert').css('display', 'none');
                        }, 2000);
                        $('.user_modal').modal('hide');
                        $("#datatable").html('')
                        displayUser()
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#error_role').html(xhr.responseJSON.errors.role)
                    $('#error_fname').html(xhr.responseJSON.errors.fname)
                    $('#error_lname').html(xhr.responseJSON.errors.lname)
                    $('#error_idnumber').html(xhr.responseJSON.errors.id)
                    $('#error_pword').html(xhr.responseJSON.errors.password)
                }
            });
        });

        // display list of users
        const displayUser = () => {
            $.ajax({
                url: '/dashboard/user-display',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#datatable').html('');
                    response.forEach(user => {
                        user.roles.forEach(role => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td><img class="rounded-circle" width="35" src="{{asset('images/profile/pic1.png')}}" alt=""></td>
                            <td>${role.name}</td>
                            <td>${user.name}</td>
                            <td>${user['id_number']}</td>
                            <td>${user.email}</td>
                            <td>${user.created_at}</td>
                            <td>${user.updated_at}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="javascript:void(0)" onclick="edit_user(${user.id})" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target=".bd-update-modal-lg"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="javascript:void(0)" onclick="delete_user(${user.id})" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>												
                            </td>
                        `;
                        $("#datatable").append(row);
                        });
                    });
                },
                error: function(error) {
                   console.error(error)
                }
            });
        };

        displayUser()


        // edit user
        const edit_user = (id) =>{
            $('#edit_modal').modal('show');
            $.ajax({
                url: '/dashboard/edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#edit_name').val(response.name)
                    $('#edit_email').val(response.email)
                    $('#edit_id_number').val(response['id_number'])
                    $('#edit_role').val(response.roles[0].name)
                    $('#user_id').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }


        // update user
        $('#update_user').click(function() {
            clearErrorMessages()
            var postData = {
                name: $('#edit_name').val(),
                user_id: $('#user_id').val(),
                id_number: $('#edit_id_number').val(),
                email: $('#edit_email').val(),
                password: $('#password').val(),
                role: $('#edit_role').val()
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/dashboard/user-update',
                type: 'PUT',
                data: postData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInput()
                        $('#edit_success_alert').css('display', 'block');
                        setTimeout(function() {
                            $('#edit_success_alert').css('display', 'none');
                        }, 2000);
                        $('.edit_modal').modal('hide');
                        $("#datatable").html('')
                        displayUser()
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    // $('#error_role').html(xhr.responseJSON.errors.role)
                    // $('#error_fname').html(xhr.responseJSON.errors.fname)
                    // $('#error_lname').html(xhr.responseJSON.errors.lname)
                    // $('#error_idnumber').html(xhr.responseJSON.errors.id)
                    // $('#error_pword').html(xhr.responseJSON.errors.password)
                }
            });
        });


        // delete user
        const delete_user = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/dashboard/user-delete',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if(response.success) {
                                 $("#datatable").html('')
                                 displayUser()
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        };


    </script>
@endsection