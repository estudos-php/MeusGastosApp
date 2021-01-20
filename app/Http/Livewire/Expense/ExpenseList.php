<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;
use Livewire\WithPagination;

class ExpenseList extends Component
{
    use WithPagination;

    public function render()
    {
        $expenses = Expense::paginate(3);
        return view('livewire.expense.expense-list', compact('expenses'));
    }

    /**
     * @param \App\Models\Expense $expense
     * @throws \Exception
     */
    public function removeExpense(Expense $expense)
    {
        $expense->delete();

        session()->flash('message', 'Registro removido com sucesso!');
    }
}
