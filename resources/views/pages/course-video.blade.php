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
                                <video style="width: 100%" controls no-download src="{{ asset('storage/video.mp4') }}"></video>
                            </div>
                            <!-- End Thumbnail -->
                            <br>
                            <div class="video-title">
                                <h4  style="font-weight: 600">Java Programming Masterclass with professional author</h4>
                            </div>
                            <!-- Course Meta -->
                            <div class="course-meta" style="margin-top: 20px">
                                <div class="item author">
                                    <div class="thumb">
                                        <a href="#"><img alt="Thumb" src="assets/img/team/8.jpg"></a>
                                    </div>
                                    <div class="desc">
                                        <h4>Author</h4>
                                        <a href="#">Munil Druva</a>
                                    </div>
                                </div>
                                <div class="item category">
                                    <h4>Category</h4>
                                    <a href="#">Science</a>
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
                                        <h4>List Of Courses</h4>
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                                                Java Programming
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Introduction of java</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 1 hours 30 min</span>
                                                                       <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-file"></i>
                                                                        <span>Lecture 1.2</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Basic development</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 3 hours 15 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                                                PHP Programmig 
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Introduction</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 1 hours 30 min</span>
                                                                       <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-file"></i>
                                                                        <span>Lecture 1.2</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Benifits of function</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 2 hours 12 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
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
