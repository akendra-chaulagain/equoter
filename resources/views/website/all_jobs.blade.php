@php
    $job_parent = App\Models\Navigation::find(2471);
    $about_parent = App\Models\Navigation::find(2259)->childs;
    
@endphp


@extends('layouts.master')
@push('title')
    {{ $slug_detail->caption ?? 'All Jobs' }}
@endpush

@section('content')
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
                        <a href="#"> {{ $slug_detail->caption }}</a>
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
                                @foreach ($about_parent as $about_parent_item)
                                    <li class="sidebar-link">
                                        <a class=""
                                            href="/{{ $job_parent->nav_name }}/{{ $about_parent_item->nav_name }}">
                                            {{ $about_parent_item->caption }}
                                        </a>
                                    </li>
                                @endforeach
                                <li class="sidebar-link">
                                    <a class="" href="/">
                                        Contact
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
