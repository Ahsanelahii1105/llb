@extends('admin.layouts.master')

@section('content')

<style>
    /* Custom form styles */
    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        margin: 20px auto; /* Center the form container */
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin: 10px 0 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box;
    }

    textarea {
        resize: none;
    }

    button {
        margin-top: 20px;
        padding: 10px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #218838;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .form-container {
            padding: 15px;
            width: 90%;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            font-size: 14px;
            padding: 8px;
        }

        button {
            padding: 8px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .form-container {
            padding: 10px;
            width: 95%;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            font-size: 13px;
            padding: 7px;
        }

        button {
            padding: 7px;
            font-size: 13px;
        }
    }
</style>



<div class="container">
    <div class="form-container">
        <h2>Personal Information Form</h2>
        <form action="{{ url('/admin/caseInsert')}}" method="POST">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @csrf
            <label for="name">Case Title</label>
            <input type="text" name="title" placeholder="Enter your Case Title" required>

            <label for="email">Case Description</label>
            <input type="text" name="desc" placeholder="Enter your Short Description" required>

            <label for="phone">Details about Case</label>
            <textarea name="details" placeholder="Enter your Case Description" required></textarea>
            {{-- <input type="text" name="details" placeholder="Enter your Case Description" required> --}}

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
