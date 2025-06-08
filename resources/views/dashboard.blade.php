<x-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <x-panel class="flex flex-col pt-8 pb-8" style="height: 650px;">
        <!-- Container dos cards -->
        <div class="flex justify-center mb-8">
            <div class="flex flex-col items-center justify-center text-white shadow-xl sm:rounded-lg" style="background-color: red; width: 150px; height: 120px; margin-right: 50px;">
                <p class="text-3xl font-bold" style="font-size: 50px;">{{ $etiquetas['Pendente'] }}</p>
                <span>Pendentes</span>
            </div>

            <div class="flex flex-col items-center justify-center text-white shadow-xl sm:rounded-lg" style="background-color: #FF7F00; width: 150px; height: 120px;">
                <p class="text-4xl font-bold" style="font-size: 50px;">{{ $etiquetas['Em Trânsito'] }}</p>
                <span>Em trânsito</span>
            </div>

            <div class="flex flex-col items-center justify-center text-white shadow-xl sm:rounded-lg" style="background-color: #0E63CB; width: 150px; height: 120px; margin-left: 50px;">
                <p class="text-3xl font-bold" style="font-size: 50px;">{{ $etiquetas['Entregue'] }}</p>
                <span>Entregues</span>
            </div>
        </div>
         @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 ml-4">
                {{ session('success') }}
            </div>
        @endif
        <!-- Título em uma linha separada, alinhado à esquerda -->
        <div class="w-full px-4">
            <h1 style="font-size: 40px; text-align: left; margin-left:30px; margin-top:40px; margin-bottom:70px; font-weight: 800; " class="text-blue-800 mb-4">Pedidos Recentes</h1>
            <!-- Tabela com Splade -->
            <div class="px-8">
                <Link href="{{ route('etiqueta-entrega-nova') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" modal>+ Nova Etiqueta Entrega</Link>
                <x-splade-table :for="$pedidos"/>
            </div>
        </div>
    </x-panel>
</x-layout>
