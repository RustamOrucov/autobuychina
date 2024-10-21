<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seoData->seo_title ?? 'AutobuyChina - Your Reliable Partner in China Auto Parts' }}</title>

    <!-- SEO content -->
    <meta name="description" content="{{ $seoData->seo_description ?? 'AutobuyChina offers a wide range of high-quality auto parts directly from China. Find the best deals on car parts with fast shipping.' }}">

    <!-- SEO keywords -->
    <meta name="keywords" content="{{ $seoData->seo_key ?? 'China auto parts, buy car parts from China, affordable car parts, auto parts export' }}">

    <!-- SEO Robots Meta tag -->
    <meta name="robots" content="{{ $seoData->seo_robots ?? 'index,follow' }}">

    <!-- Canonical URL (SEO için önemli) -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Meta Tags (Sosyal medya paylaşımı için) -->
    <meta property="og:title" content="{{ $seoData->seo_title ?? 'AutobuyChina - Reliable Car Parts Supplier' }}">
    <meta property="og:description" content="{{ $seoData->seo_description ?? 'AutobuyChina offers high-quality auto parts directly from China. Find the best deals on car parts with fast shipping.' }}">
    <meta property="og:image" content="{{ asset('storage/' . $logoImages->icon) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags (Twitter paylaşımları için) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoData->seo_title ?? 'AutobuyChina - Reliable Car Parts Supplier' }}">
    <meta name="twitter:description" content="{{ $seoData->seo_description ?? 'AutobuyChina offers high-quality auto parts directly from China. Find the best deals on car parts with fast shipping.' }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $logoImages->icon) }}">
    <meta name="twitter:site" content="@AutobuyChina">

    <!-- Link Favicon -->
    <link rel="icon" href="{{ asset('storage/' . $logoImages->icon) }}" type="image/png">

    <!-- Language Support (Dil desteği, SEO için önemli) -->
    <meta name="language" content="English">

    <!-- Styles and JavaScript Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script src="{{ asset('assets/js/addfavorite.js') }}"></script>
</head>
