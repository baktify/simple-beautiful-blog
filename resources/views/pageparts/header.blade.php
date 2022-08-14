<header class="absolute top-0 inset-x-0 bg-darkBlue-2 py-5 px-3 shadow-sm">
  <div class="container mx-auto max-w-7xl text-gray-50">
    <div class="flex items-center">
      <!-- Logo -->
      <a href="{{route('homepage')}}" class="mr-auto text-xl font-mono uppercase "><img src="{{asset('assets/svgs/scarf.svg')}}" class="h-10 w-10 inline-block"/>Bako
        blogs</a>
      
      <div class="font-mono flex space-x-12 items-center">
        @guest
          <a href="{{route('login')}}">Login</a>
          <a href="{{route('register')}}">Register</a>
        @endguest
        @auth
          <div class="bg-white text-gray-700 font-semibold px-3 py-1 rounded-md ">{{Auth::user()->name}}</div>
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit">Logout</button>
          </form>
        @endauth
      </div>
    </div>
  </div>
</header>