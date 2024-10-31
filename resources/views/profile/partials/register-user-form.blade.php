<section class="space-y-6">
<header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Cadastrar Usuário') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Está aba é responsável por cadastrar novos usuários na plataforma.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('profile.register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role Selection -->
    <div class="mt-4">
        <x-input-label for="role" :value="__('Role')" />
        <select id="role" name="role" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autocomplete="role">
            <option value="">Selecione uma Opção</option>
            <option value="analista" :value="{{ old('role') == 'analista' ? 'selected' : ''">Analista</option>
            <option value="administrador" :value="old('role') == 'administrador' ? 'selected' : '' ">Administrador</option>
        </select>
    </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

            <x-primary-button class="mt-3">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</section>