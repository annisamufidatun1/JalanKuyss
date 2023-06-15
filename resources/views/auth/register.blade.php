<x-guest-layout>
    <div>
        <a href="/" class="button"><img src="https://api.iconify.design/ion/arrow-back-circle.svg"
            style="margin-top:30px; margin-bottom:0px; margin-left:47px; margin-right:324.67px; width:34px; height:34px">
        </a>
        <h1 class="title" style="margin top:31px; margin right:418px; margin-bottom:5px; margin-left:400px">Sign Up</h1>
        <div class="formlogin" style="margin-bottom:24px; height: 700px">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label class="label" for="name" :value="__('Name')" />
                    <x-text-input id="name"   placeholder='Enter your full name' class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label class="label" for="email" :value="__('Email')" />
                    <x-text-input id="email"  placeholder='Enter your email address' class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label class="label" for="password" :value="__('Password')" />

                    <x-text-input id="password" class="form-control block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder='Enter your account password'
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <p class="desc">
                        Use 8 or more characters with a mix of letters, numbers & symbols
                    </p>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label class="label" for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="form-control block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder='Confirm your password' />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    {{-- <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div> --}}
                <p id="up-text"> By creating an account, you agree to our
                    <a id="link" href="https://google.com">
                    Terms and Condition
                    </a> and
                    <a id="link" href="https://google.com">
                        Privacy Policy.
                    </a>
                </p>
                <x-primary-button class="tombol">
                    {{ __('Register') }}
                </x-primary-button>
            </form>
            <p id="under-text"> Already have an account?
                <a id="link" href="{{ route('login') }}">
                {{ __('Sign In') }}
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
