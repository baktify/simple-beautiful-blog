<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <link rel="icon" type="image/svg+xml" href="./images/avatar.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Homepage</title>
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
  {{--  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

<div class="relative min-h-screen text-gray-800">
  <!-- Header -->
  @include('pageparts.header')

  <!-- Navigation links -->
  @include('pageparts.navigation')
  
  <main class="bg-gray-100 pb-32 pt-36 min-h-screen">
    <div class="container mx-auto max-w-5xl bg-white py-14 px-24 border border-t-0 border-gray-300">
      @yield('content')
    </div>
  </main>
  
  <!-- Footer -->
  @include('pageparts.footer')

</div>
</body>

</html>