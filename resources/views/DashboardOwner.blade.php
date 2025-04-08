<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-blue': '#4366F4',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen bg-gray-100">
        <!-- Header -->
        <header class="bg-brand-blue text-white py-4 px-6 flex justify-between items-center">
            <div class="text-lg font-bold">Auto Rent Pro</div>
            <nav class="space-x-4">
                <a href="#" class="hover:text-gray-200">Accueil</a>
                <a href="#" class="hover:text-gray-200">Voitures</a>
                <a href="#" class="hover:text-gray-200">Services</a>
                <a href="#" class="hover:text-gray-200">Contact</a>
                <a href="#" class="bg-red-500 px-3 py-1 rounded hover:bg-red-600">Logout</a>
            </nav>
        </header>

        <!-- Dashboard Hero -->
        <div class="relative h-64 bg-gradient-to-r from-brand-blue to-purple-600 flex items-center">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-white">Propriétaire Space Dashboard</h1>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="container mx-auto mt-12 grid grid-cols-4 gap-4 px-4 ">
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500 ">
                <div class="text-gray-500 mb-2">Total Vehicles</div>
                <div class="text-3xl font-bold text-brand-blue">4</div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-500">
                <div class="text-gray-500 mb-2">Total Réservations</div>
                <div class="text-3xl font-bold text-brand-blue">3</div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-red-500">
                <div class="text-gray-500 mb-2">Revenu Mensuel</div>
                <div class="text-3xl font-bold text-green-600">723€</div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-500">
                <div class="text-gray-500 mb-2">Taux d'Occupation</div>
                <div class="text-3xl font-bold text-orange-600">75%</div>
            </div>
        </div>

        <!-- Vehicles Table -->
        <div class="container mx-auto mt-8 px-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="flex justify-between items-center p-4 border-b">
                    <h2 class="text-xl font-semibold">Les Vehicles</h2>
                    <button class="bg-brand-blue text-white px-4 py-2 rounded hover:bg-blue-700">
                        Add Vehicle
                    </button>
                </div>
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Model</th>
                            <th class="p-3 text-left">Marque</th>
                            <th class="p-3 text-left">Category</th>
                            <th class="p-3 text-left">Price/Day</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">6</td>
                            <td class="p-3">golf</td>
                            <td class="p-3">volkswagen</td>
                            <td class="p-3">luxury</td>
                            <td class="p-3">300$</td>
                            <td class="p-3">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">waiting</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                                <button class="text-red-500 hover:text-red-700">🗑️</button>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">3</td>
                            <td class="p-3">sandero</td>
                            <td class="p-3">dacia</td>
                            <td class="p-3">sport</td>
                            <td class="p-3">75$</td>
                            <td class="p-3">
                                <span class="bg-red-100 text-red-800 px-2 py-1 rounded">refused</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                                <button class="text-red-500 hover:text-red-700">🗑️</button>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">4</td>
                            <td class="p-3">bronco</td>
                            <td class="p-3">ford</td>
                            <td class="p-3">family</td>
                            <td class="p-3">15$</td>
                            <td class="p-3">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded">active</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                                <button class="text-red-500 hover:text-red-700">🗑️</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">5</td>
                            <td class="p-3">2008</td>
                            <td class="p-3">Peugeot</td>
                            <td class="p-3">family</td>
                            <td class="p-3">23$</td>
                            <td class="p-3">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded">active</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">✏️</button>
                                <button class="text-red-500 hover:text-red-700">🗑️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Reservations Table -->
        <div class="container mx-auto mt-8 px-4 mb-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4 border-b">
                    <h2 class="text-xl font-semibold">Les Réservations</h2>
                </div>
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Client</th>
                            <th class="p-3 text-left">Vehicle</th>
                            <th class="p-3 text-left">Start Date</th>
                            <th class="p-3 text-left">End Date</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">2</td>
                            <td class="p-3">omar bourra</td>
                            <td class="p-3">sandero dacia</td>
                            <td class="p-3">2025-01-05</td>
                            <td class="p-3">2025-01-06</td>
                            <td class="p-3">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded">accepté</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">👁️</button>
                                <button class="text-red-500 hover:text-red-700">❌</button>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">5</td>
                            <td class="p-3">Taliss basha</td>
                            <td class="p-3">dacia sandero</td>
                            <td class="p-3">2025-02-11</td>
                            <td class="p-3">2025-02-13</td>
                            <td class="p-3">
                                <span class="bg-red-100 text-red-800 px-2 py-1 rounded">refusé</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">👁️</button>
                                <button class="text-red-500 hover:text-red-700">❌</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">8</td>
                            <td class="p-3">ahmed basha</td>
                            <td class="p-3">bronco ford</td>
                            <td class="p-3">2025-02-11</td>
                            <td class="p-3">2025-02-13</td>
                            <td class="p-3">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">waiting</span>
                            </td>
                            <td class="p-3 flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">👁️</button>
                                <button class="text-green-500 hover:text-green-700">✓</button>
                                <button class="text-red-500 hover:text-red-700">❌</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        @if (View::exists('partia'))
        
        @endif
    </div>
</body>
</html>