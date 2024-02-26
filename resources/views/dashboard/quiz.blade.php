@extends('layouts.app')

@section('link')
    <link href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    @include('components.quiz-modal')
    <div class="content-body" style="padding: 30px; 50px">
        <div class="container-fluid">
            <div>
                <ul class="breadcrumb">
                    <li><a href="#">Administrator</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Quiz</li>
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
                            <strong>Success!</strong> Quiz Succesfully Added.
                        </div>
                        <div class="alert alert-success alert-dismissible alert-alt fade" style="display: none;" id="edit_success_alert" hidden>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                <span><i class="fa-solid fa-xmark"></i></span>
                            </button>
                            <strong>Success!</strong> Quiz Succesfully Updated.
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
                                                            <th style="text-align:center"><strong>Title</strong></th>
                                                            <th style="text-align:center"><strong>Course Name</strong></th>
                                                            <th style="text-align:center"><strong>After Video Name</strong></th>
                                                            <th style="text-align:center"><strong>Quiz Item</strong></th>
                                                            <th style="text-align:center"><strong>Question</strong></th>
                                                            <th style="text-align:center"><strong>Option 1</strong></th>
                                                            <th style="text-align:center"><strong>Option 2</strong></th>
                                                            <th style="text-align:center"><strong>Option 3</strong></th>
                                                            <th style="text-align:center"><strong>Option 4</strong></th>
                                                            <th style="text-align:center"><strong>Answer</strong></th>
                                                            <th style="text-align:center"><strong>Action</strong></th>
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
                                <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".quiz-modal">
                                    <i class="fa-solid fa-add me-2"></i>Delete quiz/s
                                </button> -->
                                <button type="button" class="btn btn-success" style="" onclick="showAddModal()">
                                    <i class="fa-solid fa-add me-2"></i>Add Quiz
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
        $(document).on('change', '#course_id', function(){
            let id = $('#course_id').val();
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type    :   'POST',
                url     :   '{{route('dashboard.video.list')}}',
                headers :   {'X-CSRF-TOKEN' : csrfToken},
                data    :   {id:id},
                error   :   function(error){

                },
                success :   function(response){
                    var videos = JSON.parse(response);
                    videos.forEach(video => {
                        var option = document.createElement('option');
                        option.value = video.id;
                        option.text = video.title;
                        $('#after_video_id').add(option);
                    })
                }

            })
        })
        const showAddModal = () => {
            clearErrorMessages()
            $('.add-quiz-modal').attr('hidden', false);
        }

        const closeModal = () => {
            $('.add-quiz-modal').attr('hidden', true);
            $('.edit-quiz-modal').attr('hidden', true);
        }

        const clearErrorMessages = () => {
            $('#error_title').html('')
            $('#error_course_id').html('')
            $('#error_after_video_id').html('')
            $('#error_quiz_item').html('')
            $('#error_answer').html('')
            $('#error_question').html('')
            $('#error_option1').html('')
            $('#error_option2').html('')
            $('#error_option3').html('')
            $('#error_option4').html('')

            $('#error_edit_title').html('')
            $('#error_edit_course_id').html('')
            $('#error_edit_after_video_id').html('')
            $('#error_edit_quiz_item').html('')
            $('#error_edit_answer').html('')
            $('#error_edit_question').html('')
            $('#error_edit_option1').html('')
            $('#error_edit_option2').html('')
            $('#error_edit_option3').html('')
            $('#error_edit_option4').html('')
        }

        // for clearing inputs
        const clearInput = () => {
            $('#title').val('')
            $('#course_id').val('(Select Course Name)')
            $('#after_video_id').val('(Select Video Name)')
            $('#quiz_item').val('')
            $('#answer').val('')
            $('#question').val('')
            $('#option1').val('')
            $('#option2').val('')
            $('#option3').val('')
            $('#option4').val('')

            $('#edit_title').val('')
            $('#edit_course_id').val('(Select Course Name)')
            $('#edit_after_video_id').val('(Select Video Name)')
            $('#edit_quiz_item').val('')
            $('#edit_answer').val('')
            $('#edit_question').val('')
            $('#edit_option1').val('')
            $('#edit_option2').val('')
            $('#edit_option3').val('')
            $('#edit_option4').val('')
        }

        // saving quiz
        $('#save_quiz').click(function() {
            clearErrorMessages()
            var postData = {
                title:      $('#title').val(),
                course_id:  $('#course_id').val(),
                after_video_id:   $('#after_video_id').val(),
                quiz_item:  $('#quiz_item').val(),
                answer:     $('#answer').val(),
                question:   $('#question').val(),
                option1:    $('#option1').val(),
                option2:    $('#option2').val(),
                option3:    $('#option3').val(),
                option4:    $('#option4').val(),
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{route('dashboard.quiz.save')}}',
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
                        $('.add-quiz-modal').attr('hidden', true);
                        $("#datatable").html('')
                        displayquiz()
                    }
                    Swal.fire({
                        title: 'Information',
                        text: response.message,
                        icon: "info",
                        timer: 1500,
                        confirmButtonColor: "#3085d6",
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#error_role').html(xhr.responseJSON.errors.role)
                    $('#error_name').html(xhr.responseJSON.errors.name)
                    $('#error_email').html(xhr.responseJSON.errors.email)
                    $('#error_idnumber').html(xhr.responseJSON.errors.id_number)
                    $('#error_pword').html(xhr.responseJSON.errors.password)
                }
            });
        });

        // display list of quiz
        const displayquiz = () => {
            $.ajax({
                url: '{{route('dashboard.quizzes.display')}}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#datatable').html('');
                    response.forEach(quiz => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td style="white-space: nowrap;">${quiz.title}</td>
                            <td style="white-space: nowrap;">${quiz.course_name}</td>
                            <td style="white-space: nowrap;">${quiz.after_video_name}</td>
                            <td>${quiz.quiz_item}</td>
                            <td style="white-space: nowrap;">${quiz.question}</td>
                            <td style="white-space: nowrap;">${quiz.option1}</td>
                            <td style="white-space: nowrap;">${quiz.option2}</td>
                            <td style="white-space: nowrap;">${quiz.option3}</td>
                            <td style="white-space: nowrap;">${quiz.option4}</td>
                            <td>${quiz.answer}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="javascript:void(0)" onclick="edit_quiz(${quiz.id})" class="btn btn-primary shadow btn-xs sharp me-1"" style="border-radius: 5px; padding:5px;"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="javascript:void(0)" onclick="delete_quiz(${quiz.id})" class="btn btn-danger shadow btn-xs sharp" style="border-radius: 5px; padding:5px;"><i class="fa fa-trash"></i></a>
                                </div>												
                            </td>
                        `;
                        $("#datatable").append(row);
                    });
                },
                error: function(error) {
                   console.error(error)
                }
            });
        };

        // edit quiz
        const edit_quiz = (id) =>{
            $.ajax({
                url: '/administrator/dashboard/quiz/edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('.edit-quiz-modal').attr('hidden', false);
                    $('#edit_name').val(response.name)
                    $('#edit_email').val(response.email)
                    $('#edit_id_number').val(response['id_number'])
                    $('#edit_role').val(response.roles[0].name)
                    $('#quiz_id').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }


        // update quiz
        $('#update_quiz').click(function() {
            clearErrorMessages()
            var postData = {
                name: $('#edit_name').val(),
                quiz_id: $('#quiz_id').val(),
                id_number: $('#edit_id_number').val(),
                email: $('#edit_email').val(),
                password: $('#edit_password').val(),
                role: $('#edit_role').val()
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{route('dashboard.quiz.update')}}',
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
                        $('.edit-quiz-modal').attr('hidden', true);
                        $("#datatable").html('')
                        displayquiz()
                        Swal.fire({
                            title: 'Information',
                            text: response.message,
                            icon: "info",
                            timer: 1500,
                            confirmButtonColor: "#3085d6",
                        });
                    }else{
                        $('#error_edit_role').html(response.error.role)
                        $('#error_edit_name').html(response.error.name)
                        $('#error_edit_email').html(response.error.email)
                        $('#error_edit_idnumber').html(response.error.id_number)
                        $('#error_edit_password').html(response.error.password)
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                }
            });
        });


        // delete quiz
        const delete_quiz = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Do you really want to delete this?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '{{route('dashboard.quiz.delete')}}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if(response.success) {
                                $("#datatable").html('')
                                displayquiz()
                                Swal.fire({
                                    title: 'Information',
                                    text: response.message,
                                    icon: "info",
                                    timer: 1500,
                                    confirmButtonColor: "#3085d6",
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        };


        displayquiz()
        clearErrorMessages()
        clearInput()
    </script>
@endsection