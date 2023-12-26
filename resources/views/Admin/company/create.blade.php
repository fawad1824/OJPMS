@extends('layouts.admin')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">

            <style>
                /* Style for form group */
                .form-group {
                    margin-bottom: 20px;
                    /* Adjust as needed */
                }

                /* Style for label */
                label {
                    display: block;
                    /* Ensure label appears on its own line */
                    margin-bottom: 5px;
                    /* Adjust spacing between label and textarea */
                }

                /* Style for textarea */
                textarea {
                    width: 100%;
                    /* Full width of its container */
                    padding: 10px;
                    /* Adjust padding as needed */
                    font-size: 14px;
                    /* Adjust font size */
                    border: 1px solid #ccc;
                    /* Border style */
                    border-radius: 5px;
                    /* Rounded corners */
                    resize: vertical;
                    /* Allow vertical resizing */
                }

                /* Style for textarea when focused */
                textarea:focus {
                    border-color: #007bff;
                    /* Change border color when focused */
                    outline: none;
                    /* Remove default focus outline */
                    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
                    /* Add a subtle shadow when focused */
                }
            </style>


            <div class="row m-2">
                <div class="col-lg-12">
                    <h4>Company Profile</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/add-company-profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-5">
                            <label for="">Name</label>
                            <input value="{{ $company->name }}" type="text" name="name" required class="form-control">
                            <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input value="{{ $company->email }}" type="email" name="email" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="companyInfo">Company info</label>
                            <textarea id="companyInfo" name="companyinfo" required cols="30" rows="10">{{ $company->companyinfo }} </textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input value="{{ $company->address }}" type="text" name="address" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Website</label>
                            <input value="{{ $company->website }}" type="text" name="website" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <input value="{{ $company->location }}" type="text" name="location" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Country</label>
                            <input value="{{ $company->country }}" type="text" name="country" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">State</label>
                            <input type="text" value="{{ $company->state }}" name="state" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" value="{{ $company->city }}" name="city" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">logo</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Employees</label>
                            <input value="{{ $company->employe }}" type="number" name="employee" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="companyInfo" name="desc" required cols="30" rows="10">{{ $company->desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Updated</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
