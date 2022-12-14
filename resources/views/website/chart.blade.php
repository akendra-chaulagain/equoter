@extends('layouts.master')
@push('title')
    {{ $slug_detail->caption }}
@endpush



@section('content')
    <div class="contact">
        <div class="container">
            <h1 class="contact-tittle3 text-center text-capitalize">{{ $slug_detail->caption }}</h1>
            <div class="contact-area text-center">
                <ul>
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="#">/</a>
                    </li>

                    <li>
                        <a href="#"> {{ $slug_detail->caption }}</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="container">
            <h1 class="about-tittle2 text-left">{!! $slug_detail->short_content !!}</h1>


            <div class="about-area">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="chart_image">
                            <img src="{{ $slug_detail->banner_image }}" alt="">
                        </div>

                    </div>

                </div>
            </div>




        </div>
    </section>
@endsection

<!-- End About Us -->
