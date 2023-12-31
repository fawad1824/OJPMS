@extends('layouts.admin')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">


            <div class="row p-2 mb-4">
                <div class="col-lg-10"> <!-- Adjust the column width as needed -->
                    <h4>Apply Jobs</h4> <!-- Content aligned to the left -->
                </div>

            </div>



            <div class="row m-2">
                <div class="col-lg-12">
                    <table id="myDataTable" class="display">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Job title</th>
                                <th>Location</th>
                                <th>Job Type</th>
                                <th>Vacancy</th>
                                <th>Salary</th>
                                <th>Experience</th>
                                <th>Date</th>
                                <th>Status</th>
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
                                    $jobHire = DB::table('applyjobs')
                                        ->where('userid', Auth::user()->id)
                                        ->where('status', 'Hire')
                                        ->first();
                                    $jobPe = DB::table('applyjobs')
                                        ->where('userid', Auth::user()->id)
                                        ->where('status', 'pending')
                                        ->first();
                                @endphp
                                <tr>
                                    <td>{{ $companyname->name }}</td>
                                    <td>{{ $Jobname->title }}</td>
                                    <td>{{ $Jobname->location }}</td>
                                    <td>{{ $Jobname->jobtype }}</td>
                                    <td>{{ $Jobname->vacancy }}</td>
                                    <td>{{ $Jobname->salary }}</td>
                                    <td>{{ $Jobname->experience }}</td>
                                    <td>{{ $Jobname->date }}</td>
                                    <td>
                                        @if ($jobHire)
                                            You are Hire
                                        @elseif($jobPe)
                                            Peding
                                        @else
                                            Reject
                                        @endif
                                    </td>
                                    <td>
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
