<x-layouts.main-layout title="Création article">
<div class="container">
  <h1 class="mt-16 font-bold text-4xl pb-10 ">Update Post</h1>
  <form action="{{route("posts.update", $post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="">
      {{--title--}}
      <input type="text" class="mt-5 block w-full rounded-lg border-gray-400" name="title"placeholder="Titre du Post" value={{old('title', $post->title)}}>
      <x-error-msg name='title'/>
      {{--content--}}
      <textarea name="content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu....">{{old('content', $post->content)}}</textarea>
      <x-error-msg name='content'/>
      {{--is_published--}}
      <div class="">
        <label for="">Publication</label>
        <input @checked(old('is_published', $post->is_published))
        name="is_published" type="checkbox" value="is_published">
      </div>
      {{--image--}}
       <div class="div">
        <label for="">Choisi une image</label>
        <input type="file" name="url_img" id="" class="block">
      </div>
      <x-error-msg name="content"/>
    <div class="">
      <label for="">Others Image :</label>
      <input type="file" name="images[]" id="" multiple class="block">
    </div>
    </x-error-msg name="images" />
      {{-- <input type="text" class="mt-5 block w-full rounded-lg border-gray-400" name="url_img" placeholder="Url de votre imge" value="https://source.unsplash.com/640x480/?animals?1"> --}}
      <button class="btn-primary btn mt-6 w-full">Envoyer</button>
    </div>
  </form>
</div>
</x-layouts.main-layout>
