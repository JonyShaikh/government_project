<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('frontend.includes.style')
    <title>DPE GOV BD</title>
  </head>
<body>
    
    @include('frontend.includes.header')

    <main>
        @yield('content')
    </main>
    


    @include('frontend.includes.footer')
    @include('frontend.includes.script')

    @stack('script')
  </body>
</html>