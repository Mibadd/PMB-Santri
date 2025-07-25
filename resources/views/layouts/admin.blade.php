<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>
<body>
    <div class="flex h-screen overflow-hidden">

        @include('admin.partials.sidebar')
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

            @include('admin.partials.header')
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('AdminTemplate/js/bundle.js') }}"></script>
</body>
</html>
