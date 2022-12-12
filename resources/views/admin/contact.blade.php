@extends('layouts.master')

@push('title')
    Contact Us
@endpush
@section('content')
    <div class="contact">
        <div class="container">
            <h1 class="contact-tittle3 text-center">CONTACT US</h1>
            <div class="contact-area text-center">
                <ul>
                    <li>
                        <a href="index.html">HOME</a>
                    </li>
                    <li>
                        <a href="">/</a>
                    </li>
                    <li>
                        <a href="index.html">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <form class="row" action="{{ route('contactstore') }}" method="POST" autocomplete="on"
            enctype='multipart/form-data'>
            @csrf
            <div class="col-md-6">
                <div class="form-area">
                    <div class="row">
                        <div class="col-6">
                            <div class="contact-form">
                                <input type="name" name="name" class="form-control" id="inputName4"
                                    placeholder="Full Name">
                            </div>

                        </div>

                        <div class="col-6">
                            <div class="contact-form">
                                <input type="Phone" name="number" class="form-control" id="inputPhone"
                                    placeholder="Number *">
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="contact-form">
                                <input type="text" name="email" class="form-control" id="inputemail2"
                                    placeholder="Email">
                            </div>

                        </div>
                        <div class="col-12">
                            <textarea class="form-control"  rows="5" id="comment" name="message" placeholder="Comment"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-text-area ">
                    <h1>CONTACT INFO</h1>

                    <h6><span><i class="fa-solid fa-location-dot"></i></span>  {{ $global_setting->website_full_address }} {{ $global_setting->address_ne }}</h6>
                    <h6><span><i class="fa-solid fa-phone-volume"></i></span> {{ $global_setting->phone }}</h6>
                  
                    <h6><span><i class="fa-solid fa-envelope"></i></span> {{ $global_setting->site_email }}</h6>
                </div>

            </div>


        </form>

    </div>
   
{!! $global_setting->page_keyword !!}
@endsection
