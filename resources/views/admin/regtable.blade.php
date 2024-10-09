@extends('admin.layouts.master')

@section('content')
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12-col-sm-12">

                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reg as $r)
                            <tr>
                                <td data-label="#">{{ $r->id }}</td>
                                <td data-label="Name">{{ $r->name }}</td>
                                <td data-label="Email">{{ $r->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
