<x-layouts.main-layout title="Création article">
<div class="container">
  <h1 class="mt-96 font-bold text-4xl pb-10 ">Update Post</h1>
  <form action="{{route("posts.store")}}" method="POST">
    @csrf
    <div class="">
      {{--title--}}
      <input type="text" class="mt-5 block w-full rounded-lg border-gray-400" name="title"placeholder="Titre du Post" value={{old('title', $post->title)')}}>
      <x-error-msg name='title'/>
      {{--content--}}
      <textarea name="content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu....">{{old('content', $post->"content")}}</textarea>
      <x-error-msg name='content'/>
      {{--image--}}
      <input type="text" class="mt-5 block w-full rounded-lg border-gray-400" name="url_img" placeholder="Url de votre imge" value="https://source.unsplash.com/640x480/?animals?1">
      <button class="btn-primary btn mt-6 w-full">Envoyer</button>
    </div>
  </form>
</div>
</x-layouts.main-layout>
