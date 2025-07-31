{{-- Memberi tahu Laravel untuk menggunakan kerangka dari layouts/admin.blade.php --}}
@extends('layouts.admin')

{{-- Mendefinisikan bagian konten yang akan dimasukkan ke @yield('content') --}}
@section('content')

  <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-semibold text-black dark:text-white">
    Admin Dashboard
    </h2>
    <nav>
    <ol class="flex items-center gap-2">
      <li><a href="{{ route('admin.dashboard') }}">Dashboard /</a></li>
    </ol>
    </nav>
  </div>

  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
    <div
    class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
    {{-- Isi Card --}}
    <h4 class="text-title-md font-bold text-black dark:text-white">100</h4>
    <span>Total Pendaftar</span>
    </div>
    {{-- Tambahkan card lainnya di sini --}}
  </div>

@endsection