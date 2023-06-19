@props([
    'date'=>$date??'false',
    'time'=>$time??'true',
])
<div {{ $attributes->merge(['class' => 'text-xs p-1 border border-black bg-white rounded-full w-fit m-auto']) }}>
    @if($date=='true')
        {{ now()->toDateString() }}
    @endif

    @if($time=='true')
        {{ now()->toTimeString() }}
    @endif
</div>
