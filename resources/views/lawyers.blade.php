@extends('layouts.main')

@push('title')
    <title>Lawyers - Lawyers</title>
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($lawyers as $data)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card" style="width: 18rem; border: none;">
                        <img src="{{ $data->lawyer_image }}" style="border-radius: 50%" height="250px" width="100px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->lawyer_name }}</h5>
                            <p class="card-text">{{ $data->lawyer_category }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
