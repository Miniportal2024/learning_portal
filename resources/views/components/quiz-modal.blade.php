<div class="edit-quiz-modal" hidden>
    <div class="modal-dialog modal-lg">
        <div class="quiz-modal-content">
            <div class="modal-body">
                <div class="">
                    <h4 class="">Update Quiz</h4>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label class="text-label form-label" for="edit_course_id">Course Name</label>
                                <input type="hidden" id="quiz_id">
                                <div class="mb-3">
                                    <select class="" id="edit_course_id" style="width: 100%; padding: 10px; background: #fff; border: 1px solid #ccc" placeholder="(Select Course Name)" required >
                                        <option selected disabled>(Select Course Name)</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}" >{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <span style="color: red" id="error_edit_course_id"></span>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                    <label class="text-label form-label" for="edit_after_video_id">After Video Name</label>
                                <div class="mb-3">
                                    <select class="text-label form-label" style="width: 100%; padding: 10px; background: #fff; border: 1px solid #ccc" id="edit_after_video_id" placeholder="(Select Video Name)" required >
                                        <option selected disabled>(Select Video Name)</option>
                                    </select>
                                    <span style="color: red" id="error_edit_after_video_id"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-md-6 col-lg-6" style="margin-bottom: 10px;">
                        <div class="">
                            <label class="text-label form-label" for="">Quiz Title</label>
                            <input type="text" class="form-control edit_title" id="edit_title" placeholder="Name">
                            <span style="color: red" id="error_edit_title"></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="mb-3">
                            <label class="text-label form-label">Quiz Item</label>
                            <input type="text" class="form-control" id="edit_quiz_item" placeholder="Quiz Item" required>
                            <span style="color: red" id="error_edit_quiz_item"></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="mb-3">
                            <label class="text-label form-label">Answer</label>
                            <input type="text" class="form-control" id="edit_answer" placeholder="Answer" required>
                            <span style="color: red" id="error_edit_answer"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="mb-3">
                            <label class="text-label form-label">Question</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="edit_question" style="padding: 14px;" id="edit_question" cols="80" rows="4"></textarea>
                            </div>
                            <span style="color: red" id="error_edit_question"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option A</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="edit_option1" style="padding: 14px;" id="edit_option1" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_edit_option1"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option B</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="edit_option2" style="padding: 14px;" id="edit_option2" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_edit_option2"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option C</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="edit_option3" style="padding: 14px;" id="edit_option3" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_edit_option3"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option D</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="edit_option4" style="padding: 14px;" id="edit_option4" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_edit_option4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" onclick="closeModal()">Close</button>
                <button type="button" class="btn btn-primary" id="update_quiz">Update Quiz</button>
            </div>
        </div>
    </div>
</div>


<div class="add-quiz-modal" hidden>
    <div class="modal-dialog modal-lg">
        <div class="quiz-modal-content">
            <div class="modal-body">
                <div class="">
                    <h4 class="">Quiz Information</h4>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label class="text-label form-label" for="course_id">Course Name</label>
                                <input type="hidden" id="quiz_id">
                                <div class="mb-3">
                                    <select class="" id="course_id" style="width: 100%; padding: 10px; background: #fff; border: 1px solid #ccc" placeholder="(Select Course Name)" required >
                                        <option selected disabled>(Select Course Name)</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}" >{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <span style="color: red" id="error_course_id"></span>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                    <label class="text-label form-label" for="after_video_id">After Video Name</label>
                                <div class="mb-3">
                                    <select class="text-label form-label" style="width: 100%; padding: 10px; background: #fff; border: 1px solid #ccc" id="after_video_id" placeholder="(Select Video Name)" required >
                                        <option selected disabled>(Select Video Name)</option>
                                    </select>
                                    <span style="color: red" id="error_after_video_id"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    

                    <div class="col-md-6 col-lg-6" style="margin-bottom: 10px;">
                        <div class="">
                            <label class="text-label form-label" for="">Quiz Title</label>
                            <input type="text" class="form-control title" id="title" placeholder="Name">
                            <span style="color: red" id="error_title"></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="mb-3">
                            <label class="text-label form-label">Quiz Item</label>
                            <input type="text" class="form-control" id="quiz_item" placeholder="Quiz Item" required>
                            <span style="color: red" id="error_quiz_item"></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="mb-3">
                            <label class="text-label form-label">Answer</label>
                            <input type="text" class="form-control" id="answer" placeholder="Answer" required>
                            <span style="color: red" id="error_answer"></span>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="mb-3">
                            <label class="text-label form-label">Question</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="question" style="padding: 14px;" id="question" cols="80" rows="4"></textarea>
                            </div>
                            <span style="color: red" id="error_question"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option A</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="option1" style="padding: 14px;" id="option1" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_option1"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option B</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="option2" style="padding: 14px;" id="option2" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_option2"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option C</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="option3" style="padding: 14px;" id="option3" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_option3"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label class="text-label form-label">Option D</label>
                            <div>
                                <textarea class="form-control" style="resize:none;" name="option4" style="padding: 14px;" id="option4" cols="35" rows="3"></textarea>
                            </div>
                            <span style="color: red" id="error_option4"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" onclick="closeModal()">Close</button>
                <button type="button" class="btn btn-primary" id="save_quiz">Save</button>
            </div>
        </div>
    </div>
</div>