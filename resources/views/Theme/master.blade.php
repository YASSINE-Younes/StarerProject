<!DOCTYPE html>
<html lang="en">
  @include('Theme.partials.head')

<body>
  
  <!--================Header Menu Area =================-->
  @include('Theme.partials.header')
  <!--================Header Menu Area =================-->
  
  <main class="site-main">
    <!--================Hero Banner start =================-->  
    @include('Theme.partials.hero')
    <!--================Hero Banner end =================-->  


    @yield('content')
   
  </main>

  <!--================ Start Footer Area =================-->
  @include('Theme.partials.footer')
  <!--================ End Footer Area =================-->

  @include('Theme.partials.scripts')
</html>