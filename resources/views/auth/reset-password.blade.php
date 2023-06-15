<x-guest-layout>
    <div>
        {{-- <a href="/" class="button"><img src="https://api.iconify.design/ion/arrow-back-circle.svg"
            style="margin-top:30px; margin-bottom:0px; margin-left:47px; margin-right:324.67px; width:34px; height:34px">
        </a> --}}
        <h1 class="title" style="margin-top:70px; margin-bottom:40px; margin-left:265px; margin-right:265px">Reset Password</h1>

        <div class="formlogin" style="height: 540px">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-input-label  class="label" for="email" :value="__('Email')" />
                    {{-- <x-text-input id="email"  class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')"/> --}}
                    <x-text-input id="email" placeholder='Enter your email address' class="form-control block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label  class="label" for="password" :value="__('Password')" />
                    <x-text-input id="password" placeholder='Enter your new password' class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label  class="label" for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="form-control block mt-1 w-full"
                                        type="password"
                                        placeholder='Enter your new password'
                                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- flex items-center justify-end mt-4 --}}
                <div>
                    <x-primary-button  class="tombol" style=" margin-top: 27px;">
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
