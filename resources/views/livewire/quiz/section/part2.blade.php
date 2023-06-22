<div>

    @switch($page)
    @case(0)
    <x-quiz-page class="page-2  top-0 left-0 animate" id="content">
        <div class="text-xs text-white text-center">อาการก่อนเป็นประจําเดือน</div>
        <x-chat-bubble text="เห็นสิวแล้วเศร้า เพราะความมันใจ ลดลง" size="lg" direction="center" />
        <img src="{{ asset('images/img_2-1.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(1)

    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            สิวขึ้นบริเวณไหนก่อนมีประจำเดือน
        </div>
        <span class="bubble border">ตอบได้มากกว่า 1 ข้อ</span>
        <span class="block h-[clamp(150px, 100vw, 500px)]"></span>
        <div class="absolute bottom-0 left-0 right-0 max-w-md mx-auto">
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
        <!-- <div class="checkbox btn-ans"><x-checkbox id="q-1-6" lg wire:model="data.checkbox_1-2.6" value="6" label="" /> </div> -->
        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(2)
    <!-- check -->
    <x-quiz-page class="page-2  top-0 left-0 animate">

        <div class="text-3xl text-center my-4">
            สิวประเภทไหนทีขึนบน
            ใบหน้าก่อนมีประจําเดือน
        </div>
        <span class="bubble border">ตอบได้มากกว่า 1 ข้อ</span>

        <div class="checkbox btn-ans"><x-checkbox id="q-2-1" lg wire:model="data.q-2.1" value="1" label="สิวอุดตันหัวดํา" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-2" lg wire:model="data.q-2.2" value="2" label="สิวอุดตันหัวขาว" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-3" lg wire:model="data.q-2.3" value="3" label="สิวตุ่มหนอง" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-4" lg wire:model="data.q-2.4" value="4" label="สิวหัวช้าง" /> </div>
        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(3)
    <!-- radio -->
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            สิวขึนซําบริเวณเดิมหรือ
            ไม่ ก่อนมีประจําเดือน
        </div>
        <div class="radio btn-ans"><x-radio id="q-3-1" lg wire:model="data.q-3" value="1" label="ทีเดิม! สิวเก่าไม่ทันหาย สิวใหม่มาอีกละ" /></div>
        <div class="radio btn-ans"><x-radio id="q-3-2" lg wire:model="data.q-3" value="2" label="สิวเปลียนทีขึนไม่ซํา จําโซนไม่ได้" /></div>

        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(4)
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <!--  $page==4?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center w-3/4">
            เข้าใจสิว
            แล้วจะไม่เศร้า
        </div>
        <img src="{{ asset('images/img_2-3.svg') }}" class="max-w-[80%] m-auto" />
        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(5)

    <x-quiz-page class="page-2  top-0 left-0 animate">
        <!--  $page==5?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center w-3/4">
            รู้จัก “สิวฮอร์โมน”
            ไหม
        </div>

        <div class="radio btn-ans"><x-radio id="q-4-1" lg wire:model="data.q-4" value="1" label="รู้จัก" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-2" lg wire:model="data.q-4" value="2" label="ไม่แน่ใจ" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-3" lg wire:model="data.q-4" value="3" label="ไม่รู้จัก" /></div>
        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(6)
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <!--  $page==6?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble left">
            สิวฮอร์โมนคืออะไร
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>

        <div class="bubble left">
            <P class="text-base">
                เปนสิวทีเกิดจากการเปลียนแปลงของ
                ฮอร์โมน ซึงจะขึนซําๆ ทีเดิมบริเวณกราม
                และคาง จะสร้างความกังวลใจให้เธอใน
                ทุก ๆ เดือน ซึงสิวฮอร์โมนส่วนใหญ่จะ
                เปน สิวตุ่มหนอง สิวหัวช้าง
                <span class="grid grid-cols-2">
                    <span>

                        สิวตุ่มหนอง
                    </span>
                    <span>
                        สิวหัวช้าง
                    </span>
                </span>
            </P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                วิธีการรักษาสิวฮอร์โมนนันก็ทําได้
                หลายวิธี</P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                เริมจากการปรับพฤติกรรม
                1. ใช้ยารักษาสิว
                2. รักษาสิวฮอร์โมนแบบธรรมชาติด้วย
                นํามันทีทรีออยล์ หรือดืมชาเขียว
                3. หลีกเลียงอาหารทีส่งผลกับสิวฮอร์โมน
                เช่น ขนม เค้ก ข้าวขาว
                แต่ถ้าสาเหตุของสิวฮอร์โมนเกิดจากการ
                เปลียนแปลงของฮอร์โมน เราสามารถ
                ทานยาทีช่วยปรับฮอร์โมนให้สมดุลได้ด้วย
                เช่น ยาปรับฮอร์โมน EE30D ทีช่วยปรับ
                สมดุลฮอร์โมนให้เธอได้ โดยปรึกษาแพทย์
                หรือเภสัชกร เพือร่วมกันหาทางออก</P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <aside class="float-right px-2 text-xs">
            ทีมา : <a href="https://bit.ly/4347XZk">https://bit.ly/4347XZk</a>
        </aside>
        <x-slot:footer>

        <button class="btn-tab"  wire:click="page" >
            </button>
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(7)
    <x-quiz-page class="page-2  top-0 left-0 animate">
        <!--  $page==7?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center">
            เปลียนสิวเศร้า
            เปนหน้าใส
        </div>

        <div class="bubble center">
            ลดสิวฮอร์โมนอย่าง
            เข้าใจ
            มาดูผลลัพธ์กัน
        </div>

        <img src="{{ asset('images/img_2-4.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
        <button class="btn-tab"  wire:click="updateScore" >
            </button>
        </x-slot:footer>
    </x-quiz-page>


    @break

    @case(8)

    <x-quiz-page class="page-2  top-0 left-0 animate">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets5.lottiefiles.com/datafiles/zc3XRzudyWE36ZBJr7PIkkqq0PFIrIBgp4ojqShI/newAnimation.json" background="transparent" speed="1" style="width: 300px; height: 300px;" autoplay></lottie-player>
        <!--  $page==8?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        @isset($data['score'])
        @if ( $data['score'] <= 2) <div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
            <h3 class="text-3xl text-center">สาวสมดุล</h3>
            <img src="{{ asset('images/result_img_1-1.png') }}" class="max-w-[80%] m-auto" />
            <div class="relative">
                <img src="{{ asset('images/result_bar.png') }}" class="max-w-[80%] m-auto" />
                <!-- 25 50 75 -->
                <img src="{{ asset('images/result_1.png') }}" class="w-10 m-auto absolute left-1/3 top-1/4 -translate-x-1/2 -translate-y-1/2" />
            </div>
            <p class="text-center">Age : xx</p>
            <p>
                สาวสมดุล เพราะอาการก่อนมีประจําเดือน
                ของเธออยู่ในเกณฑ์ทีไม่เสียง ต้องรอดู
                อาการทังทางร่างกาย และจิตใจ แต่ยังไงก็
                หมันสังเกตตัวเองเสมอนะสาว
            </p>
</div>
@elseif ( $data['score'] == 3)
<div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
    <h3 class="text-3xl text-center">สาวนักแปร (ปรวน)</h3>
    <img src="{{ asset('images/result_img_1-2.png') }}" class="max-w-[80%] m-auto" />
    <div class="relative">
        <img src="{{ asset('images/result_bar.png') }}" class="max-w-[80%] m-auto" />
        <!-- 25 50 75 -->
        <img src="{{ asset('images/result_2.png') }}" class="w-10 m-auto absolute left-1/2 top-1/4 -translate-x-1/2 -translate-y-1/2" />
    </div>
    <p class="text-center">Age : xx</p>
    <p>
        สาวนักแปร (ปรวน) เริมมีอารมณ์
        แปรปรวน วิตกกังวล อ่อนไหวช่วงก่อนมี
        ประจําเดือน ทําให้เริมส่งผลต่อชีวิตประจํา
        วัน เธออย่าชะล่าใจ รีบปรึกษาผู้เชียวชาญ
        นะสาว
    </p>
</div>
@elseif ( $data['score'] >= 4)
<div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
    <h3 class="text-3xl text-center">สาวดุดัน ไม่เกรงใจใคร</h3>
    <img src="{{ asset('images/result_img_1-3.png') }}" class="max-w-[80%] m-auto" />
    <div class="relative">
        <img src="{{ asset('images/result_bar.png') }}" class="max-w-[80%] m-auto" />
        <!-- 25 50 75 -->
        <img src="{{ asset('images/result_3.png') }}" class="w-10 m-auto absolute left-2/3 top-1/4 -translate-x-1/2 -translate-y-1/2" />
    </div>
    <p class="text-center">Age : xx</p>
    <p>
        สาวดุดัน ไม่เกรงใจใคร อาการก่อนมีประจํา
        เดือนของเธอ มีความผิดปกติทังทาง
        ร่างกายและจิตใจทีควบคุมได้ยาก เธอต้อง
        รีบปรึกษาผู้เชียวชาญได้แล้วนะสาว
    </p>
</div>
@endif
@endisset


<x-slot:footer>
    <div class="grid w-3/5 m-auto">
        <x-button label="click" wire:click="$emitSelf('screenshot')" />
        <x-button label="click" wire:click="screenshot" />
        <a class="btn-ans p-4 text-center text-2xl" wire:click="$emitSelf('screenshot')"><span><x-icon name="x" class="w-8 inline-block" />Save Photo</span></a>
        <a class="btn-ans p-4 text-center text-2xl"><span><x-icon name="x" class="w-8 inline-block" />Share Quiz</span></a>
    </div>
</x-slot:footer>
</x-quiz-page>

@break

@default

@endswitch


<script>
    document.addEventListener('livewire:load', function() {
        console.log('loaded')

        html2canvas(document.getElementById('content'))
            .then(function(canvas) {
                var imgData = canvas.toDataURL('image/png').replace("image/png", "image/octet-stream");
                console.log(imgData);
                window.location.href = imgData;
            })
        Livewire.on('screenshot', () => {
            console.log('click')
            alert('A post was added with the id of: ');
        })
    })
    window.addEventListener('name-updated', event => {
        // alert('Name updated to: ' + event.detail.newName);
        html2canvas(document.getElementById('content'), {
            onrendered: function(canvas) {
                var imgData = canvas.toDataURL('image/png').replace("image/png", "image/octet-stream");
                // console.log(imgData);
                // window.location.href=imgData;

                var a = document.createElement('a');
                a.href = imgData;
                a.download = 'test.png';
                document.body.appendChild(a);
                a.click();
            }
        })
    })
</script>
</div>
