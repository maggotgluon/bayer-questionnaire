<div>
    {{-- <div class="absolute top-0 left-0 bg-white z-50">
        {{ var_export($data) }}<br>
        {{ var_export($page) }}
    </div> --}}
    @switch($page)
    @case(0)
    <form wire:submit.prevent="next">
        <x-quiz-page class="page-0 absolute top-0 left-0 animate">
            <div class="mb-8 mt-4 text-center bg-white p-4 my-16 h-full rounded-3xl">
                <h2 class="text-xl my-8">เงื่อนไขการใช้งาน</h2>
                <p class="leading-loose"> 
                    การตกลงเข้าร่วมกิจกรรมนี้ถือว่าผู้ร่วมกิจกรรมยอมรับข้อกำหนดและเงื่อนไขต่าง ๆ 
                    ในการเข้าร่วมกิจกรรมนี้ทั้งหมดและรับทราบว่า 
                    เว็บไซต์ Hormonal Quiz (ต่อไปนี้เรียกว่า “เว็บไซต์ Hormonal Quiz”) 
                    จะดำเนินการเก็บรวบรวม ใช้ เปิดเผย หรือประมวลผลข้อมูลส่วนบุคคลทั้งหลายที่ท่านได้ให้แก่เว็บไซต์ Hormonal Quiz 
                    ตามกฎหมายคุ้มครองข้อมูลส่วนบุคคล เช่น อายุ อาการด้านร่างกายและอารมณ์ 
                    โดยเว็บไซต์ Hormonal Quiz จะเก็บรักษาข้อมูลส่วนบุคคลของท่านไว้ในระยะเวลาเท่าที่จำเป็นอย่างสมเหตุสมผล 
                    เพื่อวัตถุประสงค์ในการวิเคราะห์ข้อมูลและเพื่อวางแผนทางการตลาด
                </p>
            </div>
            <x-slot:footer>
                <button class="btn-go" type="submit">
                    GO!
                </button>
            </x-slot:footer>
        </x-quiz-page>
    </form>
    @break
    @case(1)
    <form wire:submit.prevent="next">
        <x-quiz-page class="page-0 absolute top-0 left-0 animate">
            <div class="mb-8 mt-4 text-center">
                <x-timestamp date=true time=false />
            </div>

            <x-chat-bubble text="สวัสดี..." time=true size="lg" direction="left" />

            <x-chat-bubble text="อายุเท่าไหร่?" time=true size="lg" direction="left" />

            <x-chat-bubble time=true size="lg" direction="right" class="alternative">
                <x-input placeholder="กรอกอายุ" wire:model="data.age" 
                autofocus require type="number" min=10 max=99 
                class="clear" />
            </x-chat-bubble>

            <x-chat-bubble text="ถ้าพร้อมแล้ว กด “GO” เลยค่ะสาว" time=true size="lg" direction="left" />


            <x-slot:footer>
                <button class="btn-go" type="submit">
                    GO!
                </button>
            </x-slot:footer>
        </x-quiz-page>
    </form>
    @break

    @case(2)
    <form wire:submit.prevent="next">
        <x-quiz-page class="page-0 absolute top-0 left-0 animate">
            <div class="text-3xl text-center my-4">
                เธอรู้สึกกังวลเกี่ยวกับ “การเป็นประจําเดือน” เรื่องไหนบ้าง
            </div>
            <span class="bubble border whitespace-nowrap">ตอบได้มากกว่า 1 ข้อ</span>
            <div class="checkbox btn-ans"><x-checkbox id="lg-1" lg wire:model="data.check" value="1" label="ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน" /></div>
            <div class="checkbox btn-ans"><x-checkbox id="lg-2" lg wire:model="data.check" value="2" label="สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว" /></div>
            <div class="checkbox btn-ans"><x-checkbox id="lg-3" lg wire:model="data.check" value="3" label="ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน" /></div>
            <x-slot:footer>
                <button class="btn-go" type="submit">
                    GO!
                </button>
            </x-slot:footer>
        </x-quiz-page>
    </form>
    @break

    @case(3)
    <form wire:submit.prevent="next">
        <x-quiz-page class="page-0 absolute top-0 left-0 animate ">
            <div class="text-3xl text-center my-4">
                แล้วเรื่องไหนส่งผลกระทบ และเป็นปัญหากับ ชีวิตเธอมากที่สุด
            </div>

            <span class="bubble border">ตอบได้เพียง 1 ข้อ</span>
            @if(in_array('1',$data['check']))
            <div class="radio btn-ans"><x-radio id="radio-1" name="radio" wire:model="data.path" lg value="1" label="ปวดท้อง เวียนหัว ตึงเต้า อารมณ์แปรปรวน" /></div>
            @endif
            @if(in_array('2',$data['check']))
            <div class="radio btn-ans"><x-radio id="radio-2" name="radio" wire:model="data.path" lg value="2" label="สิวสาวเห่อแดง แสลงใจทุกครั้ง ที่เป็นสิว" /></div>
            @endif
            @if(in_array('3',$data['check']))
            <div class="radio btn-ans"><x-radio id="radio-3" name="radio" wire:model="data.path" lg value="3" label="ประจําเดือนที่ไม่มาประจํา ทําใจลุ้นทุกเดือน" /></div>
            @endif

            <x-slot:footer>

                <button class="btn-go" type="submit">
                    GO!
                </button>
            </x-slot:footer>
        </x-quiz-page>
    </form>
    @break

    @default
    <x-quiz-page class="page-0 absolute top-0 left-0 animate">
        <img src="{{ asset('images/img_0-1.svg') }}" class="max-w-[80%] m-auto" />
        <img src="{{ asset('images/img_0-2.svg') }}" class="max-w-[80%] m-auto" />
        <x-slot:footer>
            <button class="btn-tab" wire:click="next" />
        </x-slot:footer>
    </x-quiz-page>
    @endswitch





</div>
