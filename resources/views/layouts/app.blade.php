<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BP Website - @yield('title')</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
