<x-splade-modal>

    <h2 class="text-xl font-bold mb-4">Nova Transportadora</h2>

    <form method="POST" action="{{ route('transportadora.store') }}">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block font-medium mb-1">Nome</label>
            <input type="text" name="nome" id="nome" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="endereco" class="block font-medium mb-1">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="border p-2 w-full" placeholder="email@email.com.br" required>
        </div>

        <div class="mb-4">
            <label for="telefone" class="block font-medium mb-1">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="border p-2 w-full" placeholder="(00) 00000-0000" required>
        </div>

        <div class="flex justify-end gap-1 mt-6">
            <x-splade-button type="button" @click.prevent="modal.close()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</x-splade-button>
            <x-splade-button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</x-splade-button>
        </div>
    </form>
</x-splade-modal>


