<x-guest-layout>
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
          <div class="text-left">
            <h1 class="text-2xl font-bold sm:text-3xl">Forgot your password</h1>
        
            <p class="mt-4 text-gray-500">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
            </p>
          </div>
        
          <form method="POST" action="{{ route('password.email') }}" class="mx-auto mb-0 mt-8 space-y-4">
            @csrf
        
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
            <div>
              <label for="email" class="sr-only">Email</label>
        
              <div class="relative">
                <input
                    name="email" 
                    :value="old('email')"
                    type="email"
                    id="email"
                    class="w-full border-gray-200 p-4 pe-12 text-sm shadow-sm"
                    placeholder="Enter email"
                    style="border-bottom: 1px solid black"
                    required autofocus
                />
        
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                  </svg>
                </span>
              </div>
            </div>
        
        
            <div class="py-8 flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    <a class="underline" href="{{ route('register') }}">{{ __('Sign up for a new account!') }}</a>
                </p>

                <button
                    type="submit"
                    class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                >
                {{ __('Email Password Reset Link') }}
                </button>
            </div>
          </form>
        </div>
        
        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
          <img
            alt=""
            src="https://images.unsplash.com/photo-1711873314750-39f3b0d45f09?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="absolute inset-0 h-full w-full object-cover"
          />
        </div>
    </section>
</x-guest-layout>

