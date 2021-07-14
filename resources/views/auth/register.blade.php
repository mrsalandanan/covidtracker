<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="images1/corona_icon.png">
            <x-jet-authentication-card-logo />
        </x-slot>
        <link href="css4/app.css" rel="stylesheet">
        <x-jet-validation-errors class="mb-4" />
        <div class="form">
            <div class="form-element">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password-field" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <div class="toggle-password">
                            <i class="fa fa-eye"></i>
                            <i class="fa fa-eye-slash"></i>
                        </div>
                        <div class="password-policies">
                            <div class="policy-length">
                                >8 Characters
                            </div>
                            <div class="policy-number">
                                >Contains Number
                            </div>
                            <div class="policy-uppercase">
                                >Contains Uppercase
                            </div>
                            <div class="policy-special">
                                >Contains Special Characters
                            </div>
                        </div>
                    </div>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            </div>
        </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        <script src="js4/app.js"></script>
    </x-jet-authentication-card>
</x-guest-layout>
