@extends('layouts.main')

@push('title')

    <title>Home - Lawyers</title>

@endpush

@section('slider')
    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>High Quality Law <br>
                                    Advice and Support</h3>
                                <p>Leading Polish Lawyer in your city</p>
                                <a href="#" class="boxed-btn4 ">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
@endsection

@section('content')
    <!-- about_area _start  -->
    <div class="about_area">
        <div class="opacity_icon d-none d-lg-block">
            <i class="flaticon-balance"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <h3>Finest And Strongest Law <br>
                            Firm Win The World</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <div class="image_hover">
                                <div class="hover_inner">
                                    <h2>93%</h2>
                                    <span>Success Case</span>
                                </div>
                            </div>
                        </div>
                        <h3>About Lawyer Justice</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="total_cases">
                            <div class="single_cases">
                                <h4>879</h4>
                                <p>Total Cases</p>
                            </div>
                            <div class="single_cases">
                                <h4>787</h4>
                                <p>Case Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area _end -->

    <!-- practice_area_start -->
    <div class="practice_area practice_area2">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                @foreach ($case as $cases)
                    <div class="col-xl-3 col-md-6">
                        <div class="single_practice">
                            <div class="practice_image">
                                <img src="img/practice/1.png" alt="">
                            </div>
                            <div class="practice_hover text-center">
                                <div class="hover_inner">
                                    <i class="flaticon-case"></i>
                                    <h3>{{$cases->case_title}}</h3>
                                    <p>{{$cases->case_desc}}</p>
                                    <a class="lern_more" data-toggle="modal" data-target="#exampleModal"
                                        style="cursor: pointer">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$cases->case_title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{$cases->case_details}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- practice_area_end -->

    <!-- testmonial_area_start  -->
    <div class="testmonial_area testmonial_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority
                                have suffered alteration in some form, by injected humour, or <br> randomised words
                                which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority
                                have suffered alteration in some form, by injected humour, or <br> randomised words
                                which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority
                                have suffered alteration in some form, by injected humour, or <br> randomised words
                                which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end  -->

    <!-- our_loyers-start  -->
    <div class="our_loyers">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <h3>Our Lawyers</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered
                            alteration in some.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($lawyers as $data)
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_loyers text-center">
                            <div class="thumb">
                                <img src="{{ $data->lawyer_image }}"  style="border-radius: 50%" height="250px" width="100px" alt="">
                            </div>
                            <h3>{{ $data->lawyer_name }}</h3>
                            <span>{{ $data->lawyer_category }}</span>
                            <div class="social_links">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- our_loyers-end  -->
@endsection
