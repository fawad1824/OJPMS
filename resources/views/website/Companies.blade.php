@extends('layouts.web')

@section('content')
    <style>
        img.mx-auto.d-block.shadow.border.rounded-circle {
            height: 176px;
            width: 183px;
        }
    </style>
    <!-- Start home -->
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Employers List</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Employers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <section class="section">


        <div class="container">

            <div class="row">


                <div class="col-lg-12 col-md-8">
                    <div class="row">
                        @foreach ($mainCompanies as $item)
                            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                <div class="employers-list position-relative pb-3 pt-3 pl-2 pr-2 border rounded">
                                    <img src="{{ '/' . $item->image }}" alt=""
                                        class="mx-auto d-block shadow border rounded-circle" height="90">
                                    <div class="grid-list-desc text-center mt-3">
                                        <h5 class="mb-2"><a href="#" class="text-dark name">{{ $item->name }}</a>
                                        </h5>
                                        <p class="text-muted mb-0">{{ $item->location }}</p>
                                        <p class="text-muted mb-0"><i
                                                class="mdi mdi-map-marker mr-2"></i>{{ $item->address }}</p>

                                    </div>
                                    <div class="apply-button text-center mt-3">
                                        <a href="/jobs/{{ $item->id }}" class="btn btn-primary btn-sm">View Jobs</a>
                                    </div>
                                    <div class="fav-collection fav-icon">
                                        <i class="mdi mdi-heart" title="Collect Now"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
