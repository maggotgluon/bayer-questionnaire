@props([
    'heading',
    'footer',
])
<section {{ $attributes->merge(['class' => 'page page-0 relative']) }}>
    <div class="main">
    {{ $slot }}
    </div>

    @isset($footer)
        <footer class="flex justify-end">
            {{ $footer }}
        </footer>
    @endisset
    <div class="absolute bottom-2 right-6 z-50 text-2xs font-thin text-zinc-400">PP-PF-WHC-TH-0543-1(04/2023)</div>
</section>
