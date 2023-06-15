<x-guest-layout>
    <div>
        <a href="/" class="button"><img src="https://api.iconify.design/ion/arrow-back-circle.svg"
            style="margin-top:50px; margin-bottom:0px; margin-left:47px; margin-right:324.67px; width:34px; height:34px">
        </a>
        <h1 class="title" style="margin-top:0px; margin-bottom:40px; margin-left:250px; margin-right:250px">Forgot Password</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="formlogin" style="height: 435px">
            <div class="mb-4 text-sm" style="font-family: 'Poppins'; Font">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label  class="label" for="email" :value="__('Email')" />
                    <x-text-input id="email" placeholder='Enter your email address' class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                {{-- flex items-center justify-end mt-4 --}}
                <div class="">
                    <x-primary-button  class="tombol" style=" margin-top: 27px;">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
