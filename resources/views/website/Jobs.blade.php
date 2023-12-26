@extends('layouts.web')
@section('content')
    <!-- Start home -->
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Jobs</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Find Your Jobs</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll
                            quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-job" role="tabpanel"
                            aria-labelledby="recent-job-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach ($jobs as $item)
                                        <div
                                            class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                            <div class="lable text-center pt-2 pb-2">
                                                <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="p-4">
                                                <div class="row align-items-center">
                                                    <div class="col-md-2">
                                                        <div class="mo-mb-2">
                                                            <img src="images/featured-job/img-1.png" alt=""
                                                                class="img-fluid mx-auto d-block">
                                                        </div>
                                                    </div>
                                                    @php
                                                        $companyName = DB::table('company')
                                                            ->where('id', $item->companyid)
                                                            ->first();
                                                    @endphp
                                                    <div class="col-md-3">
                                                        <div>
                                                            <h5 class="f-18"><a href="/jobs/{{ $item->id }}"
                                                                    class="text-dark">{{ $item->title }}</a></h5>
                                                            <p class="text-muted mb-0">{{ $companyName->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div>
                                                            <p class="text-muted mb-0"><i
                                                                    class="mdi mdi-map-marker text-primary mr-2"></i>{{ $companyName->location }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div>
                                                            <p class="text-muted mb-0 mo-mb-2"><span
                                                                    class="text-primary"></span>{{ $item->salary }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div>
                                                            <p class="text-muted mb-0">
                                                                {{ $item->jobtype }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 bg-light">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div>
                                                            <p class="text-muted mb-0 mo-mb-2"><span
                                                                    class="text-dark">Experience :</span>
                                                                {{ $item->experience }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div>
                                                            <a href="/jobs/{{ $item->id }}" class="text-primary">Apply
                                                                Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end containar -->
    </section>
    <!-- all jobs end -->
@endsection
