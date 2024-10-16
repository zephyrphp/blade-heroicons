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
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
        </svg>
        @break
    @case ('solid')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
    @case ('mini')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
    @case ('micro')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
@endswitch
