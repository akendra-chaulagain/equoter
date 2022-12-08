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

                    <h6><span><i class="fa-solid fa-location-dot"></i></span> Gongabu, Kathmandu, Nepal</h6>
                    <h6><span><i class="fa-solid fa-phone-volume"></i></span> +977-1-4986469, +977-1-4986470</h6>
                    <h6><span><i class="fa-solid fa-fax"></i></span> +977-1-4986473</h6>
                    <h6><span><i class="fa-solid fa-envelope"></i></span> equator746@gmail.com</h6>
                    <h6><span><i class="fa-solid fa-envelope"></i></span> equoharish@gmail.com</h6>
                </div>

            </div>


        </form>

    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226065.25663378907!2d85.326133!3d27.70896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1659511346982!5m2!1sen!2snp"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
