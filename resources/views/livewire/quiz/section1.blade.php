<div class="relative min-h-screen">
    <div class="absolute -left-full z-50">{{ $sub }}</div>
    @switch($page)
        @case(0)
            <x-quiz-page class="page-0 absolute top-0 left-0 animate
                {{ $page==0?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} ">

                <img src="{{ asset('images/img_0-1.svg') }}" class="max-w-[80%] m-auto" />
                <img src="{{ asset('images/img_0-2.svg') }}" class="max-w-[80%] m-auto" />

                <x-slot:footer>
                    <x-button class="btn-tab" wire:click="page(1)" />
                </x-slot:footer>
            </x-quiz-page>
            @break
        @case(1)
            <x-quiz-page class="page-0 absolute top-0 left-0 animate
                {{ $page==1?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} ">
                <div class="mb-8 mt-4 text-center">
                    <x-timestamp date=true time=false />
                </div>
                <div wire:poll="sub" class="{{$sub==3?'invisible':''}}"></div>
                    @if ($sub>=1)
                    <x-chat-bubble text="สวัสดี..." time=true size="lg" direction="left" />
                    @endif
                    @if ($sub>=2)
                <x-chat-bubble text="อายุเท่าไหร่?" time=true size="lg" direction="left" />
                @endif
                @if ($sub>=3)
                <x-chat-bubble time=true size="lg" direction="right" >
                    <x-input label="Age" placeholder="your name" wire:model="data.age" autofocus require />
                </x-chat-bubble>
                @endif

                @if ($sub>=4)
                @isset($data['age'])
                    <x-chat-bubble text="ถ้าพร้อมแล้ว กด “GO” เลยค่ะสาว" time=true size="lg" direction="left" />
                @endisset
                @endif


                @if ($sub>=5)
                <x-slot:footer>
                    @isset ($data['age'])
                    <x-button label="GO!" class="btn-go" wire:click="page(2)" />
                    @endisset
                </x-slot:footer>
                @endif
            </x-quiz-page>
            @break
        @case(2)
            <x-quiz-page class="page-0 absolute top-0 left-0 animate
                {{ $page==2?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} ">
                <div class="text-3xl text-center my-4">
                            เธอรู้สึกกังวลเกี่ยวกับ “การเป็นประจําเดือน” เรื่องไหนบ้าง
                        </div>
                        <span class="bubble border">ตอบได้มากกว่า 1 ข้อ</span>
                        <div class="checkbox btn-ans"><x-checkbox id="lg-1" lg wire:model="data.checkbox.1" value="1" label="ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน" /></div>
                        <div class="checkbox btn-ans"><x-checkbox id="lg-2" lg wire:model="data.checkbox.2" value="2" label="สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว" /></div>
                        <div class="checkbox btn-ans"><x-checkbox id="lg-3" lg wire:model="data.checkbox.3" value="3" label="ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน" /></div>
                <x-slot:footer>
                    <x-button label="GO!" class="btn-go" wire:click="page(3)" />
                </x-slot:footer>
            </x-quiz-page>
            @break
        @case(3)
            <x-quiz-page class="page-0 absolute top-0 left-0 animate
                {{ $page==3?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} ">
                <div class="text-3xl text-center my-4">
                            แล้วเรื่องไหนส่งผลกระ ทบ และเป็นปัญหากับ ชีวิตเธอมากที่สุด
                        </div>

                        <span class="bubble border">ตอบได้เพียง 1 ข้อ</span>
                        @isset($data['checkbox'][1])
                        <div class="radio btn-ans"><x-radio id="radio-1" name="radio" wire:model="data.radio" lg value="1" label="ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน" /></div>
                        @endisset
                        @isset($data['checkbox'][2])
                        <div class="radio btn-ans"><x-radio id="radio-2" name="radio" wire:model="data.radio" lg value="2" label="สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว" /></div>
                        @endisset
                        @isset($data['checkbox'][3])
                        <div class="radio btn-ans"><x-radio id="radio-3" name="radio" wire:model="data.radio" lg value="3" label="ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน" /></div>
                        @endisset
                <x-slot:footer>
                    <x-button label="GO!" class="btn-go" wire:click="emitData" />
                </x-slot:footer>
            </x-quiz-page>
            @break

        @default

    @endswitch








</div>
