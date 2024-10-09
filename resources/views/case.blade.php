@extends('layouts.main')

@section('slider')
    <!-- bradcam_area_start  -->
    <div class="bradcam_area">
        <div class="bradcam_inner bradcam_bg d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Finest And Strongest Law <br>
                                Firm Win The World</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
@endsection


@section('content')
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

    <!-- about_area _start  -->
    {{-- <div class="about_area">
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
    </div> --}}
    <!-- about_area _end -->
@endsection
