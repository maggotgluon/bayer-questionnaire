<div>
    <x-notifications />
    <x-quiz-page class="page-{{ $path }} top-0 left-0 animate" id="content">
        <div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
            <h3 class="text-3xl text-center">{{ $title }}</h3>
            @if($path == 3 && $result == 2)
                <img id="img" src="{{ asset($images) }}"
                class="max-w-[80%] m-auto" />
            @elseif($path == 3 && $result == 3)
                <img id="img" src="{{ asset($images) }}"
                class="max-w-[80%] m-auto" />
            @else
                <x-lottie
                class="lottie w-full h-auto"
                path="{{$lottie}}"/>
            @endif

            <img id="img" src="{{ asset($images) }}" class="max-w-[80%] m-auto hidden" />


            <div class="relative">
                <img src="{{ asset('images/result_bar.png') }}" class="max-w-[80%] m-auto" />
                <!-- 25 50 75 -->
                <img src="{{ asset($image_face) }}"
                    class="w-10 m-auto absolute top-[15%] -translate-x-1/2 -translate-y-1/2"
                    style="left:{{ $result * 25 }}%" />
            </div>


            <p class="text-center">Age : {{ $age }}</p>
            <p>
                {{ $content }}
            </p>
        </div>


        <x-slot:footer>
            <div class="w-full flex flex-col">
            
            <div class="grid w-3/5 m-auto mt-2">
                <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max cursor-pointer"
                    rel="nofollow noopener noreferrer"
                    target="_blank"
                    href="{!!Share::page(route('home'),
                    'Share title')->facebook()->getRawLinks()!!}"
                ><span>
                        <x-icon name="share" class="w-8 inline-block" />Share Quiz
                    </span></a>
                <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max cursor-pointer"
                    wire:click="screenshot2"><span>
                        <x-icon name="save" class="w-8 inline-block" />บันทึกรูป<br> เพื่อปรึกษาเภสัชกร
                    </span></a>

            </div>
            
            <div class="grid w-4/5 m-auto mt-2">
                <a class="cursor-pointer transition-all duration-500 ease-out hover:scale-110 hover:drop-shadow-md"
                    wire:click="go_boots">
                    <img class="" src="{{asset('btn_boots.png')}}" alt="">
                </a>
            </div>
            </div>
        </x-slot:footer>
    </x-quiz-page>
    <script>
        document.addEventListener('livewire:load', function() {
            // Your JS here.
            console.log('alpine load');
            let key = @js($idkey);
            let lottie = @js($lottie);
            console.log(key);

            window.addEventListener('save-updated', event => {
                const lott = document.querySelector('.lottie')
                const img = document.getElementById('img')
                lott.classList.add('hidden')
                img.classList.remove('hidden')

                html2canvas(document.getElementById('content'), {
                    onrendered: function(canvas) {
                        var imgData = canvas.toDataURL('image/png').replace("image/png",
                        "image/octet-stream");
                        console.log('load canvas'+'imgData');

                        var a = document.createElement('a');
                        a.href = imgData;
                        a.download = 'result.png';
                        document.body.appendChild(a);
                        console.log('create element'+'a')
                        a.click();
                        console.log('click on a to download')

                        /* lott.classList.remove('hidden')
                        img.classList.add('hidden') */
                    }
                })

            })
        })
    </script>

</div>
