@php
    $home_about = App\Models\Navigation::find(2445);
    $home_about_parent = App\Models\Navigation::find($home_about->parent_page_id);
    
@endphp

<section class="about">
    <div class="container">

        <div class="about-area">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-area-images">
                        <img src="{{ $home_about->banner_image }}" alt="">
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-area-text">
                        <h2 class="all_title_h2">ABOUT US</h2>
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
<hr>

<div class="message_from_chairman">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-6 col-12">
                <div class="work-text-area">
                    <div class="work-tittle">
                      <h2 class="all_title_h2">MESSAGE FROM MD</h2>
                    </div>

                    <p> {!! $message->short_content !!}</p>

                   
                </div>
            </div>

            <div class="col-md-6">
                <img class="img-fluid" src="{{ $message->banner_image }}" alt="">
            </div>

        </div>
    </div>

</div>

