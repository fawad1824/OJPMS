@extends('layouts.admin')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">


            <div class="row p-2 mb-4">
                <div class="col-lg-10"> <!-- Adjust the column width as needed -->
                    <h4>Jobs Dashboard</h4> <!-- Content aligned to the left -->
                </div>
                <div class="col-lg-2 text-end"> <!-- Adjust the column width as needed -->
                    <a href="/create-admin-jobs" class="btn btn-primary">Add new Jobs</a>
                    <!-- Content aligned to the right -->
                </div>
            </div>



            <div class="row m-2">
                <div class="col-lg-12">
                    <table id="myDataTable" class="display">
                        <thead>
                            <tr>
                                <th>Job title</th>
                                <th>Location</th>
                                <th>Job Type</th>
                                <th>Vacancy</th>
                                <th>Salary</th>
                                <th>Experience</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->jobtype }}</td>
                                    <td>{{ $item->vacancy }}</td>
                                    <td>{{ $item->salary }}</td>
                                    <td>{{ $item->experience }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>
                                        <a href="/edit-admin-jobs/{{ $item->id }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="/delete-admin-jobs/{{ $item->id }}" class="btn btn-danger btn-sm"
                                            onclick="confirmDelete()">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
        });

        function confirmDelete() {
            if (confirm('Are you sure you want to delete?')) {
                window.location.href = "/admin-jobs";
            } else {
                event.preventDefault();

            }
        }
    </script>
@endsection
