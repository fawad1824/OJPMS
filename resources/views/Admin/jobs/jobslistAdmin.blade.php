@extends('layouts.admin')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">


            <div class="row p-2 mb-4">
                <div class="col-lg-10"> <!-- Adjust the column width as needed -->
                    <h4>Jobs List</h4> <!-- Content aligned to the left -->
                </div>

            </div>
            <style>
                .modal {
                    z-index: 1050;
                    position: fixed;
                    /* or 'absolute' depending on your layout */

                    /* Adjust this value as needed */
                }

                .modal-backdrop.show {
                    opacity: 0;
                    display: none;
                }

                .modal-content {
                    margin-top: 107px;
                }
            </style>



            <div class="row m-2">
                <div class="col-lg-12">
                    <table id="myDataTable" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Location</th>
                                <th>Salary</th>
                                <th>Experience</th>
                                <th>status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($company as $item)
                                @php
                                    $companyname = DB::table('company')
                                        ->where('id', $item->companyid)
                                        ->first();
                                    $Jobname = DB::table('jobs')
                                        ->where('id', $item->jobid)
                                        ->first();
                                    $users = DB::table('users')
                                        ->where('id', $item->userid)
                                        ->first();
                                @endphp
                                <tr>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $Jobname->title }}</td>

                                    <td>{{ $Jobname->jobtype }}</td>
                                    <td>{{ $Jobname->location }}</td>
                                    <td>{{ $Jobname->salary }}</td>
                                    <td>{{ $Jobname->experience }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $Jobname->date }}</td>
                                    <td class="d-flex mt-3">

                                        <a href="/delete-apply-jobs/{{ $item->id }}" class="btn btn-danger btn-sm"
                                            onclick="confirmDelete()">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>

            </div>



        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myDataTable').DataTable();
            $('.close').on('click', function() {
                $('#myModal').modal('hide');
                $('.userid').val("")
                $('.jobid').val("")
            });
        });

        function confirmDelete() {
            if (confirm('Are you sure you want to delete?')) {
                window.location.href = "/admin-jobs";
            } else {
                event.preventDefault();

            }
        }

        function acceptOrReject(item) {
            $('#myModal').modal('show');
            $('.userid').val(item.userid)
            $('.jobid').val(item.jobid)
        }
    </script>
@endsection
