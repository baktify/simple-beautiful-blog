<nav class="absolute top-20 inset-x-0 py-5 bg-gray-100 shadow-md border-b border-gray-300">
  <div class="container mx-auto max-w-7xl flex">
    <!-- Links -->
    <div class="flex space-x-10 mr-auto sm:pl-6">
      <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">Articles</x-nav-link>
      <x-nav-link :href="route('category.list')" :active="request()->routeIs('category.list')">Categories</x-nav-link>
      <x-nav-link :href="route('tag.list')" :active="request()->routeIs('tag.list')">Tags</x-nav-link>
      <x-nav-link :href="route('about')" :active="request()->routeIs('about')">About us</x-nav-link>
    </div>
    <!-- Socials -->
    <div class="flex space-x-5 sm:pr-11">
      <a href="#" class=""><img src="{{asset('assets/svgs/facebook.svg')}}" alt="facebook" class="h-5"></a>
      <a href="#" class=""><img src="{{asset('assets/svgs/twitter.svg')}}" alt="facebook" class="h-5"></a>
      <a href="#" class=""><img src="{{asset('assets/svgs/email.svg')}}" alt="facebook" class="h-5"></a>
    </div>
  </div>
</nav>