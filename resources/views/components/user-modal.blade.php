<div class="edit-user-modal" hidden>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="">
                    <h4 class="">Update User</h4>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-12" style="margin-bottom: 10px;">
                        <div class="">
                            <label class="text-label form-label" for="">Name</label>
                            <input type="text" class="form-control edit_name" id="edit_name" placeholder="Name">
                            <span style="color: red" id="error_edit_name"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">ID number</label>
                            <input type="text" class="form-control edit_id_number" id="edit_id_number" placeholder="Enter an ID number.." required>
                            <span style="color: red" id="error_edit_idnumber"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label" for="user_type">User Type</label>
                            <input type="hidden" id="user_id">
                            <select class="" id="edit_role" placeholder="(Type of User)" required >
                                <option selected disabled>(Type of User)</option>
                                <option>Administrator</option>
                                <option>Instructor</option>
                                <option>Student</option>
                            </select>
                            <span style="color: red" id="error_edit_role"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">E-mail</label>
                            <input type="text" class="form-control" id="edit_email" placeholder="E-mail" required>
                            <span style="color: red" id="error_edit_email"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label" for="dz-password">Password *</label>
                            <input type="password" class="form-control" id="edit_password" placeholder="Choose a safe one.." required>
                            <span style="color: red" id="error_edit_password"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" onclick="closeModal()">Close</button>
                <button type="button" class="btn btn-primary" id="update_user">Update changes</button>
            </div>
        </div>
    </div>
</div>


<div class="add-user-modal" hidden>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="">
                    <h4 class="">User Information</h4>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-12" style="margin-bottom: 10px;">
                        <div class="">
                            <label class="text-label form-label" for="">Name</label>
                            <input type="text" class="form-control name" id="name" placeholder="Name">
                            <span style="color: red" id="error_name"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">ID number</label>
                            <input type="text" class="form-control id_number" id="id_number" placeholder="Enter an ID number.." required>
                            <span style="color: red" id="error_idnumber"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <div>
                                <label class="text-label form-label" for="role">User Type</label>
                                <input type="hidden" id="user_id">
                                <select class="" id="role" placeholder="(Type of User)" required >
                                    <option selected disabled>(Type of User)</option>
                                    <option>Administrator</option>
                                    <option>Instructor</option>
                                    <option>Student</option>
                                </select>
                            </div>
                            <span style="color: red" id="error_role"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">E-mail</label>
                            <input type="text" class="form-control" id="email" placeholder="E-mail" required>
                            <span style="color: red" id="error_email"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label" for="dz-password">Password *</label>
                            <input type="password" class="form-control" id="password" placeholder="Use strong one..." required>
                            <span style="color: red" id="error_pword"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" onclick="closeModal()">Close</button>
                <button type="button" class="btn btn-primary" id="save_user">Save</button>
            </div>
        </div>
    </div>
</div>