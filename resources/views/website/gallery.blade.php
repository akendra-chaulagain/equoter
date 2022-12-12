
 @php
     $gallery_breed = App\Models\Navigation::find(2489);
 @endphp
 
 @extends('layouts.master')
 @push('title')
     Gallery
 @endpush
 @section('content')
     <div class="contact">
         <div class="container">
             <h1 class="contact-tittle3 text-center">GALLERY</h1>
             <div class="contact-area text-center">
                 <ul>
                     <li>
                         <a href="/">Home</a>
                     </li>
                     <li>
                         <a href="">/</a>
                     </li>
                     <li>
                         <a href="#">{{ $gallery_breed->caption }}</a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>

     <div class="container margin_60">
         <section class="grid">

          
          
    <main class="site-main">


        <div class="gallery-folder">

            <div class="container">
                @if (isset($photos))
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-md-3 col-sm-4">

                                <a href="{{ route('galleryview', $photo->nav_name) }}">
                                    <div class="folder">
                                        <div class="folder-inside"
                                            style="background: url({{ $photo->banner_image }})  no-repeat; background-size: cover;">
                                        </div>
                                    </div>
                                    <h4>{{ $photo->caption }}</h4>
                                </a>
                            </div>
                        @endforeach

                    </div>
                @endif

            </div>
        </div>

    </main>

         </section>
     </div>
 @endsection
