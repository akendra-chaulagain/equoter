 @extends('layouts.master')
 @push('title')
     Video Gallery
 @endpush

 @section('content')
     <div class="contact">
         <div class="container">
             <div class="contact-area text-center">
                 <ul>
                     <li>
                         <a href="/">HOME</a>
                     </li>
                     <li>
                         <a href="">/</a>
                     </li>


                     <li>
                         <a href=""> Video Gallery</a>
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
                             {!! $photo->link !!}
                         @endforeach
                     </div>
                 </div>
             </div>
         </section>
     </div>
 @endsection
