<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seoData->seo_title ?? 'AutobuyChina' }}</title>
    <!-- SEO content -->
    <meta name="description" content="{{ $seoData->seo_description ?? 'AutobuyChina description' }}">
    <!-- SEO keywords -->
    <meta name="keywords" content="{{ $seoData->seo_key ?? 'default,keywords' }}">
    <!-- SEO Robots Meta tag -->
    <meta name="robots" content="{{ $seoData->seo_robots ?? 'index,follow' }}">
    <!-- Open Graph Meta tag (Opsiyonel) -->
    <meta property="og:title" content="{{ $seoData->seo_title ?? 'AutobuyChina' }}">
    <meta property="og:description" content="{{ $seoData->seo_description ?? 'AutobuyChina description' }}">
    <meta property="og:image" content="{{ asset('storage/' . $logoImages->icon) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <!-- Link Favicon -->
    <link rel="icon" href="{{ asset('storage/' . $logoImages->icon) }}" type="image/png">



    {{-- style and java script links start --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />



    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script src="{{ asset('assets/js/addfavorite.js') }}"></script>
</head>
