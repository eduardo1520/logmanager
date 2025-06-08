<x-layout>
    <x-slot name="header">
        {{ __('Transportadora') }}
    </x-slot>

    <x-panel class="flex flex-col pt-8 pb-8" style="height: 550px;">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 ml-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="w-full px-4 flex items-center justify-between mb-6">
            <h1 style="font-size: 40px; font-weight: 800;" class="text-blue-800">
                Transportadoras
            </h1>

        </div>

        <div class="px-8 flex-1 overflow-auto">
            <Link href="{{ route('transportadoras-nova') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" modal>+ Nova Transportadora</Link>
            <x-splade-table :for="$transportadoras" />
        </div>

    </x-panel>

</x-layout>
