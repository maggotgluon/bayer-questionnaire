<div class="w-full m-auto min-h-screen h-auto relative page page-0">
    @auth
        <span class="absolute top-2 right-2 z-50">
            <x-button label="admin dashboard" href="{{route('overview')}}" />
        </span>    
    @endauth
    <div class="w-full relative">
        {{-- <livewire:quiz.result :path='1' :result='2' :age='33' />
        <livewire:quiz.result :path=1 :result=3 :age='33' />
        <livewire:quiz.result :path='1' :result='1' :age='33' />
        
        <livewire:quiz.result :path='2' :result='1' :age='33' />
        <livewire:quiz.result :path='2' :result='2' :age='33' />
        <livewire:quiz.result :path='2' :result='3' :age='33' />
        
        <livewire:quiz.result :path='3' :result='1' :age='33' />
        <livewire:quiz.result :path='3' :result='2' :age='33' />
        <livewire:quiz.result :path='3' :result='3' :age='33' /> --}}
        @switch($step)
        @case('0')    
        <livewire:quiz.section.path0 class="section" id="path0"/>
        @break
        @case('1')
        <livewire:quiz.section.path1 class="section" id="path1"/>
        @break
        @case('2')
        <livewire:quiz.section.path2 class="section" id="path2"/>
        @break
        @case('3')
        <livewire:quiz.section.path3 class="section" id="path3"/>
        @break
        @case('result')
            
            @isset($result)
            <livewire:quiz.result
                :data='$data'
                :path='$result->type'
                :result='$result->result'
                :age='$result->ages' />
            @endisset
            {{-- <p>type : {{var_export($result->type)}}<br>
            result : {{var_export($result->result)}}<br>
            ages : {{var_export($result->ages)}}</p> --}}
            
        @break

        @default
            default
            {{-- {{var_export($step)}} --}}
        @endswitch
    </div>


</div>
