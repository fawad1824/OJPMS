@extends('layouts.web')
@section('content')
    <style>
        :root {
            --background-image-url: url('http://127.0.0.1:8000/website/assets/img/hero/h1_hero.jpg');
            --background-image-url2: url('http://127.0.0.1:8000/website/assets/img/gallery/cv_bg.jpg');
        }

        .element-with-background {
            /* Use the CSS variable as the background */
            background-image: var(--background-image-url);
            /* Other styling */
            width: 100%;
            height: 300px;
        }

        .element-with-background2 {
            /* Use the CSS variable as the background */
            background-image: var(--background-image-url2);
            /* Other styling */
            width: 100%;
        }
    </style>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center element-with-background">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Search Services</label>
                                    <input type="text" class="form-control" placeholder="Job Tittle or keyword">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Select Country</label>
                                    <select name="select" class="form-control">
                                        <option value="">Location BD</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="">Select State</label>
                                    <select name="select" class="form-control">
                                        <option value="">Location BD</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="">Select City</label>
                                    <select name="select" class="form-control">
                                        <option value="">Location BD</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group mt-4">
                                    <div class="search-form">
                                        <a class="btn btn-primary btn-sm" href="#">Find job</a>
                                    </div>
                                </div>
                            </div>
                            <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Browse Top Categories </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Design & Creative</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-cms"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Design & Development</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-report"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Sales & Marketing</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-app"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Mobile Application</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-helmet"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Construction</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-high-tech"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Information Technology</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-real-estate"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Real Estate</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-content"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Content Writer</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="job_listing.html" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Online CV Area Start -->
    <div class="online-cv cv-bg section-overly pt-90 pb-120 element-with-background2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cv-caption text-center">
                        <p class="pera1">FEATURED TOURS Packages</p>
                        <p class="pera2"> Make a Difference with Your Online Resume!</p>
                        <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Online CV Area End-->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Recent Job</span>
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.html"><img src="{{ asset('website/assets/img/icon/job-list1.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.html">
                                    <h4>Digital Marketer</h4>
                                </a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li>$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.html">Full Time</a>
                            <span>7 hours ago</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2 style="color: black"> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Search a job</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Apply for job</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Get your job</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->

    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>What we are doing</span>
                            <h2>24k Talented people are getting Jobs</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum
                                dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit
                                cillum.</p>
                            <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu
                                quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt
                                mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                            <a href="about.html" class="btn post-btn">Post a job</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="{{ asset('website/assets/img/service/support-img.jpg') }}" alt="">
                        <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>1994</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Blog Area Start -->
    <div class="home-blog-area blog-h-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Companies</span>
                        <h2>Top Hiring Company Jobs</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('website/assets/img/blog/home-blog1.jpg') }}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Seven Koncept</p>
                                <h3><a href="single-blog.html">IOT Company</a>
                                </h3>
                                <a href="#" class="more-btn">View Profile »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('website/assets/img/blog/home-blog2.jpg') }}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>Keep Concpet</p>
                                <h3><a href="single-blog.html">Digital Marketing company</a>
                                </h3>
                                <a href="#" class="more-btn">View Profile »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection
