@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')

    <!-- Start Login Form 
    ============================================= -->
    <form action="#" id="login-form" class="mfp-hide white-popup-block">
        <div class="col-md-4 login-social">
            <h4>Login with social</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>login to your registered account!</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </div>
            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
        </div>
    </form>
    <!-- End Login Form -->

    <!-- Start Register Form 
    ============================================= -->
    <form action="#" id="register-form" class="mfp-hide white-popup-block">
        <div class="col-md-4 login-social">
            <h4>Register with social</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>Register a new account</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Username*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Repeat Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Sign up
                    </button>
                </div>
            </div>
            <p class="link-bottom">Are you a member? <a href="#">Login now</a></p>
        </div>
    </form>
    <!-- End Register Form -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/home.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">Reach you career</h3>
                                            <h1 data-animation="animated slideInUp">Learn from best online training course</h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="/about-us">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="/courses">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/2.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">We're glade to see you</h3>
                                            <h1 data-animation="animated slideInUp">explore our brilliant graduates</h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/3.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">The goal of education</h3>
                                            <h1 data-animation="animated slideInUp">Join the bigest comunity of eduka</h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-6 thumb">
                        <img src="assets/img/about.jpg" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <h5>Introduction</h5>
                        <h2>Welcome to the beigest online learning source of Eduka</h2>
                        <p>
                            Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long no gave mr eyes. Admiration advantages no he celebrated so pianoforte unreserved. Not its herself forming charmed amiable. Him why feebly expect future now. 
                        </p>
                        <p>
                            Curiosity incommode now led smallness allowance. Favour bed assure son things yet. She consisted consulted elsewhere happiness disposing household any old the. Widow downs. Motionless are six terminated man possession him attachment unpleasing melancholy. Sir smile arose one share. No abroad in easily relied an whence lovers temper by.
                        </p>
                        <a href="#" class="btn btn-dark border btn-md">Read More</a>
                    </div>
                </div>
                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>
                <div class="our-features">
                    <div class="col-md-4 col-sm-4">
                        <div class="item mariner">
                            <div class="icon">
                                <i class="flaticon-faculty-shield"></i>
                            </div>
                            <div class="info">
                                <h4>Expert faculty</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item java">
                            <div class="icon">
                                <i class="flaticon-book-2"></i>
                            </div>
                            <div class="info">
                                <h4>Online learning</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item malachite">
                            <div class="icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="info">
                                <h4>Scholarship</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Why Chose Us 
    ============================================= -->
    <div class="wcs-area bg-dark text-light">
        <div class="container-full">
            <div class="row">
                <div class="col-md-6 thumb bg-cover" style="background-image: url(assets/img/banner/16.jpg);"></div>
                <div class="col-md-6 content">
                    <div class="site-heading text-left">
                        <h2>Why chose us</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-trending"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Trending Courses</a>
                            </h4>
                            <p>
                                Absolute required of reserved in offering no. How sense found our those gay again taken the. Had mrs outweigh desirous sex overcame. Improved property reserved disposal do offering me.
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-books"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Books & Library</a>
                            </h4>
                            <p>
                                Absolute required of reserved in offering no. How sense found our those gay again taken the. Had mrs outweigh desirous sex overcame. Improved property reserved disposal do offering me.
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Certified Teachers</a>
                            </h4>
                            <p>
                                Absolute required of reserved in offering no. How sense found our those gay again taken the. Had mrs outweigh desirous sex overcame. Improved property reserved disposal do offering me.
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <!-- Start Featured Courses 
    ============================================= -->
    <div id="featured-courses" class="featured-courses-area left-details default-padding">
        <div class="container">
            <div class="row">
                <div class="featured-courses-carousel owl-carousel owl-theme">
                    <!-- Start Single Item -->
                    <div class="item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="assets/img/courses/f1.jpg" alt="Thumb">
                                <div class="live-view">
                                    <a href="assets/img/courses/f1.jpg" class="item popup-link">
                                        <i class="fa fa-camera"></i>
                                    </a>
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=vQqZIFCab9o">
                                        <i class="fa fa-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 info">
                            <h2>
                                <a href="#">Codecademy software programming</a>
                            </h2>
                            <h4>featured courses</h4>
                            <p>
                                Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask
                            </p>
                            <h3>Learning outcomes</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Over 37 lectures and 55.5 hours of content!</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Testing Training Included.</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Course content designed by considering current software testing</span> 
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Practical assignments at the end of every session.</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Enroll Now</a>
                            <div class="bottom-info align-left">
                                <div class="item">
                                    <h4>Author</h4>
                                    <a href="#">
                                        <span>Devid Honey</span>
                                    </a>
                                </div>
                                <div class="item">
                                    <h4>Students enrolled</h4>
                                    <span>5455</span>
                                </div>
                                <div class="item">
                                    <h4>Rating</h4>
                                    <span class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Start Single Item -->
                    <div class="item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="assets/img/courses/f2.jpg" alt="Thumb">
                                <div class="live-view">
                                    <a href="assets/img/courses/f2.jpg" class="item popup-link">
                                        <i class="fa fa-camera"></i>
                                    </a>
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=vQqZIFCab9o">
                                        <i class="fa fa-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 info">
                            <h2>
                                <a href="#">Data analysis and data science</a>
                            </h2>
                            <h4>featured courses</h4>
                            <p>
                                Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask
                            </p>
                            <h3>Learning outcomes</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Over 37 lectures and 55.5 hours of content!</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Testing Training Included.</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Course content designed by considering current software testing</span> 
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Practical assignments at the end of every session.</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Enroll Now</a>
                            <div class="bottom-info align-left">
                                <div class="item">
                                    <h4>Author</h4>
                                    <a href="#">
                                        <span>Devid Honey</span>
                                    </a>
                                </div>
                                <div class="item">
                                    <h4>Students enrolled</h4>
                                    <span>5455</span>
                                </div>
                                <div class="item">
                                    <h4>Rating</h4>
                                    <span class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Start Single Item -->
                    <div class="item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="assets/img/courses/f3.jpg" alt="Thumb">
                                <div class="live-view">
                                    <a href="assets/img/courses/f3.jpg" class="item popup-link">
                                        <i class="fa fa-camera"></i>
                                    </a>
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=vQqZIFCab9o">
                                        <i class="fa fa-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 info">
                            <h2>
                                <a href="#">Graphic and interactive design</a>
                            </h2>
                            <h4>featured courses</h4>
                            <p>
                                Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask
                            </p>
                            <h3>Learning outcomes</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Over 37 lectures and 55.5 hours of content!</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Testing Training Included.</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Course content designed by considering current software testing</span> 
                                </li>
                                <li>
                                    <i class="fas fa-check-double"></i> 
                                    <span>Practical assignments at the end of every session.</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Enroll Now</a>
                            <div class="bottom-info align-left">
                                <div class="item">
                                    <h4>Author</h4>
                                    <a href="#">
                                        <span>Devid Honey</span>
                                    </a>
                                </div>
                                <div class="item">
                                    <h4>Students enrolled</h4>
                                    <span>5455</span>
                                </div>
                                <div class="item">
                                    <h4>Rating</h4>
                                    <span class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Courses -->

    <!-- Start Popular Courses 
    ============================================= -->
    <div class="popular-courses circle bg-gray carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Popular Courses</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/1.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: Free</div>
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
                                <h4><a href="#">data science and software</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/2.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: $12</div>
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
                                <h4><a href="#">Stanford Engineering</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/3.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: Free</div>
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
                                <h4><a href="#">Covers Big Data analysis</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/4.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: $46</div>
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
                                <h4><a href="#">professional web development</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/5.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: $124</div>
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
                                <h4><a href="#">Java Programming Masterclass</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
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


    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support
                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">Event</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                                <li>
                                    <a href="#">Teachers</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Forums</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Address</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:support@validtheme.com">support@validtheme.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                      <div class="pull-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                      <div class="pull-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
@endsection
