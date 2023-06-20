
<div class="flex gap-2 items-center text-xl -mr-4 my-4 relative transition-all
    {{$active?'bg-zinc-200 text-indigo-700':'bg-transparent hover:bg-zinc-200/70'}}">
    <a href="{{ $href }}" class="w-full flex gap-2 px-8 py-4 transition-all
    hover:text-indigo-700">
    <span class="absolute top-0 bottom-0 left-0 w-2 bg-white {{$active?'':'hidden'}}"></span>
    <x-icon name="{{$icon}}" style="{{$active?'solid':'outline'}}" class="w-8 h-auto" />
    <span class="hidden md:inline-block">{{$label}}</span>
    </a>
</div>
