<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-500 via-purple-600 to-blue-500 px-4">
        <div class="w-full max-w-md bg-white/30 backdrop-blur-lg rounded-xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-white text-center mb-6">Login ke Akunmu</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-white text-sm text-center" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-white text-sm font-medium mb-1">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        required autofocus autocomplete="username"
                        class="w-full px-4 py-2 rounded-lg border border-white/50 bg-white/20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-pink-200 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-white text-sm font-medium mb-1">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full px-4 py-2 rounded-lg border border-white/50 bg-white/20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-pink-200 text-sm" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4">
                    <label class="inline-flex items-center text-white text-sm">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                        <span class="ml-2">Ingat saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-indigo-100 hover:text-white transition">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-white text-indigo-600 font-bold py-2 px-4 rounded-lg hover:bg-indigo-100 transition">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
