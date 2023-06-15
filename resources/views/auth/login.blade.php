<x-guest-layout>
    <div>
        <a href="/" class="button"><img src="https://api.iconify.design/ion/arrow-back-circle.svg"
            style="margin-top:30px; margin-bottom:0px; margin-left:47px; margin-right:324.67px; width:34px; height:34px">
        </a>
        <h1 class="title" style="margin-top:0px; margin-bottom:40px; margin-left:405px; margin-right:404px">Sign In</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="formlogin" style="height: 520px">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label style="margin-bottom:6px" for="email" :value="__('Your Email')" class="label"/>
                    <x-text-input id="email" placeholder='Enter your email address' class="form-control block mt-10 w-15" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <div class="password" style="display: inline-block">
                        <x-input-label id="isi-password" class="label" for="password" :value="__('Password')" />
                        <span style="margin-left: 475px;" id="icon-password">
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                        {{-- <iconify-icon id="eye" onclick="toggle()" id="password-field" icon="fa-solid:eye-slash" style="font-size: 20px; color: #858585; vertical-align:-3px; "></iconify-icon> --}}
                        Hide
                        </span>
                        {{-- <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a> --}}
                    </div>
                    <x-text-input id="password" class="form-control block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder='Enter your account password'
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>

                <!-- Remember Me -->
                {{-- <div class="form-group block mt-4" >
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}

                {{-- <div class="flex items-center justify-end mt-1"> --}}
                <div class="d-flex flex-row justify-content-end p-1">
                    @if (Route::has('password.reset'))
                        <a id="link" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    {{-- <x-primary-button class="tombol ml-3">
                        {{ __('Log in') }}
                    </x-primary-button> --}}
                </div>
                <x-primary-button class="tombol" style=" margin-top: 17px;">
                    {{ __('Log in') }}
                </x-primary-button>

            </form>
            <p id="under-text" class="mt-20"> Don't have an account?
                <a id="link" href="{{ route('register') }}">
                {{ __('Register here') }}
                </a>
            </p>
        </div>
        </div>
        {{-- <p id="under-text"> Don't have an account?
            <a id="link" href="{{ route('register') }}">
            {{ __('Register here') }}
            </a>
        </p> --}}
    </div>
    {{-- <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#isi-password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script> --}}
</x-guest-layout>
