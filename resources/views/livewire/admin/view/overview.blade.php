<div class="flex flex-col p-6 gap-4">
    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-3 h-min ">
            
        </div>
        <div class="col-span-2 h-min flex justify-between  rounded-xl bg-blue-500 px-4 py-2 text-white">
            <span>Boots </span>
            <span>{{$data['bkk']}} Users / {{$data['bkk_total']}} Clicks</span>
        </div>
        <div class="col-span-2 h-min flex justify-between  rounded-xl bg-blue-500 px-4 py-2 text-white">
            <span>F</span>
            <span>{{$fb_shared}} share</span>
        </div>
    </div>

    <div class="grid md:grid-cols-7 gap-4">
        <div class="md:col-span-2 grid bg-white rounded-xl p-4 text-right">
            <span>Total number<br> of user</span>
            <span class="text-4xl font-medium my-4">{{ $data['count'] }}</span>
        </div>
        <div class="md:col-span-5 grid grid-cols-2 md:grid-cols-[1fr,3fr] bg-white rounded-xl p-4 items-center">
            <div>
            <livewire:livewire-pie-chart
                    key="{{ $chart1->reactiveKey() }}"
                    :pie-chart-model="$chart1"
                />
                <!-- !! $chart2->renderHtml() !!} -->
            </div>
            <div>
                <ul>
                    <li>
                        <div class="grid grid-cols-4">
                            <span class="col-span-2"><x-icon name="check-circle" solid class="w-4 inline-block text-green-400"/> PMDD</span> <span  class="text-right text-green-400 font-medium">{{ $data['PMDD']['count'] }}</span><span class="text-right"> User</span>
                        </div>
                    </li>
                    <li>
                        <div class="grid grid-cols-4">
                            <span class="col-span-2"><x-icon name="check-circle" solid class="w-4 inline-block text-red-400"/> สิวฮอร์โมน</span> <span  class="text-right text-red-400 font-medium">{{ $data['Hormone']['count'] }}</span><span class="text-right"> User</span>
                        </div>
                    </li>
                    <li>
                        <div class="grid grid-cols-4">
                            <span class="col-span-2"><x-icon name="check-circle" solid class="w-4 inline-block text-orange-400"/> PCOS</span> <span  class="text-right text-orange-400 font-medium">{{ $data['PCOS']['count'] }}</span><span class="text-right"> User</span>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    <div class="grid md:grid-cols-7 gap-4">
        <span>
            </span>
        <div class="col-span-2  rounded-xl p-4 bg-green-200">
            <h2 class="text-xl font-medium">PMDD</h2>
            <p>
                Synptoms
            <div class="flex justify-between">
                <x-badge red label="{{ $data['PMDD']['Synptoms'] }} selected" />
                <x-badge red label="{{ $data['PMDD']['Synptoms_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
            <p>
                Normal
            <div class="flex justify-between">
                <x-badge amber label="{{ $data['PMDD']['Normal'] }} selected" />
                <x-badge amber label="{{ $data['PMDD']['Normal_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
            <p>
                Fine
            <div class="flex justify-between">
                <x-badge emerald label="{{ $data['PMDD']['Fine'] }} selected" />
                <x-badge emerald label="{{ $data['PMDD']['Fine_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
        </div>
        <div class="col-span-2  rounded-xl p-4 bg-red-200">
            <h2 class="text-xl font-medium">สิวฮอร์โมน</h2>
            <p>
                Synptoms
            <div class="flex justify-between">
                <x-badge red label="{{ $data['Hormone']['Synptoms'] }} selected" />
                <x-badge red label="{{ $data['Hormone']['Synptoms_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
            <p>
                Normal
            <div class="flex justify-between">
                <x-badge amber label="{{ $data['Hormone']['Normal'] }} selected" />
                <x-badge amber label="{{ $data['Hormone']['Normal_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
            <p>
                Fine
            <div class="flex justify-between">
                <x-badge emerald label="{{ $data['Hormone']['Fine'] }} selected" />
                <x-badge emerald label="{{ $data['Hormone']['Fine_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
        </div>
        <div class="col-span-2  rounded-xl p-4 bg-orange-200">
            <h2 class="text-xl font-medium">PCOS</h2>
            <p>
                Synptoms
            <div class="flex justify-between">
                <x-badge red label="{{ $data['PCOS']['Synptoms'] }} selected" />
                <x-badge red label="{{ $data['PCOS']['Synptoms_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
            <p>
                Normal
            <div class="flex justify-between">
                <x-badge amber label="{{ $data['PCOS']['Normal'] }} selected" />
                <x-badge amber label="{{ $data['PCOS']['Normal_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
            <p>
                Fine
            <div class="flex justify-between">
                <x-badge emerald label="{{ $data['PCOS']['Fine'] }} selected" />
                <x-badge emerald label="{{ $data['PCOS']['Fine_percent'] }}%" class="opacity-70"/>
            </div>
            </p>
        </div>
    </div>
    <div class="col-span-7 rounded-xl p-4 bg-white">
        <h2 class="text-xl font-medium">Ages</h2>
        <div class="h-64">
            <livewire:livewire-column-chart
                        key="{{ $chart2->reactiveKey() }}"
                        :column-chart-model="$chart2"
                    />
        </div>
    </div>
    <div class="col-span-7 rounded-xl p-4 bg-white">
        <!-- <h2 class="text-xl font-medium"> $chart1->options['chart_title'] }}</h2> -->
            <!-- !! $chart1->renderHtml() !!} -->

            <div class="h-64">
            <livewire:livewire-line-chart
                    key="{{ $chart3->reactiveKey() }}"
                    :line-chart-model="$chart3"
                />
            </div>
    </div>

    <!-- !! $chart1->renderChartJsLibrary() !!} -->
    <!-- !! $chart2->renderChartJsLibrary() !!} -->
    <!-- !! $chart1->renderJs() !!} -->
    <!-- !! $chart2->renderJs() !!} -->

</div>

