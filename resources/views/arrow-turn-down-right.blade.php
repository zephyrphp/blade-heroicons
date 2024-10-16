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
                  d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499"/>
        </svg>
        @break
    @case ('solid')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M3.74 3.749a.75.75 0 0 1 .75.75V15h13.938l-2.47-2.47a.75.75 0 0 1 1.061-1.06l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 0 1-1.06-1.06l2.47-2.47H3.738a.75.75 0 0 1-.75-.75V4.5a.75.75 0 0 1 .75-.751Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
    @case ('mini')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M3.75 3a.75.75 0 0 1 .75.75v7.5h10.94l-1.97-1.97a.75.75 0 0 1 1.06-1.06l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 1 1-1.06-1.06l1.97-1.97H3.75A.75.75 0 0 1 3 12V3.75A.75.75 0 0 1 3.75 3Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
    @case ('micro')
        <svg {{ $attributes->class($classes) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
             fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M2.75 2a.75.75 0 0 1 .75.75v6.5h7.94l-.97-.97a.75.75 0 0 1 1.06-1.06l2.25 2.25a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 1 1-1.06-1.06l.97-.97H2.75A.75.75 0 0 1 2 10V2.75A.75.75 0 0 1 2.75 2Z"
                  clip-rule="evenodd"/>
        </svg>
        @break
@endswitch
