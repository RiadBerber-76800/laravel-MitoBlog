@props([
  "url_img",
  "title",
  "content"
])
<div class="">
  <img src="{{$url_img}}" alt="{{$title}} class=''">
  <div class="p-4 min-h-[280px]">
    <p class="pb-4 font-bold text-2xl">{{$title}}</p>
    <p class="">{{ Str::substr($content, 0,90 ) }}</p>
  </div>
</div>
