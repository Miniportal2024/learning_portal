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
                    <h1>Courses</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!-- Start Popular Courses 
    ============================================= -->
    <div class="popular-courses circle carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="courses-details">
                                    <img src="assets/img/courses/1.jpg" alt="Thumb">
                                </a>
                                <div class="price">AWS</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/7.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Munil Druva</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="courses-details">Amazon web service is an online platform</a></h4>
                                <p>
                                    Provides scalable and cost-effective cloud computing solutions.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                       
                                    </ul>
                                    <a href="{{route('course-details')}}">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="courses-details">
                                    <img src="assets/img/courses/2.jpg" alt="Thumb">
                                </a>
                                <div class="price">SC-900 Microsoft Security</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/8.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Akua Paul</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>5 (867)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="course-details">Stanford Engineering</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        
                                    </ul>
                                    <a href="#">Start Here</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="courses-details">
                                    <img src="assets/img/courses/3.jpg" alt="Thumb">
                                </a>
                                <div class="price">CompTIA Cyber Security+</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/9.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Jonathom Kiyam</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.9 (2,655)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="courses-details">Covers Big Data analysis</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        
                                    </ul>
                                    <a href="#">Start Here</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="courses-details">
                                    <img src="assets/img/courses/4.jpg" alt="Thumb">
                                </a>
                                <div class="price">Mechatronics and Automation Master Technician</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/2.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Huma Park</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.4 (16,465)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="courses-details">professional web development</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        
                                    </ul>
                                    <a href="#">Start Here</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="courses-details">
                                    <img src="assets/img/courses/5.jpg" alt="Thumb">
                                </a>
                                <div class="price">Mechatronics and Automation Technician</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/3.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Prokash Timer</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>5 (7,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="courses-details">Java Programming Masterclass</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        
                                    </ul>
                                    <a href="#">Start Here</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

@endsection
