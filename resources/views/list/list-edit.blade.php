
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edição do Usuário: ') }}  {{ $usuarios->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                <!--
                <form action="{{ route('list.update', $usuarios) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $usuarios->name }}"></input>
                        </div>

                        <div class="form group">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $usuarios->email }}"></input>
                        </div>

                        <div class="mb-3">
                        <select id="role" name="role" required autocomplete="role">
                            <option value="">Selecione uma Opção</option>
                            <option value="analista" :value=" old('role') == 'analista' ? 'selected' : '' ">Analista</option>
                            <option value="administrador" :value="old('role') == 'administrador' ? 'selected' : '' ">Administrador</option>
                        </select>
        
                        </div>

                    
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </form>
                  
-->
                    

<form method="POST" action="{{ route('list.update', $usuarios) }}">
        @csrf
        @method('PUT')
        
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $usuarios->name }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

       
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value=" {{ $usuarios->email }}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

    <div class="mt-4">
        <x-input-label for="role" :value="__('Tipo de Usuário')" />
        <select id="role" name="role" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autocomplete="role">
            <option value="">Selecione uma Opção</option>
            <option value="analista" :value=" old('role') == 'analista' ? 'selected' : '' ">Analista</option>
            <option value="administrador" :value="old('role') == 'administrador' ? 'selected' : '' ">Administrador</option>
        </select>
        <x-input-error :messages="$errors->get('role')" class="mt-2" />
    </div>

       
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

            <x-primary-button class="mt-3">
                {{ __('Editar') }}
            </x-primary-button>
        </div>
    </form> 

                </div>
            </div>
        </div>
</x-app-layout>



