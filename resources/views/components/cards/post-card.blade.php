@props([
  "url_img",
  "title",
  "content"
])
<div class="maw-w-md shadow-xl">
  <div class="shadow"></div>
  <img src="{{ asset('storage/' .$url_img) }}" alt="{{$title}} class=''">
  <div class="p-4 min-h-[280px]">
    <p class="pb-4 font-bold text-2xl">{{$title}}</p>
    <p class="">{{ Str::substr($content, 0,90 ) }}</p>
  </div>
</div>
