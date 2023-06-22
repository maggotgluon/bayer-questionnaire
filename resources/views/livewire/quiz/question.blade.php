<div class="w-full m-auto border border-black min-h-screen h-auto relative">
    <div class="fixed top-2 right-0">
        @isset($data)
            @foreach ($data as $key=>$value)
                @if(is_array($value))
                    {{ $key }} : {{ json_encode($value) }}
                @else
                    {{ $key }} : {{ $value }}
                @endif
            @endforeach
        @endisset
    </div>
    <div class="w-full bg-pink-300 relative">

        @switch($step)
        @case(0)
        <livewire:quiz.section1/>
        @break
        @case('1')
        <livewire:quiz.section.part1/>
        @break
        @case('2')
        <livewire:quiz.section.part2/>
        @break
        @case('3')
        <livewire:quiz.section.part3/>
        @break
        @case('result')
            @isset($result)
            <livewire:quiz.result
                :path='$result->type'
                :result='$result->result'
                :age='$result->ages' />


            @endisset
        @break

        @default


        @endswitch
    </div>


</div>
