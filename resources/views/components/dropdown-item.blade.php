@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-pink-300 focus:bg-pink-300 hover:text-white focus:text-white';

    if($active) $classes .= ' bg-pink-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>

{{--{{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-pink-500 text-white' : '' }}--}}
