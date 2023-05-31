<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Table extends Component
{

    use LivewireAlert;
    use WithPagination;

    public $users = [];
    public $user;

    protected $listeners = ['confirmed'];

    public function confirmed()
    {
        $this->user->delete();

        $this->alert('success', 'Usuário excluído com sucesso.');
    }

    public function delete( User $user)
    {
        $this->confirm('Tem certeza que deseja excluir esse registro?', [
            'onConfirmed' => 'confirmed',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Não',
            'confirmButtonText' => 'Sim'
        ]);

        $this->user = $user;
    }
    public function render()
    {
        $users = User::paginate(5);
        // dd($users);
        return view('livewire.user.table',[
            'users' => $users
        ]);
    }
}
