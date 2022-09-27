{{-- Deuxième étape de création de ce projet --}}

<x-layouts.main-layout title="Accueil">
  <p class="text-indigo-500 text-center text-4xl pt-10 pb-10 font-black">Blog Mito Laravel</p>
  {{-- @foreach ($arrs as $arr)
  <li>{{$arr}}</li>
  @endforeach --}}
  <div class="container">
    <div class="grid grid-cols-4 gap-3">
    @foreach ($posts as $post)
    <a href="posts/{{$post->id}}">
      <x-cards.post-card : content="$post->content" :title="$post->title" :url_img="$post->url_img"/>
    </a>
    @endforeach
    </div>
  </div>
</x-layouts.main-layout>


