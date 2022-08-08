<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="text-center">
                <a href="/">
                    <span class="icon logo"><img src="assets/img/logo/tiger_logo.png" class="rounded mx-auto d-block" width="12%" alt="logo"></span>
                    <span class="text-primary">Tiger Quiz</span></a>
                </a>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- User Role -->
            <div class="mt-4">
                <x-label for="role" :value="__('Role (Teacher-2 & User-3)')" />

                {{-- <x-input id="role" class="block mt-1 w-full" type="number" name="role" :value="old('email')" max='3' min='2' required /> --}}
                <select name="role" id="role" class="block mt-1 w-full rounded">
                    <option value="3">Student</option>
                    <option value="2">Teacher</option>
                </select>

            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
