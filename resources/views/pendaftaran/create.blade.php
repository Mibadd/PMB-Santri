<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir Pendaftaran Mahasantri Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('pendaftaran.store') }}"
                        x-data="{ kategori: '{{ old('kategori', 'Reguler') }}' }" enctype="multipart/form-data">
                        @csrf

                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Pribadi</h3>

                        <div>
                            <x-input-label for="name" :value="__('Nama Lengkap (sesuai akun)')" />
                            <x-text-input id="name" class="block mt-1 w-full bg-gray-100" type="text"
                                :value="Auth::user()->name" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="no_hp" :value="__('Nomor HP (sesuai akun)')" />
                            <x-text-input id="no_hp" class="block mt-1 w-full bg-gray-100" type="text"
                                :value="Auth::user()->no_telp" readonly />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir"
                                :value="old('tempat_lahir')" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir"
                                :value="old('tanggal_lahir')" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="no_hp_orang_tua" :value="__('Nomor HP Orang Tua/Wali')" />
                            <x-text-input id="no_hp_orang_tua" class="block mt-1 w-full" type="text"
                                name="no_hp_orang_tua" :value="old('no_hp_orang_tua')" required />
                        </div>

                        <hr class="my-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Detail Pendaftaran</h3>

                        <div>
                            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kategori" :value="__('Kategori Pendaftaran')" />
                            <select name="kategori" id="kategori" x-model="kategori"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="Reguler">Reguler</option>
                                <option value="Non Reguler">Non Reguler (Beasiswa KIP)</option>
                            </select>
                        </div>

                        <div id="form-kip" x-show="kategori === 'Non Reguler'" class="mt-4 space-y-4 border-t pt-4">
                            <h3 class="font-semibold text-lg text-gray-700">Formulir Khusus Non-Reguler (KIP)</h3>
                            <div>
                                <x-input-label for="no_kip" :value="__('Nomor KIP')" />
                                <x-text-input id="no_kip" class="block mt-1 w-full" type="text" name="no_kip"
                                    :value="old('no_kip')" />
                            </div>
                            <div>
                                <x-input-label for="dokumen_kip" :value="__('Unggah Dokumen KIP (PDF/JPG)')" />
                                <input type="file" name="dokumen_kip" id="dokumen_kip"
                                    class="block mt-1 w-full border-gray-300 rounded-md p-2">
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('Alamat Lengkap')" />
                            <textarea name="alamat" id="alamat"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required>{{ old('alamat') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="asal_sekolah" :value="__('Asal Sekolah/Kampus')" />
                            <x-text-input id="asal_sekolah" class="block mt-1 w-full" type="text" name="asal_sekolah"
                                :value="old('asal_sekolah')" required />
                        </div>

                        <div class="block mt-4">
                            <label for="pernyataan_persetujuan" class="inline-flex items-center">
                                <input id="pernyataan_persetujuan" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="pernyataan_persetujuan" value="1" required>
                                <span
                                    class="ms-2 text-sm text-gray-600">{{ __('Saya menyatakan bersedia mematuhi seluruh peraturan pesantren.') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Simpan dan Lanjutkan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>