<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Alterar Registro
                </h2>
            </x-slot>
            @if(session()->has('message'))
                <h3>{{ session('message') }}</h3>
            @endif
            <form wire:submit.prevent="updateExpense">
                <div>
                    <label for="description">Descrição do Registro</label>
                    <input type="text" name="description" wire:model="description"/>
                    @error('description')
                    <h5>{{ $message }}</h5>
                    @enderror
                </div>
                <div>
                    <label for="amount">Valor do Registro</label>
                    <input type="text" name="amount" wire:model="amount"/>
                    @error('amount')
                    <h5>{{ $message }}</h5>
                    @enderror
                </div>
                <div>
                    <label for="type">Tipo do Registro</label>
                    <select name="type" wire:model="type">
                        <option value="">Selecione o tipo de Registro</option>
                        <option value="1">Entrada</option>
                        <option value="2">Saída</option>
                    </select>
                    @error('type')
                    <h5>{{ $message }}</h5>
                    @enderror
                </div>
                <div>
                    <button type="submit">Alterar Registro</button>
                </div>
            </form>
        </div>
    </div>
</div>
