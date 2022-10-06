<x-layouts.main-layout title="Liste des catégories">
<div class="container">
  <h1 class="pt-10 pb-10 text-4xl font-bold">Gérer les catégories</h1>
  <form action="{{ route("category.store")}}" method="POST">
    @csrf
    <div class="">
      <input type="text" name="category">
      <button class="btn btn-primary" type="submit">Enregistrer</button>
    </div>
  </form>

    <div class="py-10">
      @forelse($categories as $category)
      <p class="pb-5 text-2xl">{{$category->category}}</p>
      <div class="border-b py-3 flex space-x-4">
        <a href="" class="btn btn-success">Modifier</a>
        <a href="" class="btn btn-error">Supprimer</a>
      </div>
      @empty
      <p class="">Pas de catégorie enregistrée actuellement</p>
      @endforelse
    </div>
</div>
</x-layouts.main-layout>
