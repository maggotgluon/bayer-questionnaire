@props([
    'text',
    'date',
    'time',
    'size',
    'direction'
])
<div {{ $attributes->merge(['class' => 'bubble '.$direction]) }}>
    @isset($text)
    {{ $text }}
    @endisset

    {{ $slot }}
    @isset($time)
        <x-timestamp class="absolute bottom-0 time"/>
    @endisset
</div>
