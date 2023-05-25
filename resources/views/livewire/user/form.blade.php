<div>
    <form wire:submit.prevent='save'>

        <label for="name">Nome</label>
        <input type="text" wire:model.defer="name" id="name"/>
        @error('name') <span class="text-red-600">{{ $message }}</span>@enderror

        <label for="email">E-mail</label>
        <input type="email" wire:model.defer="email" id="email"/>
        @error('email') <span class="text-red-600">{{ $message }}</span>@enderror

        <label for="password">Senha</label>
        <input type="password" wire:model.defer="password" id="password"/>
        @error('password') <span class="text-red-600">{{ $message }}</span>@enderror

        <label for="password.confirmation">Senha</label>
        <input type="password" wire:model.defer="password_confirmation" id="password.confirmation"/>
        @error('password_confirmation') <span class="text-red-600">{{ $message }}</span>@enderror

        <button type="submit">Cadastrar</button>
    </form>
</div>
