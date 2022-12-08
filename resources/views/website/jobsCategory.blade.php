@extends('layouts.master')

@push('title')
    {{ $slug_detail->caption ?? 'All Jobs' }}
@endpush

@section('content')
    {{-- <section>
        <div class="relative bg-gray-600 bg-no-repeat bg-center bg-cover bg-blend-overlay"
            style="
          background-image: url('https://images.pexels.com/photos/37646/new-york-skyline-new-york-city-city-37646.jpeg?cs=srgb&dl=pexels-pixabay-37646.jpg&fm=jpg');
        ">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-black-900" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-28 px-4 sm:py-28 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-3xl lg:text-4xl">
                    {{ $slug_detail->caption ?? 'All Jobs' }}
                </h1>
            </div>
        </div>
    </section>

    <section>
        <div class="px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <h2
                    class="max-w-lg mb-6 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <span class="relative">{{ $slug_detail->caption ?? '' }}</span>
                    </span>

                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    {!! $slug_detail->short_content ?? '' !!}

                </p>
            </div>


            <div class="relative px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
                <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($jobs as $job)
                        <div
                            class="flex flex-col justify-between overflow-hidden transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                            <div class="p-5 cursor-pointer">
                                <div class="job-detaile-item">
                                    <h1>{{ $job->caption }}</h1>
                                    <h5>Company : {{ $job->getJob->company_name ?? 'null' }}</h5>
                                    <h5>Location : {{ $job->getJob->counrty ?? 'null' }}i</h5>

                                </div>
                                <div class="job-detaile-item">
                                    <h5>Salary : {{ $job->getJob->salary ?? '' }}</h5>
                                    
                                    <button> <a href="/jobapply/{{ $job->nav_name }}">Apply Now</a></button>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>










        </div>
    </section> --}}


    <div class="contact">
        <div class="container">
            <h1 class="contact-tittle3 text-center text-capitalize">{{ $slug_detail->caption ?? 'All Jobs' }}</h1>
            <div class="contact-area text-center">
                <ul>
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="">/</a>
                    </li>
                    <li>
                        <a href="#"> {{ $slug_detail->caption ?? 'All Jobs' }}</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="job-detaile">
            <p>{!! $slug_detail->short_content ?? '' !!}</p>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-12">
                    <div class="job-detaile-area">
                        @foreach ($jobs as $job)
                            <div class="job-box">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-12">
                                        <div class="job-detaile-item">
                                            <h5>{{ $job->caption }}</h5>
                                            <h5>Company:{{ $job->getJob->company_name }}</h5>
                                            <h5>Country: {{ $job->getJob->country }}</h5>
                                            <h5>Business Services</h5>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-12">
                                        <div class="job-detaile-item">
                                            <h5>Salary: {{ $job->getJob->salary }}</h5>
                                            <h5>Contract : {{ $job->getJob->contract_time }}</h5>
                                            <button> <a href="/jobapply/{{ $job->nav_name }}">Apply NOW</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12">
                    <div class="layout">
                        <h5 class="text-left">QUICK-LINK</h5>
                        <nav class="sidebar">
                            <ul class="sidebar-item">
                                <li class="sidebar-link">
                                    <a class="" href="index.html">
                                        HOME
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a class="" href="about-us.html">
                                        ABOUT
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a class="" href="documentation.html">
                                        DOCUMENTATION
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a class="" href="Gallery.html">
                                        GALLERY
                                    </a>
                                </li>
                                <li class="sidebar-link">
                                    <a class="" href="contact.html">
                                        CONTACT
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
