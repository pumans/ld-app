<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content="Consulte is a free Bootstrap HTML Template for Investment Company"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="LEU" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="@yield('title')" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileImage" content="/images/favicon.ico" />

    <!-- Structured Data  -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "@yield('title')",
      "url": "Replace_with_your_site_URL"
    }
    </script>
</head>

<body>
<!--Pagewrapper-->
<div class="page-wrapper">

    @include('partials.header')

    @yield('content');

    @include('partials.footer')

</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
    <button class="close-search"><span class="icofont-arrow-up"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/parallax.min.js"></script>
<script src="/js/tilt.jquery.min.js"></script>
<script src="/js/jquery.paroller.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/script.js"></script>


</body>
</html>
