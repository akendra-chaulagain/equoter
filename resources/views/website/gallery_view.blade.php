@php
    $gallery_breed = App\Models\Navigation::find(2489);
      $gallery_breed_parent = App\Models\Navigation::find(2489);
@endphp


@extends('layouts.master')
@push('title')
   {{ $img_pt->caption }}
@endpush
@section('content')
    <div class="contact">
        <div class="container">
            <h1 class="contact-tittle3 text-center">  {{ $img_pt->caption }}</h1>
            <div class="contact-area text-center">
                <ul>
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="">/</a>
                    </li>
                    <li>
                        <a href="/{{ $gallery_breed->nav_name }}"> {{ $gallery_breed->caption }} </a>
                    </li>
                    <li>
                        <a href="">/</a>
                    </li>

                      <li>
                        <a href=""> {{ $img_pt->caption }}</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>

    <div class="container margin_60">
        <section class="grid">


            <div class="row">
                <div class="demo-gallery">

                    <div id="lightgallery" class="list-unstyled">
                        @foreach ($photos as $photo)
                            <div class="item col-sm-4 col-xs-12 all 16"
                                data-responsive="/uploads/photo_gallery/{{ $photo->file }}"
                                data-src="/uploads/photo_gallery/{{ $photo->file }}" data-sub-html="<h4>Office</h4>">
                                <a href="">
                                    <img src="/uploads/photo_gallery/{{ $photo->file }}" alt="Office" />
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
