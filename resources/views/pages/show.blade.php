

<x-layouts.main-layout :title="$post->title">
  <div class="container mb-10">
    <div class="flex space-x-4">
      @if(count($post->images) > 0)
      <div class="space-y-2 bg-gray-200 p-3">
        @foreach ($post->images as $image )
          <img src="{{ asset($image->slug)}}" alt="" class="w-40">
        {{-- @auth
        <a href="{{route("delete.img", $image->id)}}" class="btn btn-outline-info btn-xs ">X</a>
        @endauth --}}
        <x-link-delete routeName="delete.img" :itemId="$image->id" linkName="X" />
        @endforeach
      </div>
      @endif
      <img class="max-w-[520px]" src="{{ asset('storage/' .$post->url_img) }}" alt="{{$post->title}}">
    </div>
    <p class="text-3xl font-black py-8">{{$post->title}}</p>
    <p>{!!nl2br(e($post->content))!!}</p>
    @auth

    <div class="pt-6">
        <x-btn-delete :post="$post" />
        <a href="{{$post->id}}/edit" class="btn btn-success">Modifier</a>
      </div>
      @endauth
    <div class="my-14 bg-blue-200 p-5 ">
      <h2 class="text-4xl font-black">Commentaires</h2>
      @guest
        <p class="text-center py-6">Connecte toi pour poster un commentaire !!!</p>
      @endguest
      @auth

      <form action="{{ route("comment.store", $post->id) }}" method="POST">
        @csrf
        <input type="text" placeholder="Votre commentaire" name="content">
        <button class="btn btn-primary" type="submit">Envoyer</button>
        <x-error-msg name="content"/>
      </form>
      @endauth
      <div class="bg-gray-50 p-5">
        @forelse ($post->comments as $comment )
        <div class=" my-2 bg-gray-200 p-2">
          <p class="">{{ $comment->content }}</p>
          <p class="text-xs text-gray-500">crée le {{ $comment->created_at->format("d/m/y") }}</p>


        </div>

        @empty
        <p>Soyez le 1er à écrire un commentaire !!!</p>

        @endforelse
      </div>
    </div>
  </div>


</x-layouts.main-layout>

