<div class="w-full m-auto min-h-screen h-auto relative page page-0">
    
    <div class="w-full relative">
        <livewire:quiz.result :path='1' :result='1' :age='33' />
        <livewire:quiz.result :path='1' :result='2' :age='33' />
        <livewire:quiz.result :path='1' :result='3' :age='33' />

        <livewire:quiz.result :path='2' :result='1' :age='33' />
        <livewire:quiz.result :path='2' :result='2' :age='33' />
        <livewire:quiz.result :path='2' :result='3' :age='33' />

        <livewire:quiz.result :path='3' :result='1' :age='33' />
        <livewire:quiz.result :path='3' :result='2' :age='33' />
        <livewire:quiz.result :path='3' :result='3' :age='33' />
        @switch($step)
        @case('0')
        <livewire:quiz.section.path0/>
        @break
        @case('1')
        <livewire:quiz.section.path1/>
        @break
        @case('2')
        <livewire:quiz.section.path2/>
        @break
        @case('3')
        <livewire:quiz.section.path3/>
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
            default
            {{-- {{var_export($step)}} --}}
        @endswitch
    </div>


</div>
