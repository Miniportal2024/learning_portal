@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url({{asset('assets/img/banner/2.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Course Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Title-->
                            <div class="title">
                                <h2></h2>
                            </div>
                            <!-- End Title-->

                            <!-- Thumbnail -->
                            <div class="thumb">
                                <a href="/course-video/{{$course->id}}"><img style="width: 80em;max-width: 750px;max-height: 500px;height: 50em;" src="{{asset('storage/'.$course->course_img)}}" alt="Thumb"></a>
                            </div>
                            <!-- End Thumbnail -->

                            <!-- Course Meta -->
                            <div class="course-meta">
                                <div class="item author">
                                    <div class="thumb">
                                        <a href="#"><img alt="Thumb" src="{{asset('storage/'.$course->course_img)}}"></a>
                                    </div>
                                    <div class="desc">
                                        <h4>{{$course->author}}</h4>
                                    </div>
                                </div>
                                <div class="item category">
                                    <h4>Category</h4>
                                    <a href="/course-video/{{$category->id}}">{{$category->name}}</a>
                                </div>
                                <div class="item rating">
                                    <h4>Rating</h4>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>4.5 </span>
                                </div>
                                @if(!in_array($category->id, [13, 14]))
                                    <div class="item action">
                                        <div class="align-right">
                                            <a class="btn btn-dark effect btn-sm" href="/course-video/{{$course->id}}">
                                                <i class="fas fa-chart-bar"></i> Study Now
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            @if(in_array($category->id, [13, 14]))
                                <div class="course-meta"style="margin:0 !important;">
                                    <div class="item action" style="display: flex; flex-direction: row; align-items: flex-end; gap: 10px;">
                                        <div class="align-right">
                                            <a class="btn btn-dark effect btn-sm" href="/pdf/{{$course->id}}">
                                                <i class="fas fa-chart-bar"></i> Open PDF
                                            </a>
                                        </div>
                                        <div class="align-right">
                                            <a class="btn btn-dark effect btn-sm" href="/quiz/{{$course->id}}">
                                                <i class="fas fa-chart-bar"></i> Open Quiz
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Course Description</h4>
                                        <p>
                                            {{$category->description}}
                                        </p>
                                        <h4>Learning Outcomes</h4>
                                        <ul>
                                            <li><i class="fas fa-check-double"></i> Over 37 lectures and 55.5 hours of content!</li>
                                            <li><i class="fas fa-check-double"></i> Testing Training Included.</li>
                                            <li><i class="fas fa-check-double"></i> Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                            <li><i class="fas fa-check-double"></i> Course content designed by considering current software testing technology and the job market.</li>
                                            <li><i class="fas fa-check-double"></i> Practical assignments at the end of every session.</li>
                                            <li><i class="fas fa-check-double"></i> Practical learning experience with live project work and examples.</li>
                                            <li><i class="fas fa-check-double"></i> Unlimited Resourses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside>
                            <!-- Sidebar Item -->
                        
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Suggested Categories</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach($suggested_categories as $category)
                                            <li>
                                                <a href="/category/{{$category->id}}">{{$category->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Suggested Courses</h4>
                                </div>
                                @foreach($suggested_courses as $course)
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{asset('storage/'.$course->course_img)}}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="/course-details/{{$course->id}}">{{$course->name}}</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 </span>
                                            </div>
                                            <div class="meta">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- End Sidebar Item -->

                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->
@endsection
