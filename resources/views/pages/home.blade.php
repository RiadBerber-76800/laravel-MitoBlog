{{-- Deuxième étape de création de ce projet --}}
<x-layouts.main-layout title="Accueil">
  <p class="text-indigo-500 text-center text-4xl pt-10 pb-10 font-black">Blog Mito Laravel</p>
  <div class="container">
    <div class="grid grid-cols-4 gap-3">

    @forelse ($posts as $post)
    <a href="posts/{{$post->id}}">
      <x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img"/>
    </a>
    @empty
      <p class="text-center">Pas d'articles actuellement</p>
      @endforelse
    </div>
    <div class="">
      {{ $posts->links('pagination::tailwind') }}
    </div>
  </div>
</x-layouts.main-layout>



