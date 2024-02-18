@extends('layouts.app')

@section('link')
    <link href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    @include('components.user-modal')
    <div class="content-body" style="padding: 30px; 50px">
        <div class="container-fluid">
            <div>
                <ul class="breadcrumb">
                    <li><a href="#">Administrator</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Users</li>
                </ul>
            </div>
                                
            <div class="">

                <div class="" style="width: 100%">
                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <div class="row">
                        <div class="alert alert-success alert-dismissible alert-alt fade" style="display: none;" id="success_alert" hidden>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                <span><i class="fa-solid fa-xmark"></i></span>
                            </button>
                            <strong>Success!</strong> User Succesfully Added.
                        </div>
                        <div class="alert alert-success alert-dismissible alert-alt fade" style="display: none;" id="edit_success_alert" hidden>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                <span><i class="fa-solid fa-xmark"></i></span>
                            </button>
                            <strong>Success!</strong> User Succesfully Updated.
                        </div>
                        <div class="col-xl-12">
                            <div class="" id="">
                                <!-- <div class="card-header flex-wrap d-flex justify-content-between  border-0"> -->
                                <!-- </div> -->
                                <div class="" id="" style="color: black; border: 2px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); padding: 5px;">
                                    <div class="" id="bordered" role="tabpanel" aria-labelledby="home-tab-1">
                                        <div class="card-body">
                                            <div class="table-responsive" style="min-height: 380px; max-height: 380px; padding: 10px;">
                                                <table class="table table-responsive-md" style="text-align:center">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 20%; text-align:center;"><strong>Role</strong></th>
                                                            <th style="width: 20%; text-align:center;"><strong>Name</strong></th>
                                                            <th style="width: 20%; text-align:center;"><strong>ID Number</strong></th>
                                                            <th style="width: 20%; text-align:center;"><strong>E-mail</strong></th>
                                                            <th style="width: 20%; text-align:center;"><strong>Action</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="datatable" style="font-family: 'Helvetica Neue', Arial, sans-serif; font-size: 1.4rem">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".user-modal">
                                    <i class="fa-solid fa-add me-2"></i>Delete User/s
                                </button>
                                <button type="button" class="btn btn-success" onclick="showAddModal()">
                                    <i class="fa-solid fa-add me-2"></i>Add User
                                </button>
                            </div>
                        </div>
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
        const showAddModal = () => {
            $('.add-user-modal').attr('hidden', false);
        }

        const closeModal = () => {
            $('.add-user-modal').attr('hidden', true);
            $('.edit-user-modal').attr('hidden', true);
        }

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
                url: '{{route('dashboard.user.save')}}',
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
                        $('.add-user-modal').attr('hidden', true);
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
                url: '{{route('dashboard.users.display')}}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#datatable').html('');
                    response.forEach(user => {
                        user.roles.forEach(role => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${role.name}</td>
                            <td>${user.name}</td>
                            <td>${user['id_number']}</td>
                            <td>${user.email}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="javascript:void(0)" onclick="edit_user(${user.id})" class="btn btn-primary shadow btn-xs sharp me-1"" style="border-radius: 5px; padding:5px;"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="javascript:void(0)" onclick="delete_user(${user.id})" class="btn btn-danger shadow btn-xs sharp" style="border-radius: 5px; padding:5px;"><i class="fa fa-trash"></i></a>
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
            $.ajax({
                url: '/administrator/dashboard/edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('.edit-user-modal').attr('hidden', false);
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
                url: '{{route('dashboard.users.update')}}',
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
                        $('.edit-user-modal').attr('hidden', true);
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