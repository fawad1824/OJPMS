@extends('layouts.admin')

@section('content')
    <!-- CREATE RESUME START -->
    <div class="app-main__outer">
        <div class="app-main__inner">
            <form action="/add-create-cv" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-dark">General Information :</h5>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="custom-form p-4 border rounded">

                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">First Name<span class="text-danger">*</span> :</label>
                                        <input id="first-name" type="text" name="firstname"
                                            value="{{ $profile->firstname ?? '' }}" name="name"
                                            class="form-control resume" placeholder="First Name :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Middle Name<span class="text-danger">*</span> :</label>
                                        <input id="middle-name" type="text" name="middlename"
                                            value="{{ $profile->middlename ?? '' }}" class="form-control resume"
                                            placeholder="Middle Name :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Surname<span class="text-danger">*</span> :</label>
                                        <input id="surname-name" type="text" name="surename"
                                            value="{{ $profile->surename ?? '' }}" class="form-control resume"
                                            placeholder="Surname :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Date Of Birth<span class="text-danger">*</span> :</label>
                                        <input id="date-of-birth" type="text" name="dob"
                                            value="{{ $profile->dob ?? '' }}" class="form-control resume"
                                            placeholder="13-02-1999">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Sex<span class="text-danger">*</span> :</label>
                                        <div class="form-button">
                                            <select class="form-control" name="gender">
                                                <option data-display="sex">Sex</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Marital Status</label>
                                        <div class="form-button">
                                            <select class="form-control" name="martial">
                                                <option data-display="Status">Status</option>
                                                <option value="1">Unmarried</option>
                                                <option value="2">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <h5 class="text-dark">Contact Information :</h5>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="custom-form p-4 border rounded">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label class="text-muted">City</label>
                                            <div class="form-button">
                                                <input type="text" name="city" value="{{ $profile->city ?? '' }}"
                                                    class="form-control" name="city">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label class="text-muted">State</label>
                                            <div class="form-button">
                                                <input type="text" name="state" value="{{ $profile->state ?? '' }}"
                                                    class="form-control" name="state">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Country</label>
                                            <div class="form-button">
                                                <input type="text" name="country" value="{{ $profile->country ?? '' }}"
                                                    class="form-control" name="country">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Phone</label>
                                            <input id="phone" type="number" name="phone"
                                                value="{{ $profile->phone ?? '' }}" class="form-control resume"
                                                placeholder="Phone No. :">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label class="text-muted">E-mail</label>
                                            <input id="e-mail" type="email" name="email"
                                                value="{{ $profile->email ?? '' }}" class="form-control resume"
                                                placeholder="Email ID :">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Website</label>
                                            <input id="website" type="url" name="website"
                                                value="{{ $profile->website ?? '' }}" class="form-control resume"
                                                placeholder="www.example.com">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label>Address :</label>
                                            <textarea id="address" rows="4" name="address" class="form-control resume" placeholder="">
                                            {{ $profile->address ?? '' }} </textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-dark mt-5">Education Details :</h5>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="custom-form p-4 border rounded">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Graduation</label>
                                            <input id="graduation" name="graduation"
                                                value="{{ $profile->graduation ?? '' }}" type="text"
                                                class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">University/College</label>
                                            <input id="university/college"name="university"
                                                value="{{ $profile->university ?? '' }}"type="text"
                                                class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Degree/Certification</label>
                                            <input id="degree/certification" name="degree"
                                                value="{{ $profile->degree ?? '' }}" type="text"
                                                class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label class="text-muted">Level</label>
                                                    <div class="form-button">
                                                        <select class="form-control" name="level">
                                                            <option data-display="Select">Select</option>
                                                            <option value="1">Level-1</option>
                                                            <option value="2">Level-2</option>
                                                            <option value="3">Level-3</option>
                                                            <option value="4">Level-4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label class="text-muted">Course Title</label>
                                                    <input id="course-title" type="text" name="course"
                                                        value="{{ $profile->course ?? '' }}" class="form-control resume"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label>Additional Information :</label>
                                            <textarea id="addition-information" rows="4" name="info" class="form-control resume" placeholder="">
                                            {{ $profile->info ?? '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-5">
                        <h5 class="text-dark">Work Experience :</h5>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="custom-form p-4 border rounded">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Company Name</label>
                                            <input id="company-name" name="company"
                                                value="{{ $profile->company ?? '' }}" type="text"
                                                class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Job Position</label>
                                            <input id="job-position" type="text" name="position"
                                                value="{{ $profile->position ?? '' }}" class="form-control resume"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Location</label>
                                            <div class="form-button">
                                                <input type="text" name="locationc"
                                                    value="{{ $profile->locationc ?? '' }}" class="form-control"
                                                    name="location">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label class="text-muted">Date From</label>
                                                    <input id="date-from" type="text" name="from"
                                                        value="{{ $profile->from ?? '' }}" class="form-control resume"
                                                        placeholder="01-Jan-2018">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label class="text-muted">Date To</label>
                                                    <input id="date-to" type="text" name="to"
                                                        value="{{ $profile->to ?? '' }}" class="form-control resume"
                                                        placeholder="31-March-2019">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label>Additional Information :</label>
                                            <textarea id="addition-information-1" name="infocompany" rows="4" class="form-control resume" placeholder="">
                                            {{ $profile->infocompany ?? '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 mt-5">
                        <h5 class="text-dark">Skills :</h5>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="custom-form p-4 border rounded">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Skills</label>
                                            <input id="skills" name="skills" value="{{ $profile->skills ?? '' }}"
                                                type="text" class="form-control resume"
                                                placeholder="HTML, CSS, PHP, javascript, ...">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Submit Resume</button>
                </div>
            </form>
        </div>
    </div>
    <!-- CREATE RESUME END -->
@endsection
