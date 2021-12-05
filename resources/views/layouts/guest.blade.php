{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

@include('partials.header')
{{-- @include('notify::components.notify')
@notifyCss --}}
<body>


  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

  <!-- Navbar -->
    @include('partials.navbar')
  <!-- End Navbar -->

  @include('partials.carousel')

  <!-- container -->
    <div class="container-fluid py-4">      
    <main id="main">
       <!-- isi konten -->
        {{-- {{$slot}}
        @yield('content') --}}

       <!-- end isi konten -->
        @include('partials.about')
        @include('partials.counts')
        @include('partials.whyus')
        @include('partials.services')
        @include('partials.testimonials')
        @include('partials.cta')
        @include('partials.portofolio')
        @include('partials.team')
        @include('partials.pricing')
        @include('partials.faq')
        @include('partials.contact')
      <!-- footer -->
        @include('partials.footer')
      <!-- end isi footer -->

    </div>
  <!-- end container -->


  </main>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div class="fixed-plugin">
    @include('partials.plugin')
  </div>
  

  @include('partials.scripts')
  {{-- @notifyJs --}}
</body>

</html>
