 @extends('layouts.master')


 @push('title')
     Apply Form
 @endpush

 @section('content')
     <div class="contact">
         <div class="container">
             <div class="row"></div>
             <h1 class="contact-tittle3 text-center">POST</h1>
             <div class="contact-area text-center">
                 <ul>
                     <li>
                         <a href="/">HOME</a>
                     </li>
                     <li>
                         <a href="">/</a>
                     </li>
                     <li>
                         <a href="index.html">POST</a>
                     </li>
                     <li>
                         <a href="">/</a>
                     </li>
                     <li>
                         <a href="index.html">POST RESUME</a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="apply">
             <h1 class="apply-tittle text-center">APPLY </h1>
             <form class="apply-wrapper" action="{{ route('contactstore') }}" method="POST" enctype='multipart/form-data'>
                 @csrf

                 <div class=" row">
                     <div class="col-md- col-lg-6 col-12">
                         <div class="form-1">
                             <input type="name" name="name" class="form-control" id="inputName4"
                                 placeholder="Full Name">
                         </div>
                         <span class="text-danger" style="color: red">
                             @error('name')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>
                     <div class="col-md- col-lg-6 col-12">
                         <div class="form-1">
                             <input type="text" name="number" class="form-control" id="inputPhoneNumber4"
                                 placeholder="Country" value="{{ $job_detail->getJob->country ?? '' }}">
                         </div>
                     </div>
                     <div class="col-md- col-lg-6 col-12">
                         <div class="form-1">
                             <input type="email" name="email" class="form-control" id="inputemail4" placeholder="Email">
                         </div>
                         <span class="text-danger" style="color: red">
                             @error('email')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>

                     <div class="col-md- col-lg-6 col-12">
                         <div class="form-1">
                             <input type="apply_for" class="form-control" id="inputName4" placeholder="Apply for *"
                                 value="{{ $job_detail->caption ?? '' }}">
                         </div>
                         <span class="text-danger" style="color: red">
                             @error('apply_for')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>

                     <div class="col-md-12">
                         <div>Your CV</div>
                         <input type="file" name="file" id="fileToUpload">

                     </div>
                     <div class="col-md-12 mt-5">
                         <textarea class="form-control" rows="5" id="massege" name="text" placeholder="Massages"></textarea>
                     </div>
                     <div>
                         <button type="submit" class="btn btn-primary">Apply</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 @endsection
