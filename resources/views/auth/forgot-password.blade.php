<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Masukkan email Anda yang terdaftar untuk verifikasi dan mendapatkan tautan reset kata sandi.
    </div>

    <!-- Status Sesi -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Alamat Email -->
        <div>
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Kirim Tautan Reset Kata Sandi
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>