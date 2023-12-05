@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/2.jpg);">
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
                                <h2>{{$course->name}}</h2>
                            </div>
                            <!-- End Title-->

                            <!-- Thumbnail -->
                            <div class="thumb">
                                <img src="{{asset($course->img)}}" alt="Thumb">
                            </div>
                            <!-- End Thumbnail -->

                            <!-- Course Meta -->
                            <div class="course-meta">
                                <div class="item author">
                                    <div class="thumb">
                                        <a href="#"><img alt="Thumb" src="assets/img/team/8.jpg"></a>
                                    </div>
                                    <div class="desc">
                                        <h4>Author</h4>
                                        <a href="#">{{course->instructor}}</a>
                                    </div>
                                </div>
                                <div class="item category">
                                    <h4>Category</h4>
                                    <a href="#">Cloud Computing</a>
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
                                <div class="align-right">
                                    <a class="btn btn-dark effect btn-sm" href="course-video">
                                        <i class="fas fa-chart-bar"></i> Study Now
                                    </a>
                                </div>
                            </div>
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Course Desscription</h4>
                                        <p>
                                            {{course->description}}
                                        </p>
                                        <h4>Certification</h4>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
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
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" placeholder="Course name" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Courses Category</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">Java Programming <span>23</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Social Science <span>0</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Business Management <span>12</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Online Learning <span>17</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Course Management <span>0</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Popular Courses</h4>
                                </div>
                                
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/courses/g1.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="#">Profession paython learing</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                            <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/courses/g2.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="#">Profession paython learing</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                            <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/courses/g3.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="#">Profession paython learing</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                            <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
