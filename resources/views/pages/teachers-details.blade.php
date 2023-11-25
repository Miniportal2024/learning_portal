@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/17.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Advisor Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Advisor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Details 
    ============================================= -->
    <div class="adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="assets/img/advisor/2.jpg" alt="Thumb">
                    <div class="desc">
                        <h4>Professor Sayed Kunal</h4>
                        <span>Senior Programmer</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-skype"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                    Courses
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Quick Contact
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting. earnestly advantage estimable extensive. Five settle education him departure any arranging one prevailed. Their end whole migh
                                    </p>
                                    <p>
                                        Affixed civilly moments promise explain fertile in. Assurance advantage belonging happiness departure so of. Now improving and one sincerity intention allowance commanded not. Oh an am frankness be necessary earnestly advantage estimable extensive. Five settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <ul>
                                        <li>
                                            Contact <span>+123 456 7890</span>
                                        </li>
                                        <li>
                                            Email <span>info@teacherdomain.com</span>
                                        </li>
                                        <li>
                                            Address <span>California, TX 70240 </span>
                                        </li>
                                        <li>
                                            Total Course Taken <span>65</span>
                                        </li>
                                        <li>
                                            Rating <span>4.7</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="info title">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01.</td>
                                                    <td><a href="#">Basic Web Development</a></td>
                                                    <td>Pending</td>
                                                    <td>$23.00</td>
                                                    <td>4.5</td>
                                                </tr>
                                                <tr>
                                                    <td>02.</td>
                                                    <td><a href="#">Software Engineering</a></td>
                                                    <td>Published</td>
                                                    <td>$55.00</td>
                                                    <td>4.5</td>
                                                </tr>
                                                <tr>
                                                    <td>03.</td>
                                                    <td><a href="#">Introduction of machine</a></td>
                                                    <td>Pending</td>
                                                    <td>$44.00</td>
                                                    <td>4.5</td>
                                                </tr>
                                                <tr>
                                                    <td>04.</td>
                                                    <td><a href="#">Hidden potential</a></td>
                                                    <td>Published</td>
                                                    <td>$54.00</td>
                                                    <td>5.0</td>
                                                </tr>
                                                <tr>
                                                    <td>05.</td>
                                                    <td><a href="#">Introduction of PHP</a></td>
                                                    <td>Published</td>
                                                    <td>$32.00</td>
                                                    <td>4.9</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="info title">
                                    <p>
                                        Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. Expect relied do we genius is. On as around spirit of hearts genius. Is raptures daughter branched laughter peculiar in settling. 
                                    </p>
                                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group comments">
                                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Me About Courses *"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <button type="submit" name="submit" id="submit">
                                                    Send Message <i class="fa fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Alert Message -->
                                        <div class="col-md-12 alert-notification">
                                            <div id="message" class="alert-msg"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor Details -->


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