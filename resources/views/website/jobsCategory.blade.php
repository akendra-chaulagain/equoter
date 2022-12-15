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
                        <a href="#"> {{ $job_parent->caption }}</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="job-detaile">
            <p>{!! $slug_detail->short_content ?? '' !!}</p>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12">
                    <div class="job-detaile-area">

                       
                        <div class="row">
      @foreach ($all_job_childs as $home_job_cat_item)
                            <div class=" col-lg-4 col-md-6 col-12">
                                <div class="card">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <img src="{{ $home_job_cat_item->banner_image }}"
                                                class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $home_job_cat_item->caption }}</h5>
                                                <p class="card-text">
                                                    {{ Str::limit($home_job_cat_item->short_content ?? '', 50) }}
                                                </p>
                                                <p class="card-text1"><small class="text-muted"><a
                                                            href="/all_jobs/{{ $home_job_cat_item->nav_name }}">READ
                                                            MORE
                                                            >></a></small></p>
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
@endsection
