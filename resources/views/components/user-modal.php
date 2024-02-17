
    <div class="modal fade bd-example-modal-lg edit-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
    <div class="modal fade bd-update-modal-lg add-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
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