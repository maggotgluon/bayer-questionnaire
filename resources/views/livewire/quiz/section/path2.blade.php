<div>

    {{-- <div class="absolute top-0 left-0 bg-white z-50 hover:opacity-0">
        data: {{ var_export($data) }}<br>
        page: {{ var_export($page) }}
    </div> --}}
    @switch($page)
    @case(0)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="text-xs text-white text-center">อาการก่อนเป็นประจําเดือน</div>
        <x-chat-bubble text="เห็นสิวแล้วเศร้า เพราะความมั่นใจ ลดลง" size="lg" direction="center" />
        <img src="{{ asset('images/img_2-1.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break
    
    @case(1)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            {{$data['question-1']}}
        </div>
        <span class="bubble border whitespace-nowrap">ตอบได้มากกว่า 1 ข้อ</span>
        <x-errors />

        <span class="block h-[max(70vh,500px)]"></span>
        <div class="absolute bottom-0 left-0 right-0 max-w-md mx-auto ">
            <div class="relative">
                <img src="{{ asset('images/img_2-2.svg') }}" class="max-w-full m-auto" />
                <div class="absolute top-[5%] left-[15%] right-[35%]">
                    <div class="grid grid-cols-3 ">
                        <span></span>
                        <div class="checkbox btn-invisible relative aspect-square rounded-full"><x-checkbox label=' ' id="q-1-1" lg wire:model="data.q-1.1" value="1" /></div>
                        <span></span>
                    </div>
                    <div class="grid grid-cols-3 mt-[25%]">
                        <div class="checkbox btn-invisible relative aspect-square rounded-full"><x-checkbox label=' ' id="q-1-2" lg wire:model="data.q-1.2" value="2" /> </div>
                        <div class="checkbox btn-invisible relative aspect-square rounded-full"><x-checkbox label=' ' id="q-1-3" lg wire:model="data.q-1.3" value="3" /></div>
                        <div class="checkbox btn-invisible relative aspect-square rounded-full"><x-checkbox label=' ' id="q-1-2" lg wire:model="data.q-1.2" value="2" /> </div>
                    </div>
                    <div class="grid grid-cols-3 mt-[20%]">
                        <span></span>
                        <div class="checkbox btn-invisible relative aspect-square rounded-full"><x-checkbox label=' ' id="q-1-4" lg wire:model="data.q-1.4" value="4" /></div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(2)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">

        <div class="text-3xl text-center my-4">
            {{$data['question-2']}}
        </div>
        <span class="bubble border whitespace-nowrap">ตอบได้มากกว่า 1 ข้อ</span>
        <x-errors />

        <div class="checkbox btn-ans"><x-checkbox id="q-2-1" lg wire:model="data.q-2.1" value="1" 
            label="{{$raw['answer-2']['1']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-2" lg wire:model="data.q-2.2" value="2" 
            label="{{$raw['answer-2']['2']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-3" lg wire:model="data.q-2.3" value="3" 
            label="{{$raw['answer-2']['3']}}" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-4" lg wire:model="data.q-2.4" value="4" 
            label="{{$raw['answer-2']['4']}}" /> </div>
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(3)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            {{$data['question-3']}}
        </div>
        <div class="radio btn-ans"><x-radio id="q-3-1" lg wire:model="data.q-3" value="1" 
            label="{{$raw['answer-3']['1']}}" /></div>
        <div class="radio btn-ans"><x-radio id="q-3-2" lg wire:model="data.q-3" value="2" 
            label="{{$raw['answer-3']['2']}}" /></div>

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(4)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="bubble center w-3/4">
            เข้าใจสิว
            แล้วจะไม่เศร้า
        </div>
        <img src="{{ asset('images/img_2-3.svg') }}" class="max-w-[80%] m-auto" />
        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(5)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">
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
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="bubble left">
            สิวฮอร์โมนคืออะไร
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>

        <div class="bubble left">
            <P class="text-base">
                เป็นสิวที่เกิดจากการเปลี่ยนแปลงของ
                ฮอร์โมน ซึ่งจะขึ้นซํ้าๆ ที่เดิมบริเวณกราม
                และคาง จะสร้างความกังวลใจให้เธอใน
                ทุก ๆ เดือน ซึ่งสิวฮอร์โมนส่วนใหญ่จะ
                เป็น สิวตุ่มหนอง สิวหัวช้าง
                <span class="grid grid-cols-2">
                    <span>
                        <img src="{{asset('images/piple-1.jpg')}}" />
                        สิวตุ่มหนอง
                    </span>
                    <span>
                        <img src="{{asset('images/piple-2.jpg')}}" />
                        สิวหัวช้าง
                    </span>
                </span>
            </P>
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                วิธีการรักษาสิวฮอร์โมนนั้นก็ทําได้
                หลายวิธี</P>
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                เริมจากการปรับพฤติกรรม
                1. ใช้ยารักษาสิว<br>
                2. รักษาสิวฮอร์โมนแบบธรรมชาติด้วย
                นํามันทีทรีออยล์ หรือดื่มชาเขียว<br>
                3. หลีกเลียงอาหารที่ส่งผลกับสิวฮอร์โมน
                เช่น ขนม เค้ก ข้าวขาว<br>
                แต่ถ้าสาเหตุของสิวฮอร์โมนเกิดจากการ
                เปลี่ยนแปลงของฮอร์โมน เราสามารถ
                ทานยาที่ช่วยปรับฮอร์โมนให้สมดุลได้ด้วย
                เช่น ยาปรับฮอร์โมน EE30D ที่ช่วยปรับ
                สมดุลฮอร์โมนให้เธอได้ โดยปรึกษาแพทย์
                หรือเภสัชกร เพื่อร่วมกันหาทางออก</P>
            <x-badge flat  class="time absolute bottom-0" label="{{now()->todateString()}}" />
        </div>
        <aside class="float-right px-2 text-xs mb-4">
            ที่มา : <a href="https://bit.ly/4347XZk">https://bit.ly/4347XZk</a>
        </aside>

        <x-slot:footer>
            <button class="btn-tab" type="submit">
            </button>
        </x-slot:footer>
    </x-quiz-page>
    </form>
    @break

    @case(7)
    <form wire:submit.prevent="next">
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="bubble center">
            เปลี่ยนสิวเศร้า
            เป็นหน้าใส
        </div>

        <div class="bubble center">
            ลดสิวฮอร์โมนอย่าง
            เข้าใจ
            มาดูผลลัพธ์กัน
        </div>

        <img src="{{ asset('images/img_2-4.svg') }}" class="max-w-[80%] m-auto" />

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
