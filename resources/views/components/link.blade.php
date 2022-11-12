@props(['active', 'href'])
@php
  $refe = ($active ?? false)
    ? '#'
    : $href;
  $classes = ($active ?? false)
    ? 'cursor-not-allowed text-sm text-zinc-400 focus:text-red-700 ml-4'
    : 'ml-4 underline text-sm text-zinc-600 hover:text-zinc-900 focus:text-zinc-400';
@endphp
<a {{ $attributes->merge(['class' => $classes])}} href="{{$refe}}">
  {{$slot}}
</a>