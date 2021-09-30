<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
    <!-- Insert analytics code here -->
    @endif

    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">

    @include('_components.navigation')


    <main role="main">
        @yield('body')
    </main>

    @include('_components.footer')

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
</body>

</html>