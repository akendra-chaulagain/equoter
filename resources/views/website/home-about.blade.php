@php
    $home_about = App\Models\Navigation::find(2445);
    $home_about_parent = App\Models\Navigation::find($home_about->parent_page_id);
    
@endphp

<section class="about">
    <div class="container">
        <h1 class="about-tittle2 text-center">LEARN MORE <span>ABOUT US</span></h1>
        <div class="about-area">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-area-images">
                        <img src="{{ $home_about->banner_image }}" alt="">
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-area-text">
                        <p>
                            {!! Str::limit($home_about->long_content, 600) !!}
                        </p>
                        <button><a href="/{{ $home_about_parent->nav_name }}/{{ $home_about->nav_name }}">READ
                                MORE</a></button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<div class="work">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-6 col-12">
                <div class="work-text-area">
                    <div class="work-tittle">
                        <h1><span>MESSAGE</span> FROM MD </h1>
                    </div>

                    <p> {!! $message->short_content !!}</p>

                    {{-- <div class="thank"> Thanks,</div>

                    <div class="name"> Harish Kunwar</div>
                    <div class="post"> Managing Director</div> --}}
                </div>
            </div>

            <div class="col-md-6">
                <img class="img-fluid" src="{{ $message->banner_image }}" alt="">
            </div>

        </div>
    </div>

</div>
