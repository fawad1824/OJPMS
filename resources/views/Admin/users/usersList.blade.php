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

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="role-filter">Filter by Role:</label>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-control" id="role-filter">
                                    <option value="">All</option>
                                    <option value="admin">Admin</option>
                                    <option value="job">Job Secket</option>
                                    <option value="vendor">Vendor</option>
                                </select>
                            </div>
                        </div>

                        <table id="users-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Bio</th>
                                    <th>Short Desc</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($company as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->bio }}</td>
                                        <td>{{ $item->shortdesc }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->state }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->role_id }}</td>
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
            var table = $('#users-table').DataTable();
            $('#role-filter').on('change', function() {
                var val = $(this).val();
                table.column(10).search(val ? '^' + val + '$' : '', true, false).draw();
            });
        });
    </script>
@endsection
