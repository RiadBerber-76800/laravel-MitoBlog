<x-layouts.main-layout title="Liste des catégories">
<div class="container">
  <h1 class="pt-10 pb-10 text-4xl font-bold">Gérer les catégories</h1>
  <form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="">
      <input class="@error('category') border-red-500 @enderror my-3" type="text" name="category"
      value="{{ old('category', $category->category) }}" >
      <button class="btn btn-primary" type="submit">Enregistrer</button>
      <x-error-msg name="category" />
    </div>
  </form>


</div>
</x-layouts.main-layout>
