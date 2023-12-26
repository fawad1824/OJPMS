@extends('layouts.admin')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">


            <div class="row">
                <div class="col-lg-12">
                    <h4>Edit new Jobs</h4>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>



            <div class="row m-2">
                <div class="col-lg-12">

                    <form action="/add-admin-jobs" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" value="{{ $jobs->title }}" name="title" class="form-control">
                            <input type="text" hidden value="{{ $jobs->id }}" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Job Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $jobs->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Qualification</label>
                            <textarea name="skills" id="skills" class="form-control" cols="30" rows="10">{{ $jobs->skills }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Primary Responsibilities</label>
                            <textarea name="education" id="education" class="form-control" cols="30" rows="10">{{ $jobs->education }}<</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" value="{{ $jobs->location }}" name="location" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Experience</label>
                            <input type="text" name="experience" value="{{ $jobs->experience }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Vacancy</label>
                            <input type="text" value="{{ $jobs->vacancy }}" name="vancy" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Job Type</label>
                            <select name="jobtype" id="" class="form-control">
                                <option value="Part Time">Part Time</option>
                                <option value="Full Time">Full Time</option>
                                <option value="OnSite">OnSite</option>
                                <option value="Remote">Remote</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" value="{{ $jobs->salary }}" name="salary" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Job</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
