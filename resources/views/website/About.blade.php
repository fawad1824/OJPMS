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
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>About us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Hero Area End -->
            <!-- Support Company Start-->
            <div class="support-company-area fix section-padding2">
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
                                    <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                                    <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
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


@endsection
