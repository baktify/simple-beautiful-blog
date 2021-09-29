@props(['active'])

@php
$classes = $active ?? false
        ? "uppercase font-medium text-green-600"
        : "uppercase font-medium text-gray-500 hover:text-gray-800";
@endphp

<a {{$attributes->merge(['class' => $classes])}}>{{$slot}}</a>