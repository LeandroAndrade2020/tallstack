<div class="max-w-5xl px-4 mx-auto rounded-md bg-slate-100">
    <form wire:submit.prevent='save'>
        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-2 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <x-input type="text" label="Nome" wire:model.defer="name" id="name" />
            </div>
            <div class="sm:col-span-3">
                <x-input type="email" label="E-mail" wire:model.defer="email" id="email" />
            </div>
            <div class="sm:col-span-3">
                <x-input type="password" label="Senha" wire:model.defer="password" id="password" />
            </div>
            <div class="sm:col-span-3">
                <x-input type="password" label="Senha novamente" wire:model.defer="password_confirmation" id="password_confirmation" />
            </div>
        </div>
        <div class="flex items-center justify-end my-6 gap-x-6">
            <a href="{{ url('/') }}" class="px-3 py-2 mb-4 text-sm font-semibold text-white bg-gray-600 rounded-md shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Voltar</a>
            <x-button  wire:loading.attr="disabled" class="mb-4">
                {{ $isEditing ? 'Salvar' : 'Cadastrar' }}
                <div wire:loading wire:target='save'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-spin">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                      </svg>

                </div>
            </x-button>
        </div>
    </form>
</div>
