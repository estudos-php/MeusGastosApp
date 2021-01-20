<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseCreate extends Component
{
    public $amount;
    public $description;
    public $type;
    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required',
    ];

    public function createExpense()
    {
        $this->validate();
        Expense::create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => auth()->user()->id
        ]);
        session()->flash('message', 'Registro criado com sucesso!');
        $this->resetFields();
    }

    private function resetFields()
    {
        $this->amount = null;
        $this->description = null;
        $this->type = null;
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
