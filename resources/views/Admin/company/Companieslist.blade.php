@extends('layouts.admin')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">

            <!-- In your Blade view -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


            <div class="row m-2">
                <div class="col-lg-12">
                    <h4>Company Profile</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">

                        <table id="users-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Location</th>
                                    <th>Country</th>
                                    <th>Employee</th>
                                    <th>State</th>
                                    <th>city</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($company as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->empoye }}</td>
                                        <td>{{ $item->state }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                @endforeach
                                <!-- Table body will be populated dynamically -->
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#users-table').DataTable();
        });
    </script>
@endsection
