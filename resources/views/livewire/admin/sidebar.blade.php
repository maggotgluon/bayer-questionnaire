<div class="md:sticky top-0 left-0 bg-gradient-to-t from-indigo-900 to-emerald-600
md:h-screen flex md:flex-col flex-wrap gap-2 pb-6 text-white shadow-[0_0_0.5rem_.25rem_rgba(0,0,0,0.3)]">
    <h2 class="text-center text-2xl font-medium my-6">Dashboard</h2>

    <div class="flex gap-2 items-center text-xl -mr-4 my-4 bg-zinc-200 relative text-indigo-700">
        <a href="#" class="flex gap-2 px-8 py-4">
        <span class="absolute top-0 bottom-0 left-0 w-2 bg-white"></span>
        <x-icon name="home" style="solid" class="w-8 h-auto" />
        <span class="hidden md:inline-block">Overview</span>
        </a>
    </div>


    <div class="flex gap-2 items-center text-xl -mr-4 my-4 bg-transparent relative">
        <a href="#" class="flex gap-2 px-8 py-4">
        <span class="absolute top-0 bottom-0 left-0 w-2 bg-gray-400 hidden"></span>
        <x-icon name="user" style="outline" class="w-8 h-auto" />
        <span class="hidden md:inline-block">Users</span>
        </a>
    </div>

    <div class="flex justify-center">
        <x-button emerald label="Export Report" icon="document-text" />
    </div>


    <div class="flex justify-start pl-8 mt-auto">
        {{Auth::user()->name}}
    </div>

    <div class="flex justify-start pl-8">
        <x-button flat gray label="Logout" icon="logout" />
    </div>

</div>
