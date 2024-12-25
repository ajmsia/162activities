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
                    <h1 class="text-3xl font-serif text-white text-center">Add New College</h1>
                </div>

                <div class="p-8">
                    <form action="{{ route('colleges.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label for="colName" class="block text-sm font-medium text-slate-700">College Name</label>
                            <input type="text" name="colName" id="colName"
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-slate-800 bg-white p-2.5"
                                value="{{ old('colName') }}" required>
                        </div>

                        <div>
                            <label for="colShortName" class="block text-sm font-medium text-slate-700">College Short Name</label>
                            <input type="text" name="colShortName" id="colShortName"
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-slate-800 bg-white p-2.5"
                                value="{{ old('colShortName') }}" required>
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-slate-700">Description</label>
                            <textarea name="description" id="description" rows="3"
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-slate-800 bg-white p-2.5">{{ old('description') }}</textarea>
                        </div>

                        <div>
                            <label for="colLocation" class="block text-sm font-medium text-slate-700">College Location</label>
                            <input type="text" name="colLocation" id="colLocation"
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-slate-800 bg-white p-2.5"
                                value="{{ old('colLocation') }}">
                        </div>

                        <div>
                            <label for="telNo" class="block text-sm font-medium text-slate-700">Telephone Number</label>
                            <input type="text" name="telNo" id="telNo"
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-slate-800 bg-white p-2.5"
                                value="{{ old('telNo') }}">
                        </div>

                        <div>
                            <label for="localNo" class="block text-sm font-medium text-slate-700">Local Number</label>
                            <input type="text" name="localNo" id="localNo"
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-slate-800 bg-white p-2.5"
                                value="{{ old('localNo') }}">
                        </div>

                        <div class="flex gap-4 pt-4">
                            <button type="submit"
                                class="flex-1 py-3 px-4 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 transition-colors duration-200">
                                <i class="fas fa-plus mr-2"></i> Create College
                            </button>
                            <a href="{{ route('colleges.index') }}"
                                class="flex-1 py-3 px-4 text-sm font-medium text-slate-700 bg-slate-100 rounded-md hover:bg-slate-200 focus:ring-4 focus:ring-slate-300 transition-colors duration-200 text-center">
                                <i class="fas fa-times mr-2"></i> Cancel
                            </a>
                        </div>
                    </form>
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