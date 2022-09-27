{{-- Deuxième étape de création de ce projet --}}

<x-layouts.main-layout title="Accueil">
  <p>hello World</p>
  {{-- @foreach ($arrs as $arr)
  <li>{{$arr}}</li>
  @endforeach --}}
  @foreach ($posts as $post)
  <p class="font-bold text-2xl">{{$post->title}}</p>
  <p>{{$post->content}}</p>
  @endforeach
</x-layouts.main-layout>



