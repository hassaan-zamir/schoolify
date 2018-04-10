<!DOCTYPE html>
<html>
  <head>
      @include('includes.head')
      @yield('head_page')
  </head>
  <body class="fixed-nav sticky-footer" id="page-top">
  
      @yield('content')


      @include('includes.footer')
      @yield('footer_page')

  </body>
</html>
