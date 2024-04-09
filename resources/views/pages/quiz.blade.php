@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding" style="padding: 40px 0px">
        <div class="container" style="width: 90%">
            
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="side-info">
                            <div class="video-title" style="text-align: center;">
                                <h4 style="font-weight: 700;">Chapter Quiz: {{$course['name']}}</h4>
                            </div>
                        </div>
                        <!-- End Top Info -->
                    </div>
                    <br>
                    <div class="quiz-details">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <h5 style="font-weight: 700;">Total Item: {{$questions}}</h5>
                                <h5 style="font-weight: 700;">Passing Score is 60%</h5>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <h5 style="font-weight: 700; color: {{$remarks == 'PASSED' ? 'yellowgreen' : 'red'}};" id="quiz_remarks" {{$score != null ? '' : 'hidden'}}> {{$score != null ? 'Remarks: '.$remarks : ''}}</h5>
                                <h5 style="font-weight: 700; color: {{$remarks == 'PASSED' ? 'yellowgreen' : 'red'}};" id="quiz_score" {{$score != null ? '' : 'hidden'}}> {{$score != null ? 'Score: '.$score['score'].'%' : ''}}</h5>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <input type="hidden" name="" id="course_id" value="{{$course['id']}}">
                        @foreach($questions_list as $index => $question)
                            <h5 class="questions" id="{{$question['id']}}">{{$index+1}}. {{$question['question']}}?</h5>
                            <span hidden class="correct_answer" id="correct_answer_{{$question['id']}}" style="color: yellowgreen;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Correct <br></span>
                            <span hidden class="incorrect_answer" id="incorrect_answer_{{$question['id']}}" style="color: red;"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Incorrect <br></span>
                            <span hidden class="no_answer" id="no_answer_{{$question['id']}}" style="color: red;"><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Select an answer for this question <br></span>
                            <br>
                            <div class="choices" style="margin-left: 20px;">
                                <div>
                                    <input type="radio" name="option_{{$question['id']}}" id="option[{{$question['id']}}][1]" value="A"> &nbsp;
                                    <label for="option[{{$question['id']}}][1]">{{$question['option1']}}</label>
                                </div>
                                <br>
                                <div>
                                    <input type="radio" name="option_{{$question['id']}}" id="option[{{$question['id']}}][2]" value="B"> &nbsp;
                                    <label for="option[{{$question['id']}}][2]">{{$question['option2']}}</label><br>
                                </div>
                                <br>
                                <div>
                                    <input type="radio" name="option_{{$question['id']}}" id="option[{{$question['id']}}][3]" value="C"> &nbsp;
                                    <label for="option[{{$question['id']}}][3]">{{$question['option3']}}</label>
                                </div>
                                <br>
                                <div>
                                    <input type="radio" name="option_{{$question['id']}}" id="option[{{$question['id']}}][4]" value="D"> &nbsp;
                                    <label for="option[{{$question['id']}}][4]">{{$question['option4']}}</label>
                                </div>
                            </div>
                            <p id="explanation{{$question['id']}}"></p>
                        @endforeach
                    </div>
                    <div class="">
                        <!-- <button style="background-color: #5cb85c; padding: 5px; border-radius: 10px; color: white; font-weigth: 900; border: none;" type="submit">SUBMIT ANSWER</button> -->
                        <button id="submitAnswer" class="btn btn-success" style="padding: 5px; border-radius: 10px; color: white;" type="submit">SUBMIT ANSWER</button>
                    
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="sidebar">
                        <aside>
                            <!-- Sidebar Item -->
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" placeholder="Course name" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>List Of Videos</h4>
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#">
                                                                {{$course['name']}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac1" class="panel-collapse collapse in">
                                                        <div class="panel-body" style="overflow-y: scroll; height: 450px; padding-top: 0px;">
                                                            <ul>
                                                                @php 
                                                                    $counter = 1;
                                                                @endphp    

                                                                @foreach($list_of_videos as $videos)
                                                                    @php
                                                                        $duration = explode(':', $videos->duration);
                                                                    @endphp
                                                                    <li>
                                                                        <div class="video-info" style="display: flex; flex-direction: column">
                                                                            <div class="item title" style="display: flex; flex-direction: row">
                                                                            <span><strong>Title:</strong> &nbsp;{{$videos->title}}</span>
                                                                            </div>
                                                          
                                                                        </div>
                                                                        
                                                                        @role('Student')
                                                                        <div class="item info">
                                                                            <a href="{{($counter <= $level) ? '/course-video/view/'.$videos->id : 'javascript:void(0)'}}" {{($counter <= $level) ? '' : 'disabled'}} style="padding-left: 20px; padding-right: 20px;">{{($counter++ <= $level) ? 'VIEW' : 'LOCKED'}}</a>
                                                                        </div>
                                                                        @endrole

                                                                        @role(['Instructor', 'Administrator'])
                                                                        <div class="item info">
                                                                            <a href="/course-video/view/{{$videos->id}}" style="padding-left: 20px; padding-right: 20px;">VIEW</a>
                                                                        </div>
                                                                        @endrole
                                                                        
                                                                    </li>
                                                                @endforeach


                                                                <li>
                                                                        <div class="quiz-info" style="display: flex; flex-direction: column">
                                                                            <div class="item title" style="display: flex; flex-direction: row">
                                                                            <span><strong>Final:</strong> &nbsp;Chapter Quiz</span>
                                                                            </div>
                                                                            <div class="item name">
                                                                                <i class="fas fa-play"></i>
                                                                                <span>Quiz item: {{$questions}}</span>
                                                                            </div>
                                                                        </div>
                                                                        @role('Student')
                                                                        <div class="item info">
                                                                            <a href="{{($counter <= $level) ? '/quiz/'.$course['id'] : 'javascript:void(0)'}}" {{($level >= $counter) ? 'disabled' : ''}} style="padding-left: 20px; padding-right: 20px;">{{($level >= $counter) ? 'VIEW' : 'LOCKED'}}</a>
                                                                        </div>
                                                                        @endrole

                                                                        @role(['Instructor', 'Administrator'])
                                                                        <div class="item info">
                                                                            <a href="/quiz/'.{{$course['id']}}" style="padding-left: 20px; padding-right: 20px;">VIEW</a>
                                                                        </div>
                                                                        @endrole
                                                                        
                                                                    </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->

                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

@endsection

@section('script')
<script>

    $(document).ready(function(){
        $.extend({
            clearErrorMessages: function(){
                $('.no_answers').attr('hidden', true)
                $('.correct_answer').attr('hidden', true);
                $('.incorrect_answer').attr('hidden', true);
            },

            raiseError: function(questions){
                for(question of questions){
                    $('#no_answer_'+question).attr('hidden', false);
                    $('#correct_answer_'+question).attr('hidden', false);
                    $('#incorrect_answer_'+question).attr('hidden', false);
                }
            },
        })

        $(document).on('click', '#submitAnswer', function(){
            $.clearErrorMessages()
            Swal.fire({
                title: "Submit Answer",
                text: "Submit your answers!",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "yellowgreen",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, submit!"
                }).then((result) => {
                if (result.value) {
                    var answers = {}
                    var no_answer = [];
                    var course_id = $('#course_id').val();
                    $.clearErrorMessages()
                    $('.questions').each(function(index, item){ 
                        question = $(item).attr('id');
                        answer = $('input[name="option_'+question+'"]:checked').val();

                        if(answer == null){
                            no_answer.push(question)
                        }
                        
                        answers[question] = answer;
                    })
                    if(no_answer.length > 0){
                        $.raiseError(no_answer)
                    }else{
                        $.ajax({
                            url : '{{route('quiz.check')}}',
                            type: 'POST',
                            data: {course_id : course_id, answers : answers},
                            headers: {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
                            error: function(error){
                                console.error('Request Error: ' + error)
                                console.log(answers);
                            },
                            success: function(response){
                                data = JSON.parse(response)
                                if(data.remarks == 'PASSED'){
                                    $('#quiz_remarks').html('Remarks: '+ data.remarks).attr('hidden', false).css('color', 'yellowgreen');
                                    $('#quiz_score').html('Score: '+data.score+'%').attr('hidden', false).css('color', 'yellowgreen');
                                }else{
                                    $('#quiz_remarks').html('Remarks: '+ data.remarks).attr('hidden', false).css('color', 'red');
                                    $('#quiz_score').html('Score: '+data.score+'%').attr('hidden', false).css('color', 'red');
                                }
                                
                                $.each(data.results, function(index, item){
                                    if(item.result == 'correct'){
                                        $('#correct_answer_'+item.id).attr('hidden', false);
                                    }else{
                                        console.log(item)
                                        $('#incorrect_answer_'+item.id).attr('hidden', false);
                                    }
                                })
                            }
                        })
                    }
                }
            });
        })
    })
</script>

@endsection
