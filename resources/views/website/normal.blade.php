@extends('layouts.master')
@push('title')
    {{ $normal->caption }}
@endpush



@section('content')
    <div class="contact">
        <div class="container">
            <h1 class="contact-tittle3 text-center text-capitalize">{{ $normal->caption }}</h1>
            <div class="contact-area text-center">
                <ul>
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="#">/</a>
                    </li>

                    <li>
                        <a href="#"> {{ $normal->caption }}</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="container">
            <h1 class="all_title_h2 text-left">{!! $normal->short_content !!}</h1>

            @if ($normal->banner_image)
                <div class="about-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="about-area-images">
                                <img src="{{ $normal->banner_image }}" alt="">
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="about-area-text">

                                <p>{!! $normal->long_content !!}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-12 col-md-12 col-12">

                    <p>{!! $normal->short_content !!}
                    </p>
                    <p>{!! $normal->long_content !!}
                    </p>


                </div>
            @endif




        </div>
    </section>
@endsection

<!-- End About Us -->
