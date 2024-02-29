@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding" style="padding: 40px 0px">
        <div class="container" style="width: 80%">
            
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Thumbnail -->
                            <div class="thumb">
                                <video class="video_loaded" id="{{$video['id']}}" style="width: 100%" controls controlsList="nodownload" src="{{asset('storage/'.$video['file_location'])}}"></video>
                            </div>
                            <!-- End Thumbnail -->
                            <br>
                            <div class="video-title">
                                <h4  style="font-weight: 600">{{$video['title']}}</h4>
                            </div>
                            <!-- Course Meta -->
                            <div class="course-meta" style="margin-top: 20px">
                                <div class="item author">
                                    <div class="thumb">
                                        <a href="#"><img alt="Thumb" src="{{asset('storage/'.$course['course_img'])}}"></a>
                                    </div>
                                    <div class="desc">
                                        <h4>Author</h4>
                                        <a href="#">{{$course['author']}}</a>
                                    </div>
                                </div>
                                <div class="item category">
                                    <h4>Category</h4>
                                    <a href="#">--</a>
                                </div>
                                <div class="item rating">
                                    <h4>Rating</h4>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>4.5 (16)</span>
                                </div>
                                
                            </div>
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->
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
                                                                            <div class="item name">
                                                                                <i class="fas fa-play"></i>
                                                                                <span>Lecture {{$counter++}}: {{$duration[0]}} hours {{$duration[1]}} min @if(count($duration) > 2) {{$duration[2]}}.' sec' @endif </span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="item info">
                                                                            <a href="/course-video/view/{{$videos['id']}}" style="padding-left: 20px; padding-right: 20px;">View</a>
                                                                            <!-- <a href="javascript:void(0)" {{($videos->is_locked) ? 'disabled' : ''}} style="padding-left: 20px; padding-right: 20px;">{{($videos->is_locked) ? 'LOCKED' : 'VIEW'}}</a> -->
                                                                        </div>
                                                                    </li>
                                                                @endforeach
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
    $(document).ready({
        var video = $('.video_loaded')[0]; // Note the [0] to get the actual DOM element

        // Generate a random completion percentage between 60 and 99
        var randomPercentage = Math.floor(Math.random() * (99 - 60 + 1)) + 60;

        // Add event listener for timeupdate
        $(video).on('timeupdate', function () {
            // Get the current time and duration of the video
            var currentTime = video.currentTime;
            var duration = video.duration;

            // Calculate the percentage of completion
            var completionPercentage = (currentTime / duration) * 100;

            // Check if the video is at the random completion percentage
            if (completionPercentage >= randomPercentage) {
                console.log('Video is at ' + randomPercentage + '% completion');
                $.ajax({
                    url : '{{route('update.user_video')}}',
                    headers : {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},
                    type    : 'POST',
                    data    : {video:video},
                    error   : function(error){
                        console.error(error);
                    },
                    success : function(response){
                        console.log('Added');
                    }
                })
            }
        });
    })
</script>

@endsection
