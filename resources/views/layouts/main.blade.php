<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    @yield('style')
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap');
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Tinos&display=swap');
    </style>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Denio's Web</title>
</head>
<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
