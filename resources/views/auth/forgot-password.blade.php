
<style>
    a,*{
  text-decoration: none!important;
  list-style: none!important;
  font-family: 'palatino linotype', Rupali!important;
}
</style>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="text-center">
                <a href="/">
                    <span class="icon logo"><img src="assets/img/logo/tiger_logo.png" class="rounded mx-auto d-block" width="12%" alt="logo"></span>
                    <span class="text-primary">Tiger Quiz</span></a>
                </a>
            </div>
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                {{-- <img class="img-responsive" width="10%" height="10%" src="{{ asset('assets/img/logo/tiger_logo.png') }}" /> --}}
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? Let us know your email address for a new reset link.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
