@php
  $styleLink= "hover:text-blue-600 hover:underline underline-offset-4 block pb-3"
@endphp
<x-layouts.main-layout title="Dashboard">
    <div class="container">
      <h1 class="font-black text-2xl text-center">Bienvenue <span class="text-blue-500"> {{ Auth::user()->name}} </span> sur ton Dashboard</h1>
      <div class="py-12 grid">
        <a class="{{$styleLink}}"href="{{ route('posts.create')}}">New posts</a>
        <a class="{{$styleLink}}"href="{{route("posts.all")}}">Liste des posts</a>
        <a class="{{$styleLink}}"href="{{route("users.all")}}">Liste des utilisateurs</a>
      </div>
    </div>
</x-layouts.main-layout>
