<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50">
    <!-- Navigation Bar -->
    <nav class="bg-slate-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <i class="fas fa-university text-white text-2xl mr-3"></i>
                    <a href="#" class="text-white text-2xl font-serif">College Portal</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('colleges.index') }}" class="text-white hover:text-slate-300 transition-colors duration-200 font-medium">Home</a>
                    <a href="#" class="text-white hover:text-slate-300 transition-colors duration-200 font-medium">About</a>
                    <a href="#" class="text-white hover:text-slate-300 transition-colors duration-200 font-medium">Contact</a>
                    <a href="{{ route('colleges.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors duration-200 font-medium">Add New College</a>
                </div>
                <div class="md:hidden">
                    <button id="nav-toggle" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <a href="{{ route('colleges.index') }}" class="block px-4 py-2 text-slate-800 hover:bg-slate-100">Home</a>
            <a href="#" class="block px-4 py-2 text-slate-800 hover:bg-slate-100">About</a>
            <a href="#" class="block px-4 py-2 text-slate-800 hover:bg-slate-100">Contact</a>
            <a href="{{ route('colleges.create') }}" class="block px-4 py-2 text-slate-800 hover:bg-slate-100">Add New College</a>
        </div>
    </nav>

    <div class="min-h-screen p-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="border-b border-gray-200 bg-slate-800 px-8 py-6">
                    <h1 class="text-3xl font-serif text-white text-center">College Details</h1>
                </div>

                <div class="p-6">
                    <table class="w-full text-sm">
                        <tbody>
                            <tr class="border-b border-slate-100">
                                <th class="px-6 py-4 text-left text-slate-700 font-semibold bg-slate-50 w-1/3">College Name</th>
                                <td class="px-6 py-4 text-slate-600">{{ $college->colName }}</td>
                            </tr>
                            <tr class="border-b border-slate-100">
                                <th class="px-6 py-4 text-left text-slate-700 font-semibold bg-slate-50">College Short Name</th>
                                <td class="px-6 py-4 text-slate-600">{{ $college->colShortName }}</td>
                            </tr>
                            <tr class="border-b border-slate-100">
                                <th class="px-6 py-4 text-left text-slate-700 font-semibold bg-slate-50">Description</th>
                                <td class="px-6 py-4 text-slate-600">{{ $college->description }}</td>
                            </tr>
                            <tr class="border-b border-slate-100">
                                <th class="px-6 py-4 text-left text-slate-700 font-semibold bg-slate-50">Location</th>
                                <td class="px-6 py-4 text-slate-600">{{ $college->colLocation }}</td>
                            </tr>
                            <tr class="border-b border-slate-100">
                                <th class="px-6 py-4 text-left text-slate-700 font-semibold bg-slate-50">Telephone Number</th>
                                <td class="px-6 py-4 text-slate-600">{{ $college->telNo }}</td>
                            </tr>
                            <tr class="border-b border-slate-100">
                                <th class="px-6 py-4 text-left text-slate-700 font-semibold bg-slate-50">Local Number</th>
                                <td class="px-6 py-4 text-slate-600">{{ $college->localNo }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-8 text-center">
                        <a href="{{ route('colleges.index') }}" 
                           class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition-colors duration-200">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back to Colleges
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>