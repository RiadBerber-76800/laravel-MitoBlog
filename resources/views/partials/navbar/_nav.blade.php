@php
  $styleLink= "hover:text-blue-600 hover:underline underline-offset-4"
@endphp
<div class="bg-gray-100">
<nav class="container text-xl flex justify-between items-center py-4 shadow-lg">
  <div>
    <a class="ml-6 underline" href="/">Mito<span class="text-red-500">@</span>Blog</a>
  </div>
  <div class="space-x-5 font-semibold uppercase flex items-center  "id="navitem">
      @guest
      <a class="{{$styleLink}}"href="{{route('login')}}">Connexion</a>
      <a class="{{$styleLink}}"href="{{route('register')}}">Inscription</a>
      @endguest
    @auth
    <x-btn-logout />
    <span > {{ Auth::user()->name}} </span>
    @endauth
  </div>
</nav>
</div>
