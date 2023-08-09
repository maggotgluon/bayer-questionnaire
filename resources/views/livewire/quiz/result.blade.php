<div>
    <x-quiz-page class="page-{{ $path }} top-0 left-0 animate" id="content">
        <div class="bg-white rounded-3xl drop-shadow-[10px_10px_0_rgba(0,0,0,0.5)] p-8 mx-auto max-w-xs" id='content'>
            <h3 class="text-3xl text-center">{{ $title }}</h3>

            <x-lottie 
            class="lottie w-full h-auto" 
            path="{{$lottie}}"/>

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
            <div class="grid w-3/5 m-auto">

                <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max" 
                    wire:click="screenshot2"><span>
                        <x-icon name="save" class="w-8 inline-block" />Save Photo
                    </span></a>
                <a class="btn-ans p-4 text-center text-xl whitespace-nowrap min-w-max"
                    rel="nofollow noopener noreferrer"
                    target="_blank"
                    href="{!!Share::page(route('home'), 
                    'Share title')->facebook()->getRawLinks()!!}"
                ><span>
                        <x-icon name="share" class="w-8 inline-block" />Share Quiz
                    </span></a>
                    {{-- {!!Share::page(route('home'), 
                            'Share',
                            ['class' => 'text-5xl', 'title' => 'share', 'rel' => 'nofollow noopener noreferrer']
                        )->facebook()!!} --}}
            </div>
        </x-slot:footer>
    </x-quiz-page>

</div>