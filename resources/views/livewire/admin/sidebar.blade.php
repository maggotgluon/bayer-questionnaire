<div class="md:sticky top-0 left-0 bg-gradient-to-t from-indigo-900 to-emerald-600
md:h-screen flex md:flex-col flex-wrap gap-2 pb-6 text-white shadow-[0_0_0.5rem_.25rem_rgba(0,0,0,0.3)]">
    <h2 class="text-center text-2xl font-medium my-6">Dashboard</h2>

    <x-admin-sidebar-button label="Overview" icon="home"
    href="{{ route('overview') }}" active="{{ url()->current() == route('overview')?1:0 }}" />

    <x-admin-sidebar-button label="Users" icon="user"
    href="{{ route('users') }}" active="{{ url()->current() == route('users')?1:0 }}" />


    <div class="flex justify-center">
        <x-button emerald label="Export Report" wire:click="exportData" icon="document-text" />
    </div>


    <div class="flex justify-start pl-8 mt-auto">
        {{Auth::user()->name}}
    </div>

    <div class="flex justify-start pl-8">
        <x-button flat label="Logout" icon="logout" :href="route('out')"/>
    </div>

</div>
