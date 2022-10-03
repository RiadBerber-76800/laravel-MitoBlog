<x-layouts.main-layout title="Tous mes articles">
  <div class="container pt-14">
    <h1 class="text-3xl font-black pb-4">Tous mes articles</h1>
    @include("partials._table-allPosts")
    <div class="">
      {{ $posts->links('pagination::tailwind') }}
    </div>
  </div>

</x-layouts.main-layout>

