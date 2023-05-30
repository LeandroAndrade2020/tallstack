<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Form extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public $user;

    public $isEditing = false;


    public function rules() //validações complexas
    {
        return[
            'name' => 'required',
            'email' => ['required',
                'email'
                , Rule::unique('users')->ignore($this->user?->id)],
            'password' => ['confirmed',
                Rule::requiredIf( fn() => !$this->isEditing)],
        ];

    }

    protected $messages = [
        'required' => 'O campo :attribute é obrigatório',
    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'email' => 'email',
        'password' => 'senha',
        'password_confirmation' => 'confirmação de senha',
    ];

    public function mount($id = null)
    {
        if($id) {
            $this->user = User::find($id);
            $this->name = $this->user->name;
            $this->email = $this->user->email;

            $this->isEditing = true;
        }

    }

    public function save()
    {
        $data = $this->validate();

        if( !$this->isEditing) {
            $this->create($data);
        } else {
            $this->update($data);
        }
    }

    public function create($data)
    {
        User::create($data);

        $this->reset();
    }

    public function update($data)
    {
        $this->user->update($data);

        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.user.form');
    }
}
