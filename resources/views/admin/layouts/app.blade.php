<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <link rel="icon" type="image/svg+xml" href="{{asset('images/real-avatar.jpg')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}
  <title>Admin Panel</title>
</head>

<body>

<div class="min-h-screen text-gray-800">
  
  <header class="h-12 flex absolute top-0 inset-x-0">
    <div class="w-72 h-full bg-indigo-400 flex justify-center items-center border-r border-indigo-300">
      <div class="text-sm font-semibold text-center text-gray-800 tracking-wide">
        Admin-panel <span class="text-gray-300">@bakosyy</span>
      </div>
    </div>
    <nav class="bg-indigo-400 flex-grow border-l border-indigo-300">
    
    </nav>
  </header>
  
  <div class="flex items-stretch min-h-screen pt-12">
    <!-- Menus -->
    <aside class="w-72 flex-shrink-0 bg-indigo-500 space-y-2.5 text-gray-100 font-sans">
      
      <div class="px-6 py-3 text-gray-200 mt-4 space-x-2">
        <img src="{{asset('images/user-male.png')}}" alt="avatar" class="w-12 h-12 rounded-full inline">
        <div class="inline-block max-h-1 text-gray-300 font-medium">Bakytzhan Kozhabayev</div>
      </div>
      
      <div class="h-1.5 bg-indigo-600"></div>
      
      <!-- Sidebar navigation links -->
      <ul class="space-y-2 px-5 py-3">
        <li>
          <a class="block px-5 py-2 font-medium rounded @if(request()->routeIs('admin-dashboard')) bg-gray-200 text-gray-600 @else text-gray-200 hover:bg-indigo-400 @endif" href="{{route('admin-dashboard')}}">
            Dashboard
          </a>
        </li>
        <li>
          <a class="block px-5 py-2 font-medium rounded @if(request()->segment(1) == 'admin' AND request()->segment(2) == 'articles') bg-gray-200 text-gray-600 @else text-gray-200 hover:bg-indigo-400 @endif" href="{{route('articles.index')}}">
            Articles
          </a>
        </li>
        <li>
          <a class="block px-5 py-2 font-medium rounded @if(request()->segment(1) == 'admin' AND request()->segment(2) == 'categories') bg-gray-200 text-gray-600 @else text-gray-200 hover:bg-indigo-400 @endif" href="{{route('categories.index')}}">
            Categories
          </a>
        </li>
        <li>
          <a class="block px-5 py-2 font-medium rounded @if(request()->segment(1) == 'admin' AND request()->segment(2) == 'tags') bg-gray-200 text-gray-600 @else text-gray-200 hover:bg-indigo-400 @endif" href="{{route('tags.index')}}">
            Tags
          </a>
        </li>
        <li>
          <a class="block px-5 py-2 font-medium rounded @if(request()->segment(1) == 'admin' AND request()->segment(2) == 'comments') bg-gray-200 text-gray-600 @else text-gray-200 hover:bg-indigo-400 @endif" href="{{route('comments.index')}}">
            Comments
          </a>
        </li>
      </ul>
      
      <!-- <div class="h-1 bg-indigo-600"></div> -->
    
    </aside>
    
    <!-- Page content -->
    <main class="w-auto flex-grow p-10 pb-0 bg-gray-200">
      <section class="bg-gray-100 py-4 px-3 space-y-4 border-t-4 border-indigo-500 shadow-md">
        @yield('content')
      </section>
    </main>
  
  </div>

</div>
</body>

</html>
