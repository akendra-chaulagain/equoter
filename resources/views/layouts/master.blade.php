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
    
    // jobs footer
    $footer_jobs = App\Models\Navigation::find(2471)->childs;
    $footer_company = App\Models\Navigation::find(2259)->childs;
    
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

    <link rel="icon" type="image/x-icon" href="{{ '/uploads/icons/' . $global_setting->site_logo }}" />

    <link rel="stylesheet" href="website/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body>



    <div class="hearder">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ '/uploads/icons/' . $global_setting->site_logo }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">=</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">



                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>

                        @foreach ($menus as $menu)
                            @php $submenus = $menu->childs; @endphp
                            <li class="nav-item dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="  
                                    {{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>





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







                    <Button><a href="post-resume.html">APPLY</a></Button>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')










    <script>
        $('.owl-testomonials').owlCarousel({
            loop: true,
            autoplay: true,
            items: 1,
            nav: false,
            dots: true,
            autoplayHoverPause: true,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>


    <script>
        $('.client-slider').owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
            // animateOut: 'slideOutUp',
            // animateIn: 'slideInUp'
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>




    <script src="/website/js/lightbox.js"></script>

    <script src="https://www.google-analytics.com/analytics.js" async></script>




</body>

</html>
