<!DOCTYPE html>
<html>
<head>
<title>BitUp</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

  @include('layout.stylesheet')
  @yield('stylesheet')

</head>

<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  

<div class="container">

  @include('layout.header')
  @include('layout.menubar')
  @include('index')
  @include('layout.lastpage')

</div>

     @include('layout.script')
     @yield('scripts')

</body>
</html>