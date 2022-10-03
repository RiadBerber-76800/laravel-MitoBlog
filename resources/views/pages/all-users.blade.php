<x-layouts.main-layout title="Tous les utilisateurs">
  <div class="container p-12">
    <h1 class="text-3xl font-black pb-4">Tous les utiliseateurs</h1>
    @include("partials._table-allUsers")
    <div class="">
      {{ $users->links('pagination::tailwind') }}
    </div>
  </div>
</x-layouts.main-layout>

