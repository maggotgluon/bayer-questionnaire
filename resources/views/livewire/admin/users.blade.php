<div class="p-6">
    <div class="flex justify-end">
        <x-native-select
            label="Select Status"
            placeholder="Select one status"
            :options="['Active', 'Pending', 'Stuck', 'Done']"
            wire:model="model"
        />
    </div>
<div class="grid gap-4 py-2">
    @foreach ($questions as $question)
    @php

    switch ($question->result) {
            case '1':
                $result_color='bg-lime-600';
            break;
            case '2':
                $result_color='bg-yellow-500';
            break;
            case '3':
                $result_color='bg-red-400';
            break;
        }
        switch ($question->type) {
            case '1':
                $section_color='bg-lime-500';
            break;
            case '2':
                $section_color='bg-fuchsia-400';
            break;
            case '3':
                $section_color='bg-yellow-200';
            break;
        }

    @endphp
    <div class="bg-white rounded-3xl p-4 drop-shadow-lg">
        <div class="flex gap-4 whitespace-nowrap items-center my-4">
            <span class="rounded-full {{ $result_color }} w-10 h-10 aspect-square inline-block"></span>
            <span class="text-xl font-medium">ID: {{ str_pad($question->id, 5,'0',STR_PAD_LEFT) }}</span>
            <span class="text-gray-700">{{ $question->ages }} ปี</span>
            <span class="rounded-full {{ $section_color }} w-full h-4 aspect-square inline-block"></span>
            <span class="text-gray-700">{{ $question->updated_at }}</span>
        </div>

        <div class="grid md:grid-cols-5 gap-4 py-4">
             <!-- $question->answers['section1']['radio']  -->
            <div class="bg-zinc-100/40 rounded-lg p-2 text-center md:min-h-[150px]"> checkbox </div>
            <div class="bg-zinc-100/40 rounded-lg p-2 text-center md:min-h-[150px]">
            <h5 class="font-medium">{{ $question->answers['section_part']['question-1'] }}</h5>
                <ul>
                @foreach ($question->answers['section_part']['answer-1'] as $ans)
                    <li>{{ $ans }}</li>
                @endforeach
                </ul>

            </div>
            <div class="bg-zinc-100/40 rounded-lg p-2 text-center md:min-h-[150px]">
            <h5 class="font-medium">{{ $question->answers['section_part']['question-2'] }}</h5>
                <ul>
                @foreach ($question->answers['section_part']['answer-2'] as $ans)
                    <li>{{ $ans }}</li>
                @endforeach
                </ul>
             </div>
            <div class="bg-zinc-100/40 rounded-lg p-2 text-center md:min-h-[150px]">
                @isset($question->answers['section_part']['answer-3'])
                <h5 class="font-medium">{{ $question->answers['section_part']['question-3'] }}</h5>
                <ul>
                @foreach ($question->answers['section_part']['answer-3'] as $ans)
                    <li>{{ $ans }}</li>
                @endforeach
                </ul>
                @endisset
             </div>
            <div class="bg-zinc-100/40 rounded-lg p-2 text-center md:min-h-[150px]">
            <h5 class="font-medium">{{ $question->answers['section_part']['question-4'] }}</h5>
                <ul>
                @foreach ($question->answers['section_part']['answer-4'] as $ans)
                    <li>{{ $ans }}</li>
                @endforeach
                </ul>
             </div>
        </div>
    </div>
    @endforeach
</div>
{{ $questions->links() }}
</div>
