<x-splade-modal>
    <h2 class="text-xl font-bold mb-4">Nova Etiqueta Entrega</h2>

    <x-splade-form method="POST" action="{{ route('etiqueta-entrega.store') }}">
        <x-splade-select name="vendedor_id" label="Vendedor" choices required>
            <option value="">Selecione um vendedor</option>
            @foreach ($vendedores as $id => $nome)
                <option value="{{ $id }}">{{ strtoupper($nome) }}</option>
            @endforeach
        </x-splade-select>

        <x-splade-select name="transportadora_id" label="Transportadora" choices required>
            <option value="">Selecione uma transportadora</option>
            @foreach ($transportadoras as $id => $nome)
                <option value="{{ $id }}">{{ strtoupper($nome) }}</option>
            @endforeach
        </x-splade-select>

        <x-splade-select name="pedido_id" label="Pedidos" choices required>
            <option value="">Selecione um produto</option>
            @foreach ($pedidos as $id => $produto)
                <option value="{{ $id }}">{{ strtoupper($produto) }}</option>
            @endforeach
        </x-splade-select>

        <div class="mb-4">
            <label for="data_envio" class="block font-medium mb-1">Data Evento</label>
            <input type="date" name="data_envio" id="data_envio" class="border p-2 w-full" value="{{ old('data_envio', now()->format('Y-m-d')) }}" required>
        </div>

        <div class="flex justify-end gap-1 mt-6">
            <x-splade-button type="button" @click.prevent="modal.close()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</x-splade-button>
            <x-splade-submit class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</x-splade-submit>
        </div>
    </x-splade-form>
</x-splade-modal>
