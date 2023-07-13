<div>
    {{-- <div class="absolute top-0 left-0 bg-white z-50">
        {{ var_export($data) }}<br>
        {{ var_export($page) }}
    </div> --}}
    @switch($page)
    @case(0)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <div class="text-xs text-red-600 text-center">อาการก่อนเป็นประจําเดือน</div>
        <x-chat-bubble text="ดุดันไม่เกรงใจใคร เพราะร่างกาย ไม่เกรงใจเธอ" size="lg" direction="center" />
        <img src="{{ asset('images/img_1-1.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>

            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(1)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            {{$data['question-1']}}
        </div>
        <span class="bubble border whitespace-nowrap">ตอบได้มากกว่า 1 ข้อ</span>
        <div class="checkbox btn-ans"><x-checkbox id="q1-1-1" lg wire:model="data.q-1" value="1" 
            label="{{$raw['answer-1']['1']}}"  /></div>
        <div class="checkbox btn-ans"><x-checkbox id="q1-1-2" lg wire:model="data.q-1" value="2" 
            label="{{$raw['answer-1']['2']}}"  /></div>
        <div class="checkbox btn-ans"><x-checkbox id="q1-1-3" lg wire:model="data.q-1" value="3" 
            label="{{$raw['answer-1']['3']}}"  /></div>

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(2)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            {{$data['question-2']}}
        </div>
        <span class="bubble border whitespace-nowrap">ตอบได้มากกว่า 1 ข้อ</span>

        <div class="checkbox btn-ans"><x-checkbox id="q-2-1" lg wire:model="data.q-2" value="1" 
            label="{{$raw['answer-2']['1']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-2" lg wire:model="data.q-2" value="2" 
            label="{{$raw['answer-2']['2']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-3" lg wire:model="data.q-2" value="3" 
            label="{{$raw['answer-2']['3']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-4" lg wire:model="data.q-2" value="4" 
            label="{{$raw['answer-2']['4']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-5" lg wire:model="data.q-2" value="5" 
            label="{{$raw['answer-2']['5']}}" /> </div>
        
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(3)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <div class="text-3xl text-center my-4 px-6">
            {{$data['question-3']}}
        </div>
        <x-chat-bubble time=true size="lg" direction="center">
            <div class="flex items-center gap-x-3">
                <x-button wire:click="count(-1)" icon="minus" />
                <!-- <x-input wire:model="data.count" /> -->
                <span class="text-7xl min-w-[2ch]">{{ $data['q-3']??0 }}</span>
                <x-button wire:click="count(1)" icon="plus" />
            </div>
        </x-chat-bubble>

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(4)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <div class="bubble center w-3/4">
            แก้ปัญหาดุดันไม่
            เกรงใจใคร
            เธอต้องเข้าใจ
            ร่างกายเธอก่อน
        </div>
        <img src="{{ asset('images/img_1-2.svg') }}" class="max-w-[80%] m-auto" />
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(5)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <div class="bubble center w-3/4">
            {{$data['question-4']}}
        </div>

        <div class="radio btn-ans"><x-radio id="q-4-1" lg wire:model="data.q-4" value="1" 
            label="{{$raw['answer-4']['1']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-2" lg wire:model="data.q-4" value="2" 
            label="{{$raw['answer-4']['2']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-3" lg wire:model="data.q-4" value="3" 
            label="{{$raw['answer-4']['3']}}" /></div>
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(6)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==6?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble left">
            PMDD คืออะไร
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>

        <div class="bubble left">
            <P class="text-base">
                คือ กลุ่มอาการรุนแรงก่อนมีประจําเดือน
                มักทําให้เธอมีอาการผิดปกติทั้งทาง
                ร่างกายจิตใจและการควบคุม
                อารมณ์ที่ยากขึ้นกว่าปกติ โดยอาการ
                มักเริ่มก่อนมีประจําเดือน 1-2 สัปดาห์
                ซึ่งผลเสียจะทําให้กระทบความสัมพันธ์
                กับคนรอบข้าง และอาจทําให้เกิดปัญหา
                ทะเลาะใหญ่ได้
            </P>
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                ระดับฮอร์โมนที่เปลี่ยนแปลง
                จึงต้องปรับสมดุลให้อาการดีขึ้น</P>
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                เริ่มจากการปรับพฤติกรรม <br>
                1. รับประทานอาหารที่มีประโยชน์ <br>
                2. ออกกําลังกาย<br>
                3. ฝึกจิตจัดการอารมณ์ <br>
                ถ้าปรับพฤติกรรมแล้วเธอไม่ดีขึ้น สามารถทานยา
                ปรับฮอร์โมนชนิด EE20D ที่ช่วยปรับ
                สมดุลฮอร์โมนร่างกายและปรึกษาแพทย์
                เภสัช หรือผู้เชี่ยวชาญเพื่อร่วมกันหา
                ทางออกก่อนที่เธอจะไปดุดันใส่ใครโดยไม่
                ได้ตังใจน้า</P>
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>

        <x-slot:footer>

            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(7)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==7?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center">
            แค่เธอเข้าใจร่างกาย
            ความดุดัน
            ก็กลายเป็นมิตร
        </div>

        <div class="bubble center">
            เป็นมิตรอย่างเข้าใจ
            มาดูผลลัพธ์กัน
        </div>

        <img src="{{ asset('images/img_1-3.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
            <button class="btn-tab" wire:click="updateScore">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @default

    @endswitch
</div>
