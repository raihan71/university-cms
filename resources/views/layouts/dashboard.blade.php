<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <title>{{env('APP_NAME')}} - @yield('title')</title>
      <link
          rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link
          href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
          rel="stylesheet"
          crossorigin="anonymous"/>
      <script
          src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
          crossorigin="anonymous"></script>
      @stack('styles')
    <style type="text/css">
      body {
        font-family: 'Nunito', sans-serif;
      }

      .nav-link {
        color: #fff;
      }

      .nav-link:hover {
        color: #007bff!important
      }
    </style>
  </head>
  <body class="sb-nav-fixed">
    @include('layouts.dashboard-topnav')
    <div class="d-flex">
      @include('layouts.dashboard-sidenav')
      @yield('content')
    </div>
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          crossorigin="anonymous"></script>
    <script
          src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
          crossorigin="anonymous"></script>
    @stack('scripts')
    </body>
</html>