<div>
    @if(1==2)
    <div class="fixed top-2 left-0">
        @isset($data)
        <ul>
            @foreach ($data as $key=>$value)
            <li>
                {{ $key }} : {{ getType($value)=='array'?implode(',',$value):nl2br(e($value)) }}
            </li>
            @endforeach
        </ul>
        @endisset
    </div>
    @endif
    @switch($page)
        @case(0)
        <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==0?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->

        <div class="text-xs text-red-600 text-center">อาการก่อนเป็นประจําเดือน</div>
            <x-chat-bubble text="ดุดันไม่เกรงใจใคร เพราะร่างกาย ไม่เกรงใจเธอ" size="lg" direction="center" />
            <img src="{{ asset('images/img_1-1.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>
            @break

        @case(1)

        <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==1?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
            <div class="text-3xl text-center my-4">
                เธอดุดันระดับไหนก่อนมี
                ประจําเดือน
            </div>
            <div class="radio btn-ans"><x-radio id="q1-1-1" lg wire:model="data.q-1" value="1" label="อยากอยู่เงียบ ๆ คนเดียว" /></div>
            <div class="radio btn-ans"><x-radio id="q1-1-2" lg wire:model="data.q-1" value="2" label="ร้องไห้กับเรืองเดิมๆ" /></div>
            <div class="radio btn-ans"><x-radio id="q1-1-3" lg wire:model="data.q-1" value="3" label="อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !" /></div>

        <x-slot:footer>
            <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>
            @break

        @case(2)

        <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==2?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
            <div class="text-3xl text-center my-4">
                เธอมีความเปลียนแปลง<br>
                ทางร่างกายร่วมด้วยไหม
            </div>
            <span class="bubble border">ตอบได้มากกว่า 1 ข้อ</span>

            <div class="checkbox btn-ans"><x-checkbox id="q1-2-1" lg wire:model="data.q-2.1" value="1" label="นอนไม่หลับ ร่างกายกระสับกระส่าย" /> </div>
            <div class="checkbox btn-ans"><x-checkbox id="q1-2-2" lg wire:model="data.q-2.2" value="2" label="ตัวบวม หน้าบวม รวมๆแล้วเซ็ง" /> </div>
            <div class="checkbox btn-ans"><x-checkbox id="q1-2-3" lg wire:model="data.q-2.3" value="3" label="สิวเก่ายังไม่หาย สิวใหม่ก็มาแทรก" /> </div>
            <div class="checkbox btn-ans"><x-checkbox id="q1-2-4" lg wire:model="data.q-2.4" value="4" label="ปวดท้องน้อย มากๆ" /> </div>
            <div class="checkbox btn-ans"><x-checkbox id="q1-2-5" lg wire:model="data.q-2.5" value="5" label="ร่างกายปกติทีแสนพิเศษ" /> </div>
            <!-- <div class="checkbox btn-ans"><x-checkbox id="q1-2-6" lg wire:model="data.checkbox_1-2.6" value="6" label="" /> </div> -->
        <x-slot:footer>
            <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>
            @break

        @case(3)

        <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==3?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
            <div class="text-3xl text-center my-4 px-6">
                เธอมักจะมีอาการเหล่านี
                ก่อนเปนประจําเดือนกีวัน
            </div>
            <x-chat-bubble time=true size="lg" direction="center" >
                <div class="flex items-center gap-x-3">
                    <x-button wire:click="count(-1)" icon="minus" />
                    <!-- <x-input wire:model="data.count" /> -->
                    <span class="text-7xl min-w-[2ch]">{{ $data['q-3']??0 }}</span>
                    <x-button wire:click="count(1)" icon="plus" />
                </div>
            </x-chat-bubble>

        <x-slot:footer>
        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>
            @break

        @case(4)
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==4?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center w-3/4">
                แก้ปญหาดุดันไม่
                เกรงใจใคร
                เธอต้องเข้าใจ
                ร่างกายเธอก่อน
            </div>
            <img src="{{ asset('images/img_1-2.svg') }}" class="max-w-[80%] m-auto" />
        <x-slot:footer>
        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

            @break

        @case(5)
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==5?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center w-3/4">
                รู้จักภาวะ “PMDD” ไหม
            </div>

            <div class="radio btn-ans"><x-radio id="q1-3-1" lg wire:model="data.q-4" value="1" label="รู้จัก" /></div>
            <div class="radio btn-ans"><x-radio id="q1-3-2" lg wire:model="data.q-4" value="2" label="ไม่แน่ใจ" /></div>
            <div class="radio btn-ans"><x-radio id="q1-3-3" lg wire:model="data.q-4" value="3" label="ไม่รู้จัก" /></div>
        <x-slot:footer>
        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

            @break

        @case(6)
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==6?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
            <div class="bubble left">
                PMDD คืออะไร
                <x-badge class="time absolute bottom-0" label="99-May-2023" />
            </div>

            <div class="bubble left">
                <P class="text-base">
                    คือ กลุ่มอาการรุนแรงก่อนมีประจําเดือน
                    มักทําให้เธอมีอาการผิดปกติทังทาง
                    ร่างกายจิตใจและการควบคุม
                    อารมณ์ทยีากขึนกว่าปกติ โดยอาการ
                    มักเริมก่อนมีประจําเดือน 1-2 สัปดาห์
                    ซึงผลเสียจะทําให้กระทบความสัมพันธ์
                    กับคนรอบข้าง และอาจทําให้เกิดปญหา
                    ทะเลาะใหญ่ได้
                </P>
                <x-badge class="time absolute bottom-0" label="99-May-2023" />
            </div>
            <div class="bubble left">
                <P class="text-base">
                    ระดับฮอร์โมนทีเปลียนแปลง
                    จึงต้องปรับสมดุลให้อาการดีขึน</P>
                <x-badge class="time absolute bottom-0" label="99-May-2023" />
            </div>
            <div class="bubble left">
                <P class="text-base">
                    เริมจากการปรับพฤติกรรม 1. รับประทาน
                    อาหารทีมีประโยชน์ 2. ออกกําลังกาย
                    3. ฝกจิตจัดการอารมณ์ ถ้าปรับ
                    พฤติกรรมแล้วเธอไม่ดีขึน สามารถทานยา
                    ปรับฮอร์โมนชนิด EE20D ทีช่วยปรับ
                    สมดุลฮอร์โมนร่างกายและปรึกษาแพทย์
                    เภสัช หรือผู้เชียวชาญเพือร่วมกันหา
                    ทางออกก่อนทีเธอจะไปดุดันใส่ใครโดยไม่
                    ได้ตงัใจน้า</P>
                <x-badge class="time absolute bottom-0" label="99-May-2023" />
            </div>

        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

            @break

        @case(7)
    <x-quiz-page class="page-1  top-0 left-0 animate">
        <!--  $page==7?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
            <div class="bubble center">
                แค่เธอเข้าใจร่างกาย
                ความดุดัน
                ก็กลายเปนมิตร
            </div>

            <div class="bubble center">
                เปนมิตรอย่างเข้าใจ
                ปรึกษาเพิมเติมได้ที..
            </div>

            <img src="{{ asset('images/img_1-3.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
        <button class="btn-tab"  wire:click="updateScore" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

            @break

        @case(8)


            @break

        @case(9)

            @break

        @default

    @endswitch


    <script>
        document.addEventListener('livewire:load', function () {
            // Your JS here.

            function saveimg (){
                html2canvas(document.getElementById('content') )
                    .then(function(canvas){
                        var imgData = canvas.toDataURL('image/png').replace("image/png", "image/octet-stream");
                        console.log(imgData);
                        window.location.href=imgData;
                    }
                )
            }
        })
    </script>




</div>
