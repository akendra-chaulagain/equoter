@php
    $global_setting = App\Models\GlobalSetting::all()->first();
    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Photo Gallery')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    $footer = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('parent_page_id', '!=', 0)
        ->where('page_type', '!=', 'Job')
        // ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    $footer_parent = App\Models\Navigation::find(2259)->childs;
@endphp


<!DOCTYPE html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-----SEO--------->

    <title> @stack('title') | {{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <link rel="shortcut icon" href="{{ '/uploads/icons/' . $global_setting->favicon }}" type="image/png">


    <link rel="stylesheet" href="/website/css/style.css">
    {{-- <link rel="stylesheet" href="/website/js/main.js"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
    {{-- main top bar --}}
    <div class="main_topbar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <i class="fa-solid fa-location-pin"></i>
                    <span style="margin-left: 5px">Dhapasi-8, Basundhara, Kathnandu , Nepal</span>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="header_top_icon">
                        <a href="/">
                            <i class="fa-brands fa-facebook" style="margin-right: 12px"></i>

                        </a>
                        <a href="/">
                            <i class="fa-brands fa-instagram" style="margin-right: 12px"></i>

                        </a>
                        <a href="/">
                            <i class="fa-brands fa-twitter"></i>

                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="hearder">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{ '/uploads/icons/' . $global_setting->site_logo }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="display: flex;justify-content: center; ">=</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">



                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>

                        @foreach ($menus as $menu)
                            @php $submenus = $menu->childs; @endphp
                            <li class="nav-item dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>

                                @if ($menu->nav_name == 'documentation' || $menu->nav_name == 'jobs')
                                    <a class="nav-link "
                                        href="  
                                    {{ route('category', $menu->nav_name) }}">{{ $menu->caption }}</a>
                                @else
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                        @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="  
                                    {{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>
                                @endif

                                @if ($submenus->count() > 0)
                                    <ul class="dropdown-menu">
                                        @foreach ($submenus as $sub)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                        {{-- <li><a href="/contact">Contact</a></li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>

                    <Button><a href="/jobapply-form">APPLY</a></Button>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="w-100 py-4 flex-shrink-0 ">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer1">
                        <div>
                            <img src="{{ '/uploads/icons/' . $global_setting->site_logo }}" alt="">
                        </div>
                        <div class="icons-area">
                            <div class="row">
                                <div class="icons col-3">
                                    <a target="_blank" href="{{ $global_setting->facebook }}">
                                        <i class="fa-brands fa-facebook" style="color: white"></i>
                                    </a>

                                </div>
                                <div class="icons col-3">
                                    <a target="_blank" href="{{ $global_setting->linkedin }}">
                                        <i class="fa-brands fa-square-instagram" style="color: white"></i>

                                    </a>
                                </div>

                                <div class="icons col-3">
                                    <a target="_blank" href="{{ $global_setting->twitter }}">
                                        <i class="fa-brands fa-twitter" style="color: white"></i>

                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer2">
                        <h5 class="">QUICK-LINK</h5>
                        <ul class="list-unstyled footer-menu">

                            @foreach ($footer_parent as $footer_parent_item)
                                <li><a href="/company/{{ $footer_parent_item->nav_name }}"><i
                                            class="fa-solid fa-minus"></i>{{ $footer_parent_item->caption }}</a></li>
                            @endforeach
                            <li><a href="/contact"><i class="fa-solid fa-minus"></i>Contact</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer3">
                        <h5 class="">CONTACT US</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#"></a><i class="fa-solid fa-location-crosshairs"></i>
                                {{ $global_setting->website_full_address }} {{ $global_setting->address_ne }}
                            </li>
                            <li><a href="#"></a><i
                                    class="fa-solid fa-phone-volume"></i>:{{ $global_setting->phone }}
                            </li>
                            <li><a href=""></a><i
                                    class="fa-solid fa-envelope-open"></i>{{ $global_setting->site_email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="container">
                        <div class="gooter_mp">
                            {!! $global_setting->page_keyword !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <!-- gllery js -->
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/picturefill.min.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lightgallery.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lg-pager.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lg-autoplay.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lg-fullscreen.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lg-zoom.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lg-hash.js"></script>
    <script src="https://www.peninsulanepal.com/template/web/js/gallery/lg-share.js"></script>
    <!--End gllery js -->


    <script src="/website/js/main.js"></script>

    <script>
        lightGallery(document.getElementById('lightgallery'));

        $(function() {
            var selectedClass = "";
            $(".filter").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#lightgallery").fadeTo(100, 0.1);
                $("#lightgallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function() {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#lightgallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>









    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (Session::has('contact'))
        <script>
            Swal.fire(
                'Thank You !',
                "Form submitted sucessfully!!!",
                'success'
            )
        </script>
    @endif




</body>

</html>
