 @extends('layouts.master')

 @push('title')
     {{ $normal->caption }}
 @endpush

 @section('content')
     <div class="contact">
         <div class="container">
             <div class="col-lg-12 col-md-12">
                 <h1 class="contact-tittle3 text-center"> {{ $normal->caption }}</h1>
                 <div class="contact-area text-center">
                     <ul>
                         <li>
                             <a href="/">HOME</a>
                         </li>
                         <li>
                             <a href="">/</a>
                         </li>
                         <li>
                             <a href="#">{{ $parent_name->caption }}</a>
                         </li>
                         <li>
                             <a href="">/</a>
                         </li>
                         <li>
                             <a href="#">LEGAL DOCUMENTS</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>row
     </div>

     <div class="container" style="margin-top: 20px">
         <div class="row">
             <div class="demo-gallery">
                 <div id="lightgallery" class="list-unstyled">
                     @foreach ($member as $item)
                         <div class="item col-sm-4 col-xs-12 all 16" data-responsive="{{ $item->banner_image }}"
                             data-src="{{ $item->banner_image }}" data-sub-html="<h4{{ $item->caption }}</h4>">
                             <a href="">
                                 <img src="{{ $item->banner_image }}" alt="Office" />
                             </a>
                         </div>
                     @endforeach


                 </div>
             </div>
         </div>
     </div>
 @endsection

 <!-- End About Us -->
