<x-guest-layout>

    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
        <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1711873314750-39f3b0d45f09?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute inset-0 h-full w-full object-cover"
            />
        </aside>

        <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
            <div class="max-w-xl lg:max-w-3xl">
                <a class="block text-blue-600" href="#">
                    <span class="sr-only">Home</span>
                    <svg
                        class="h-8 sm:h-10"
                        viewBox="0 0 28 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <!-- SVG Path omitted for brevity -->
                    </svg>
                </a>

                <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                    Welcome to the Register 🦑
                </h1>

                <p class="mt-4 leading-relaxed text-gray-500">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam dolorum aliquam,
                    quibusdam aperiam voluptatum.
                </p>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 py-2" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" class="mt-8 grid grid-cols-6 gap-6">
                    @csrf

                    <div class="col-span-6">
                        <label for="Name" :value="__('Name')" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>

                        <input
                            type="text"
                            id="Name"
                            name="name"
                            placeholder="Name"
                            :value="old('name')" 
                            required 
                            autofocus
                            class="mt-1 w-full h-10 pl-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />
                    </div>

                    <div class="col-span-6">
                        <label for="Email" :value="__('Email')" class="block text-sm font-medium text-gray-700"> Email </label>
                    
                        <input
                            type="email"
                            id="Email"
                            name="email"
                            placeholder="Email"
                            :value="old('email')" 
                            required 
                            class="mt-1 w-full h-10 pl-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3">
                        <label for="Password" :value="__('Password')" class="block text-sm font-medium text-gray-700"> Password </label>
                    
                        <input
                            type="password"
                            id="Password"
                            name="password"
                            placeholder="Password"
                            required
                            autocomplete="new-password" 
                            class="mt-1 w-full h-10 pl-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3">
                        <label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700">
                            Password Confirmation
                        </label>
                    
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Confirmation Password"
                            required
                            class="mt-1 w-full h-10 pl-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />
                    </div>
                    
                    <div class="col-span-6">
                        <p class="text-sm text-gray-500">
                            By creating an account, you agree to our
                            <a href="#" class="text-gray-700 underline"> terms and conditions </a>
                            and
                            <a href="#" class="text-gray-700 underline">privacy policy</a>.
                        </p>
                    </div>

                    <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                        <button
                            type="submit"
                            class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                        >
                        {{ __('Register') }}
                        </button>

                        <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-gray-700 underline">Log in</a>.
                        </p>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-guest-layout>
