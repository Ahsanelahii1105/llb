@extends('lawyers.layout.main')

@section('lawyercontent')
    <style>
        /* Basic table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

        /* Hover effect */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive table */
        @media (max-width: 768px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            th {
                text-align: right;
                padding-right: 10px;
            }

            td {
                text-align: left;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                white-space: nowrap;
            }

            /* Hide table headers */
            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
            }
        }
    </style>
    </head>

    <body>

        <h2 class="mt-5">Responsive HTML Table</h2>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Appointment Date</th>
                    <th>Set Appointment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $client)
                    <tr>
                        <td data-label="#">{{ $client->id }}</td>
                        <td data-label="Name">{{ $client->appointment_name }}</td>
                        <td data-label="Email">{{ $client->appointment_email }}</td>
                        <td data-label="Phone">{{ $client->appointment_phone }}</td>
                        <td data-label="Message">{{ $client->appointment_message }}</td>
                        <td data-label="Status">{{ $client->status }}</td>
                        <td data-label="Appointment Date and Time">
                            {{ \Carbon\Carbon::parse($client->appointment_date)->format('Y-m-d H:i') }}
                        </td>
                        <td data-label="Set Appointment">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Appointment
                            </button>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Set Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('setAppointment', $client->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="appointment_date">Select Date and Time</label>
                                <input type="datetime-local" name="appointment_date" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
