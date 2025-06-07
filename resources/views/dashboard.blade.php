<x-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <x-panel class="flex flex-col pt-8 pb-8" style="height: 550px;">
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

        <!-- Título em uma linha separada, alinhado à esquerda -->
        <div class="w-full px-4">
            <h1 style="font-size: 40px; text-align: left; margin-top:40px; font-weight: 800; " class="bg-blue-100 text-blue-800">Pedidos Recentes</h1>
            <!-- Tabela com Splade -->
            <div class="px-8">
                <x-splade-table :for="$pedidos"/>
            </div>
        </div>
    </x-panel>
</x-layout>
