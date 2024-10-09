@extends('lawyers.layout.main')

@push('title')
    <title>Lawyer Insert Data - Lawyers</title>
@endpush

@section('lawyercontent')

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
        <form action="{{ url('/lawyers/insertlawyer')}}" method="POST" enctype="multipart/form-data">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @csrf
            <label for="name">Full Name</label>
            <input type="text" name="name" placeholder="Enter your full name" required>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" placeholder="Enter your phone number" required>

            <label for="address">Address</label>
            <textarea name="address" rows="3" placeholder="Enter your address" required></textarea>

            <label for="qualification">Qualification</label>
            <input type="text" name="qualification" placeholder="Enter your qualification" required>

            <label for="types">Categories</label>
            <select name="category">
                <option value="student">Student</option>
                <option value="employee">Employee</option>
                <option value="freelancer">Freelancer</option>
            </select>

            <label for="image">Choose Image</label>
            <input type="file" name="image" id="" class="form-control">

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
