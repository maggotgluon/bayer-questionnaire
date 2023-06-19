<div>

    @switch($page)
    @case(0)
    <x-quiz-page class="page-3  top-0 left-0 animate" id="content">
        <div class="text-xs text-white text-center">อาการก่อนเป็นประจําเดือน</div>
        <x-chat-bubble text="ประจําเดือนขาดหาย
        เหมือนทักไป
        ไลน์ไม่ตอบ" size="lg" direction="center" />
        <img src="{{ asset('images/img_3-1.svg') }}" class="max-w-[80%] m-auto" />

        <x-slot:footer>
            <x-button class="btn-tab" wire:click="page" />
        </x-slot:footer>
    </x-quiz-page>


    @break

    @case(1)
    <!-- radio -->
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            ประจําเดือนของเธอ
            เปนแบบไหน
        </div>
        <div class="text-xs text-yellow-400 text-center">นับจากวันแรกทีมีประจําเดือนล่าสุด</div>
        <div class="radio btn-ans"><x-radio id="q-1-1" lg wire:model="data.q-1" value="1" label="ประจําเดือนมาห่างกันมากกว่า
        35 วัน หรือมาไม่เกิน 6-8
        รอบต่อป เปนมานานแล้ว" /></div>
        <div class="radio btn-ans"><x-radio id="q-1-2" lg wire:model="data.q-1" value="2" label="เคยมีประจําเดือนมาปกติ แต่
        ช่วงหลังประจําเดือนขาด
        ติดต่อกันเกิน 3 รอบ" /></div>
        <div class="radio btn-ans"><x-radio id="q-1-3" lg wire:model="data.q-1" value="3" label="ประจําเดือนยังมาปกติดี" /></div>

        <x-slot:footer>
            <x-button class="btn-tab" wire:click="page" />
        </x-slot:footer>
    </x-quiz-page>


    @break

    @case(2)
    <!-- check -->
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <div class="text-3xl text-center my-4">
            นอกจากประจําเดือนขาด
            เธอมีอาการอืนร่วมไหม
        </div>
        <span class="bubble border">ตอบได้มากกว่า 1 ข้อ</span>

        <div class="checkbox btn-ans"><x-checkbox id="q-2-1" lg wire:model="data.q-2.1" value="1" label="สิวเห่อ จนหน้าเธอเปลียน" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-2" lg wire:model="data.q-2.2" value="2" label="หน้ามัน ทุกวัน จันทร์-อาทิตย์" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-3" lg wire:model="data.q-2.3" value="3" label="ขนดก ตกลงเปนหญิงหรือชาย" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-4" lg wire:model="data.q-2.4" value="4" label="ผมร่วง นําตาริน" /> </div>
        <div class="checkbox btn-ans"><x-checkbox id="q-2-5" lg wire:model="data.q-2.5" value="5" label="ไม่มีอาการเปนลาภอันประเสริฐ" /> </div>
        <!-- <div class="checkbox btn-ans"><x-checkbox id="q-2-6" lg wire:model="data.checkbox_1-2.6" value="6" label="" /> </div> -->
        <x-slot:footer>
            <x-button class="btn-tab" wire:click="page" />
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(3)


    <x-quiz-page class="page-3  top-0 left-0 animate">
        <!--  $page==4?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center w-3/4">
            ทําไมเหมือน
            เปนผู้ชายเลย
            ทังผิวมัน ขนดก
            ผมร่วง เห้ออ
        </div>
        <img src="{{ asset('images/img_3-2.svg') }}" class="max-w-[80%] m-auto" />
        <x-slot:footer>
            <x-button class="btn-tab" wire:click="page" />
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(4)
    <x-quiz-page class="page-3  top-0 left-0 animate">
        <!--  $page==5?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble center w-3/4">
            รู้จักภาวะ “PCOS
            หรือภาวะถุงนําใน
            รังไข่หลายใบ
            /ซีสต์ในรังไข่” ไหม
        </div>

        <div class="radio btn-ans"><x-radio id="q-4-1" lg wire:model="data.q-4" value="1" label="รู้จัก" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-2" lg wire:model="data.q-4" value="2" label="ไม่แน่ใจ" /></div>
        <div class="radio btn-ans"><x-radio id="q-4-3" lg wire:model="data.q-4" value="3" label="ไม่รู้จัก" /></div>
        <x-slot:footer>
            <x-button class="btn-tab" wire:click="page" />
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(5)

    <x-quiz-page class="page-3  top-0 left-0 animate">
        <!--  $page==6?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
        <div class="bubble left">
            PCOS คืออะไร
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>

        <div class="bubble left">
            <P class="text-base">
                PCOS ภาวะถุงนําในรังไข่หลายใบหรือที
                คนทัวไปเรียกซีสต์ในรังไข่ เปนความผิด
                ปกติของต่อมไร้ท่อ หรือระบบฮอร์โมน
                ของเธอ ซึงสิงผิดปกติคือจะพบถุงนํา
                หลายใบในรังไข่ ส่งผลให้ประจําเดือนขาด
                แต่มีอาการร่วมสําคัญคือ ผมร่วง ขนดก
                สิวเห่อ หน้ามัน นาํหนักเพิม
            </P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                วิธีการรักษามีทังแบบไม่ใช้ยา
                และแบบใช้ยา</P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <div class="bubble left">
            <P class="text-base">
                แบบไม่ใช้ยา
                ปรับเปลยีนชีวิตประจําวัน เนืองจากอาจ
                เกิดภาวะนําหนักเกิน ควบคุมนําหนักอย่าง
                เคร่งครัด
                แบบใช้ยา
                ทานยาปรับฮอร์โมน ชนิด EE35C เพือ
                ปรับสมดุล และต้านฤทธิฮอร์โมนเพศชาย
                โดยปรึกษาแพทย์หรือเภสัชกร</P>
            <x-badge class="time absolute bottom-0" label="99-May-2023" />
        </div>
        <aside class="float-right px-2 text-xs">
            ทีมา : <a href="https://bit.ly/3Wyxzet">https://bit.ly/3Wyxzet</a>
        </aside>
        <x-slot:footer>
            <x-button class="btn-tab" wire:click="page" />
        </x-slot:footer>
    </x-quiz-page>

    @break

    @case(6)

    <x-quiz-page class="page-3  top-0 left-0 animate">
        <!--  $page==7?'opacity-100 pointer-events-auto':'opacity-0 pointer-events-none' }} "> -->
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
            <x-button class="btn-tab" wire:click="updateScore" />
        </x-slot:footer>
    </x-quiz-page>


    @break

    @case(7)

    <x-quiz-page class="page-3  top-0 left-0 animate">
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
</div>
