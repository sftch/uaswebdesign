<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your CRM App</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navbar -->
    <nav class="bg-white shadow mb-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- Logo -->
                    <div>
                        <a href="{{ url('/') }}" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <svg class="h-6 w-6 mr-1 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 8v6m0 0l2-2m-2 2l-2-2" />
                            </svg>
                            <span class="font-bold">Your CRM</span>
                        </a>
                    </div>
                    <!-- Primary Nav -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('contacts.index') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contacts</a>
                        <a href="{{ route('contacts.create') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Add Contact</a>
                    </div>
                </div>
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-5 px-3">Login</a>
                    <a href="#" class="py-2 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Signup</a>
                </div>
                <!-- Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-700 hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden">
        <a href="{{ route('contacts.index') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Contacts</a>
        <a href="{{ route('contacts.create') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Add Contact</a>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4">
        @yield('content')
    </div>

    <script>
        const btn = document.querySelector('button.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
