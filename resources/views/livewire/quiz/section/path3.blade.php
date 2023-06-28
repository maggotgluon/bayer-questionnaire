<div>
    
    {{-- <div class="absolute top-0 left-0 bg-white z-50 hover:opacity-0">
        data: {{ var_export($data) }}<br>
        page: {{ var_export($page) }}
    </div> --}}
    @switch($page)
    @case(0)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="text-xs text-white text-center">อาการก่อนเป็นประจําเดือน</div>
        <x-chat-bubble text="ประจําเดือนขาดหาย
        เหมือนทักไป
        ไลน์ไม่ตอบ" size="lg" direction="center" />
        <img src="{{ asset('images/img_3-1.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @case(1)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            {{$data['question-1']}}
        </div>
        <div class="text-xs text-yellow-400 text-center">นับจากวันแรกที่มีประจําเดือนล่าสุด</div>
        <div class="radio btn-ans"><x-radio id="q-1-1" lg wire:model="data.q-1" value="1" label="{{$raw['answer-1']['1']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-1-2" lg wire:model="data.q-1" value="2" label="{{$raw['answer-1']['2']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-1-3" lg wire:model="data.q-1" value="3" label="{{$raw['answer-1']['3']}}" /></div>

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @case(2)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            {{$data['question-2']}}
        </div>
        <span class="bubble border">ตอบได้มากกว่า 1 ข้อ</span>

        <div class="checkbox btn-ans"><x-checkbox id="q-2-1" lg wire:model="data.q-2.1" value="1" label="{{$raw['answer-2']['1']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-2" lg wire:model="data.q-2.2" value="2" label="{{$raw['answer-2']['2']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-3" lg wire:model="data.q-2.3" value="3" label="{{$raw['answer-2']['3']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-4" lg wire:model="data.q-2.4" value="4" label="{{$raw['answer-2']['4']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-5" lg wire:model="data.q-2.5" value="5" label="{{$raw['answer-2']['5']}}" /> </div>
        
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @case(3)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="bubble center w-3/4">
            ทําไมเหมือน
            เป็นผู้ชายเลย
            ทั้งผิวมัน ขนดก
            ผมร่วง เห้ออ
        </div>
        <img src="{{ asset('images/img_3-2.svg') }}" class="max-w-[80%] m-auto" />
        
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @case(4)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="bubble center w-3/4">
            {{$data['question-4']}}
        </div>

        <div class="radio btn-ans"><x-radio id="q-4-1" lg wire:model="data.q-4" value="1" label="{{$raw['answer-4']['1']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-2" lg wire:model="data.q-4" value="2" label="{{$raw['answer-4']['2']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-3" lg wire:model="data.q-4" value="3" label="{{$raw['answer-4']['3']}}" /></div>
        
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @case(5)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="bubble left">
            PCOS คืออะไร
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>

        <div class="bubble left">
            <P class="text-base">
                PCOS ภาวะถุงนําในรังไข่หลายใบหรือที่
                คนทั่วไปเรียกซีสต์ในรังไข่ เป็นความผิด
                ปกติของต่อมไร้ท่อ หรือระบบฮอร์โมน
                ของเธอ ซึ่งสิงผิดปกติคือจะพบถุงนํา
                หลายใบในรังไข่ ส่งผลให้ประจําเดือนขาด
                แต่มีอาการร่วมสําคัญคือ ผมร่วง ขนดก
                สิวเห่อ หน้ามัน น้ำหนักเพิ่ม
            </P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                วิธีการรักษามีทั้งแบบไม่ใช้ยา
                และแบบใช้ยา</P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                แบบไม่ใช้ยา
                ปรับเปลี่ยนชีวิตประจําวัน เนื่องจากอาจ
                เกิดภาวะนําหนักเกิน ควบคุมนําหนักอย่าง
                เคร่งครัด
                แบบใช้ยา
                ทานยาปรับฮอร์โมน ชนิด EE35C เพื่อ
                ปรับสมดุล และต้านฤทธิฮอร์โมนเพศชาย
                โดยปรึกษาแพทย์หรือเภสัชกร</P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <aside class="float-right px-2 text-xs mb-4">
            ที่มา : <a href="https://bit.ly/3Wyxzet">https://bit.ly/3Wyxzet</a>
        </aside>
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @case(6)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="bubble center">
            รอ(ประจําเดือน)นานๆ
            ก็อาจบันทอนหัวใจ
            แถมผมร่วง ช่วงเศร้า
            สิวเห่ออีก
        </div>

        <div class="bubble center">
            รอนานโปรดรีบเข้าใจ
            มาดูผลลัพธ์กัน
        </div>

        <img src="{{ asset('images/img_3-3.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    @default
    @endswitch
</div>
