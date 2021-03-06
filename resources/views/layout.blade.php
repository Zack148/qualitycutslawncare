<!doctype html>
<html lang="{{ app()->getLocale() }}" class="has-navbar-fixed-top">
    <head>
      <link rel="prefetch" as="image" href="/images/snowplow2.jpg">
      <link rel="prefetch" as="image" href="/images/grass3.jpg">
      <link rel="prefetch" as="image" href="/images/grass4.jpg">
      <link rel="prefetch" as="image" href="/images/qclctruck.png">
      <link rel="prefetch" as="image" href="/images/snowplow1.jpg">
      <link rel="prefetch" as="image" href="/images/qclcspringmulch3.jpg">
      <link rel="prefetch" as="image" href="/images/snowplow3.jpg">
      <link rel="prefetch" as="image" href="/images/qclctruck.png">
      <link rel="prefetch" as="image" href="/images/snowplow5.jpg">
      <link rel="prefetch" as="image" href="/images/grass3.jpg">
      <link rel="prefetch" as="image" href="/images/snowplow2.jpg">
      <link rel="prefetch" as="image" href="/images/drone.jpg">
      <link rel="prefetch" as="image" href="/images/gardening.jpg">
      <link rel="prefetch" as="image" href="/images/snowplow4.jpg">
      <link rel="prefetch" as="image" href="/images/qclcspringmulch2.jpg">
      <link rel="prefetch" as="image" href="/images/flowersandgrass.jpg">


      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="application-name" content="{{ env('APP_NAME') }}">
      <meta name="theme-color" content="#ffffff">
      <meta name="description" content="Quality Cuts Lawn Care is an independently owned lawn care business base in Waverly, NY. We provide a range of services to both commercial and residential clients. Our services include lawn care, mulch and stone delivery, snow removal, and spring & fall clean up.">
      <meta name="keywords" content="lawn, quality, mulch, snow, spring, fall, cuts, residential, commercial">
      <meta name="robots" content="index, follow">
      <meta name="web_author" content="">
      <meta name="language" content="English">

      <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=OmyqwPjmyk">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png?v=OmyqwPjmyk">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png?v=OmyqwPjmyk">
      <link rel="manifest" href="/favicons/site.webmanifest?v=OmyqwPjmyk">
      <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=OmyqwPjmyk" color="#67a243">
      <link rel="shortcut icon" href="/favicons/favicon.ico?v=OmyqwPjmyk">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=OmyqwPjmyk">
      <meta name="theme-color" content="#ffffff">

      <!-- Apple specific -->
      <meta name="apple-mobile-web-app-title" content="{{ env('APP_NAME') }}">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="white">


      <title>{{ env('APP_NAME') }}</title>
      <link rel="stylesheet" href="/css/bulma.css">
      <link rel="stylesheet" href="/slick/slick.css">
      <link rel="stylesheet" href="/slick/slick-theme.css">
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="/fontawesome-all.min.css">
      <link rel="stylesheet" href="/fontawesome.min.css">

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113506770-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113506770-1');
      </script>

    </head>
    <body>
      <div id="app">
        @include('navbar')
        @yield('content')
      </div>

      @include('footer')

      <script src="/js/app.js"> </script>
      <script src="/slick/slick.min.js" charset="utf-8"></script>
      <script src="/js/global.js"></script>
      <script src="/js/popup.js"></script>

    </body>
</html>
