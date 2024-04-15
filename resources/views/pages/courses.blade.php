@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url({{asset('assets/img/banner/urdaneta.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Courses</h1>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="popular-courses default-padding bottom-less without-carousel">
        <div class="container">
            <div class="row">
                <div class="popular-courses-items bottom-price">
                    @php
                        $recent = null;
                        $count = 1;
                    @endphp
                    @foreach($courses as $course)
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="/course-details/{{$course->id}}">
                                    
                                    <img src="{{asset('storage/'.$course->course_img)}}" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    @if($count <=2 | $course->state == 'old' || $recent === null || $recent >= 60)
                                        <a class="btn btn-theme effect btn-sm" href="/course-details/{{$course->id}}">
                                            <i class="fas fa-chart-bar"></i> Learn More
                                        </a>
                                    @else
                                        <a class="btn btn-theme effect btn-sm" href="javascript:void(0)">
                                            <i class="fas fa-chart-bar"></i> LOCKED
                                        </a>
                                    @endif


                                    @php
                                        $recent = $course->score;
                                        $count++;
                                    @endphp
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                
                                       
                                
                                </div>
                                <h4><a href="/course-details/{{$course->id}}">{{$course->name}}</a></h4>
                                <div class="cats">
                                    <a href="#"></a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection