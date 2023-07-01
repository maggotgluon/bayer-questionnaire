<div>
    <x-quiz-page class="page-{{$path}} top-0 left-0 animate" id="content">
        <div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
            <h3 class="text-3xl text-center">{{ $title }}</h3>
            

            {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
            
            {{-- <lottie-player id="lottie" src="{{ asset($lottie) }}"
            background="transparent" speed="1" class="w-[80%] h-auto m-auto" loop autoplay></lottie-player> --}}
            <div class="lottie w-full h-auto" id="{{ $idkey }}"></div>

            <img id="img" src="{{ asset($images) }}"
            class="max-w-[80%] m-auto" />


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

                    <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max" wire:click="screenshot"><span><x-icon name="save" class="w-8 inline-block" />Save Photo</span></a>
                    <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max"><span><x-icon name="share" class="w-8 inline-block" />Share Quiz</span></a>
                </div>
            </x-slot:footer>
    </x-quiz-page>

    <script>
        document.addEventListener('livewire:load', function () {
            // Your JS here.
            console.log('alpine load');
            let key = @js($idkey);
            let lottie = @js($lottie);
            console.log(key);

            var animation = bodymovin.loadAnimation({
                container: document.getElementById(key), // the dom element
        
                renderer: 'svg', // required
                loop: true, // optional
                autoplay: true, // optional
                path: lottie, // the animation data
            
            });
        })

    window.addEventListener('save-updated', event => {
        document.getElementById('lottie').classList.add('hidden')
        document.getElementById('img').classList.remove('hidden')
        html2canvas(document.getElementById('content'), {
            onrendered: function(canvas) {
                var imgData = canvas.toDataURL('image/png').replace("image/png", "image/octet-stream");

                var a = document.createElement('a');
                a.href = imgData;
                a.download = 'result.png';
                document.body.appendChild(a);
                a.click();

                document.getElementById('lottie').classList.toggle('hidden')
                document.getElementById('img').classList.toggle('hidden')
            }
        })

    })
</script>
</div>
