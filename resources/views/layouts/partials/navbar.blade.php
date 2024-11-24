  <!-- Header Section -->
  <header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
      <div class="text-lg font-bold">
        <a href="{{route('index')}}">InstantServe</a>
      </div>
      <nav class="space-x-4">
        <a href="{{route('index')}}" class="text-gray-700 hover:text-blue-500">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Shop</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Categories</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">About</a>
      </nav>
      <div class="flex items-center space-x-4">
        <form action="{{ route('search') }}" method="GET">
        <div class="relative">
          <input type="text" name="search" placeholder="Search" class="pl-10 pr-4 py-2 border rounded-md w-full outline-none focus:border-blue-500">
          <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
      </form>

        <a href="#" class="text-gray-700 hover:text-blue-500">
          <img src="/img/profileIcon.png" class="w-20 h-20" >
        </a>
      </div>
    </div>
  </header>
