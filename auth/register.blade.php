<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" value="Name" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" value="Email" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required />
            </div>

            <div class="mt-4">
                <x-label for="NIM" value="NIM" />

                <x-input id="NIM" class="block mt-1 w-full" type="text" name="NIM" value="{{old('NIM')}}" required />
            </div>

            <div class="mt-4">
                <x-label for="Kelas" value="Kelas" />

                <x-input id="Kelas" class="block mt-1 w-full" type="text" name="Kelas" value="{{old('Kelas')}}" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" value="Password" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="Confirm Password" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    'Already Register'
                </a>

                <x-button class="ml-4">
                    'Register'
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>