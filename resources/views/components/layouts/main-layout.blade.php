{{-- Première étape de la création de se projet --}}

@props([
  "title"
])
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MitoBlog | {{$title}}</title>
  <!--import Tailwind-->
  @vite('resources/css/app.css')
</head>
<body>
  @include("partials.navbar._nav")
  
  {{$slot}}
</body>
</html>
