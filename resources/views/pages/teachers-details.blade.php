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

@endsection