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
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data de Registro</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($expenses as $expense)
                    <tr>
                        <td>{{ $expense->id }}</td>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->created_at->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <a href="{{ route('expenses.edit', $expense->id) }}">Editar</a>
                            <a href="#" wire:click.prevent="removeExpense({{ $expense->id }})">Remover</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $expenses->links() }}
        </div>
    </div>
</div>
