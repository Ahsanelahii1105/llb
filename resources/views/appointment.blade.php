@extends('layouts.main')

@section('content')
    <div class="appointment_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="img/appointment/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some.</p>
                        <form action="/appointment" method="POST">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="email" placeholder="Your Email" name="email">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Phone no." name="phone">
                                </div>
                                <div class="col-xl-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <div class="appoinment_button">
                                        <button class="boxed-btn5 " type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
