<div>
    <x-quiz-page class="page-1 top-0 left-0 animate" id="content">
        <div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
            <h3 class="text-3xl text-center">{{ $title }}</h3>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player id="lottie" src="{{ asset('images/lottie/resultA_red.json') }}"
            background="transparent" speed="1" class="w-[80%] h-auto m-auto" loop autoplay></lottie-player>
            <img id="img" src="{{ asset('images/result_img_1-1.png') }}" class="max-w-[80%] m-auto hidden" />
            <div class="relative">
                <img src="{{ asset('images/result_bar.png') }}" class="max-w-[80%] m-auto" />
                <!-- 25 50 75 -->
                <img src="{{ asset($image_face) }}" class="w-10 m-auto absolute top-[15%] -translate-x-1/2 -translate-y-1/2" style="left:{{$result*25}}%"/>
            </div>
            <p class="text-center">Age : {{ $age }}</p>
            <p>
                    {{$content}}
            </p>
        </div>


            <x-slot:footer>
                <div class="grid w-3/5 m-auto">

                    <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max" wire:click="screenshot"><span><x-icon name="x" class="w-8 inline-block" />Save Photo</span></a>
                    <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max"><span><x-icon name="x" class="w-8 inline-block" />Share Quiz</span></a>
                </div>
            </x-slot:footer>
    </x-quiz-page>

    <script>

    window.addEventListener('save-updated', event => {
        document.getElementById('lottie').classList.add('hidden')
        document.getElementById('img').classList.remove('hidden')
        html2canvas(document.getElementById('content'), {
            onrendered: function(canvas) {
                var imgData = canvas.toDataURL('image/png').replace("image/png", "image/octet-stream");

                var a = document.createElement('a');
                a.href = imgData;
                a.download = 'test.png';
                document.body.appendChild(a);
                a.click();

                document.getElementById('lottie').classList.toggle('hidden')
                document.getElementById('img').classList.toggle('hidden')
            }
        })

    })
</script>
</div>
