<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    @if (view::exists('partial.navbar'))
        @include('partial.navbar')
    @endif
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Notre Collection</h1>
            <p class="text-gray-600">Découvrez notre sélection de véhicules de prestige</p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto mb-8">
            <div class="relative">
                <input type="text" placeholder="Toutes les catégories"
                    class="w-full p-3 pl-10 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Car Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Car Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/img/car2.jpeg') }}" alt="Dacia Sandero" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-sm text-blue-600 uppercase">sport</span>
                    <h3 class="text-lg font-semibold mt-1">dacia sandero</h3>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-xl font-bold text-gray-800">7$/jour</span>
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Réserver</button>
                    </div>
                </div>
            </div>

            <!-- Car Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/img/car6.jpg') }}" alt="Ford Bronco" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-sm text-blue-600 uppercase">family</span>
                    <h3 class="text-lg font-semibold mt-1">ford bronco</h3>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-xl font-bold text-gray-800">15$/jour</span>
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Réserver</button>
                    </div>
                </div>
            </div>

            <!-- Car Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x250" alt="Peugeot 2008" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-sm text-blue-600 uppercase">family</span>
                    <h3 class="text-lg font-semibold mt-1">Peugeot 2008</h3>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-xl font-bold text-gray-800">23$/jour</span>
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Réserver</button>
                    </div>
                </div>
            </div>

            <!-- Car Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x250" alt="Volkswagen Golf" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-sm text-blue-600 uppercase">luxury</span>
                    <h3 class="text-lg font-semibold mt-1">volkswagen golf</h3>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-xl font-bold text-gray-800">300$/jour</span>
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Réserver</button>
                    </div>
                </div>
            </div>

            <!-- Car Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x250" alt="Ford Bronco" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-sm text-blue-600 uppercase">family</span>
                    <h3 class="text-lg font-semibold mt-1">ford bronco</h3>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-xl font-bold text-gray-800">15$/jour</span>
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Réserver</button>
                    </div>
                </div>
            </div>

            <!-- Car Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x250" alt="Peugeot 2008" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-sm text-blue-600 uppercase">family</span>
                    <h3 class="text-lg font-semibold mt-1">Peugeot 2008</h3>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-xl font-bold text-gray-800">23$/jour</span>
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Réserver</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8 space-x-2">
            <button class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="bg-blue-500 text-white px-4 py-2 rounded">1</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">2</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">3</button>
            <button class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
    <!-- footer -->
    @if (View::exists('partial.footer'))
        @include('partial.footer')
    @endif
</body>

</html>