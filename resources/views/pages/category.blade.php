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
                    <h1>Categories</h1>
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
                        @foreach($categories as $category)
                            <div class="item">
                                <div class="thumb">
                                    <a href="category-details">
                                        <img src="{{asset('storage/'.$category->img)}}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="author-info">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('storage/'.$category->img)}}" alt="Thumb"></a>
                                        </div>
                                        <div class="others">
                                            <a href="#">{{$category->instructor}}</a>
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
                                    <h4 style="text-align: center;">{{$category->name}}</h4>
                                    <div class="bottom-info" style="display: flex; flex-direction: column; align-items: center;">
                                        <a href="/courses/{{$category->id}}">More Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

@endsection
