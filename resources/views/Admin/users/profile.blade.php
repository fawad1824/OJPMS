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
                    <h4> Profile</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/addmin-profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-5">
                            <label for="">Name</label>
                            <input value="{{ Auth::user()->name }}" type="text" name="name" class="form-control">
                            <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input value="{{ Auth::user()->email }}" type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input value="{{ Auth::user()->phone }}" type="tel" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Website</label>
                            <input value="{{ Auth::user()->website }}" type="text" name="website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="companyInfo">Bio</label>
                            <textarea id="companyInfo" name="bio" cols="30" rows="10">{{ Auth::user()->bio }} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="shortdesc">Short Description</label>
                            <textarea id="shortdesc" name="shortdesc" cols="30" rows="10">{{ Auth::user()->shortdesc }} </textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Country</label>
                            <input value="{{ Auth::user()->country }}" type="text" name="country" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">State</label>
                            <input value="{{ Auth::user()->state }}" type="text" name="state" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input value="{{ Auth::user()->address }}" type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Profile Image</label>
                            <input type="file" name="image" class="form-control">
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
