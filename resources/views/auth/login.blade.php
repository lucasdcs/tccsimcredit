<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            
            <x-input-label for="password" :value="__('Senha')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"/                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              >
            
            <button type="button" onclick="togglePassword()" class="text-gray-600 dark:text-gray-400 mt-1">
                <!-- Ícone inicial (olho aberto) -->
                <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.388 5 12 5c4.612 0 8.268 2.943 9.542 7-1.274 4.057-4.93 7-9.542 7-4.612 0-8.268-2.943-9.542-7z" />
                </svg>
            </button>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-black-600 shadow-sm focus:ring-black-500 dark:focus:ring-black-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-900 dark:text-gray-400">{{ __('Lembre-me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-400 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Esqueci minha senha') }}
                </a>
            @endif

            <x-primary-button class="ms-40">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';

                // Mudar para o ícone de "olho fechado"
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825a10.05 10.05 0 01-1.875.175c-4.612 0-8.268-2.943-9.542-7 1.145-3.652 4.178-6.329 7.953-6.874m4.132 3.4A3.001 3.001 0 0012 15c-1.115 0-2.086-.573-2.61-1.433M9.354 4.646l9.192 9.192" />
                `;
            } else {
                passwordField.type = 'password';

                // Mudar para o ícone de "olho aberto"
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.388 5 12 5c4.612 0 8.268 2.943 9.542 7-1.274 4.057-4.93 7-9.542 7-4.612 0-8.268-2.943-9.542-7z" />
                `;
            }
        }
    </script>
</x-guest-layout>
