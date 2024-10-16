@props([
    'variant' => 'outline',
])

@php
    $classes = [];

    // Common classes
    $classes[] = 'shrink-0';

    // Variant classes
    $classes[] = match($variant) {
        'micro' => '[:where(&)]:size-4',
        'mini' => '[:where(&)]:size-5',
        default => '[:where(&)]:size-6',
    };
@endphp

@switch ($variant)
    @case ('outline')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m11.99 16.5 3.75 3.75m0 0 3.75-3.75m-3.75 3.75V3.75H4.49"/>
        </svg>
        @break
    @case ('solid')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M3.738 3.75c0 .414.336.75.75.75H14.99v13.939l-2.47-2.47a.75.75 0 0 0-1.06 1.061l3.75 3.75a.75.75 0 0 0 1.06 0l3.751-3.75a.75.75 0 0 0-1.06-1.06l-2.47 2.469V3.75a.75.75 0 0 0-.75-.75H4.487a.75.75 0 0 0-.75.75Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
    @case ('mini')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M3 3.75c0 .414.336.75.75.75h7.5v10.94l-1.97-1.97a.75.75 0 0 0-1.06 1.06l3.25 3.25a.75.75 0 0 0 1.06 0l3.25-3.25a.75.75 0 1 0-1.06-1.06l-1.97 1.97V3.75A.75.75 0 0 0 12 3H3.75a.75.75 0 0 0-.75.75Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
    @case ('micro')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M2 2.75c0 .414.336.75.75.75h6.5v7.94l-.97-.97a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.06 0l2.25-2.25a.75.75 0 1 0-1.06-1.06l-.97.97V2.75A.75.75 0 0 0 10 2H2.75a.75.75 0 0 0-.75.75Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
@endswitch
