<!DOCTYPE html>
<html lang="en">

@include('users.partials.head')

<body>

  <!-- ======= Header ======= -->
  @include('users.partials.navbar')

  <!-- ======= Hero Section ======= -->
  @yield('carousel')

  <main id="main">

   {{$slot}}

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('users.partials.footer')

  @include('users.partials.scripts')

</body>

</html>