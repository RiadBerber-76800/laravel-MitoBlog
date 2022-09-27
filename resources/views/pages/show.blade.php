<x-layouts.main-layout :title="$post->title">
  <div class="container mb-10">
  <img src="{{$post->url_img}}" alt="{{$post->title}}">
  <p class="text-3xl font-black py-8">{{$post->title}}</p>
  <p>{{ $post->content }}</p>
  <div class="pt-6">
    <x-btn-delete :post="$post" />
  </div>
  </div>
</x-layouts.main-layout>

