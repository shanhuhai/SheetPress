<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>SheetPress</title>

  @include('admin._partials.assets')
  @yield('header')
</head>
<body>
<div class="container">
  <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="{{ URL::route('admin.pages.index') }}">SheetPress</a>

      @include('admin._partials.navigation')

    </div>
  </div>
</div>

<hr>

  @yield('main')

</div>
@yield('footer')
</body>
</html>