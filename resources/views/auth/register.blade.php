<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('register') }}">
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

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <p class="text-xs text-gray-600">The password must be at least 8 characters, including uppercase , lowercase , numbers, and symbols.</p>
            <div class="relative flex items-center">
                <x-text-input id="password" class="block mt-1 w-full pr-10" type="password" name="password" required autocomplete="new-password" />
                
                <!-- Icono para mostrar/ocultar contraseña -->
                <button type="button" id="toggle_password" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg id="eye_icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A7.965 7.965 0 0012 19c-4.418 0-8-3.582-8-8 0-1.152.237-2.24.658-3.215M15.878 16.878A7.965 7.965 0 0012 15c-4.418 0-8-3.582-8-8 0-1.152.237-2.24.658-3.215M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z" />
                    </svg>
                </button>
            </div>
            <!-- Mensaje de error -->
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="relative flex items-center">
                <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10" type="password" name="password_confirmation" required autocomplete="new-password" />

                <!-- Icono para mostrar/ocultar contraseña -->
                <button type="button" id="toggle_confirm_password" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg id="confirm_eye_icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A7.965 7.965 0 0012 19c-4.418 0-8-3.582-8-8 0-1.152.237-2.24.658-3.215M15.878 16.878A7.965 7.965 0 0012 15c-4.418 0-8-3.582-8-8 0-1.152.237-2.24.658-3.215M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z" />
                    </svg>
                </button>
            </div>
            <!-- Mensaje de error -->
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-3">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Script para alternar la visibilidad de la contraseña -->
    <script>
        const togglePasswordButton = document.querySelector('#toggle_password');
        const passwordField = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eye_icon');

        togglePasswordButton.addEventListener('click', function () {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            eyeIcon.setAttribute('stroke', type === 'text' ? 'indigo' : 'currentColor');
        });

        const toggleConfirmPasswordButton = document.querySelector('#toggle_confirm_password');
        const confirmPasswordField = document.querySelector('#password_confirmation');
        const confirmEyeIcon = document.querySelector('#confirm_eye_icon');

        toggleConfirmPasswordButton.addEventListener('click', function () {
            const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordField.setAttribute('type', type);
            confirmEyeIcon.setAttribute('stroke', type === 'text' ? 'blue' : 'currentColor');
        });
    </script>
</x-guest-layout>
