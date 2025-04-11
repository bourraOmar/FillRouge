<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen bg-white">
        <!-- Header -->
        @if (View::exists('partial.nav_profile'))
            @include('partial.nav_profile')
        @endif

        <!-- Dashboard Header -->
        <div class="relative h-48 bg-gradient-to-r from-blue-500 to-blue-700 flex items-center">
            <div class="z-50 container mx-auto px-4">
                <h1 class="text-4xl font-bold text-white">Admin Space - Dashboard</h1>
            </div>
            <div class="absolute inset-0 opacity-30">
                <img src="{{ asset('storage/img/car5.jpg') }}" alt="Car Background" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="container mx-auto px-4 py-8">
            <!-- Summary Cards -->
            <div class="grid grid-cols-3 gap-4 mb-8">
                <div class="bg-white shadow rounded-lg p-4 text-center border-t-4 border-blue-500">
                    <h3 class="text-gray-500">Total Véhicules</h3>
                    <p class="text-3xl font-bold text-blue-600">4</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center border-t-4 border-green-500">
                    <h3 class="text-gray-500">Total Réservations</h3>
                    <p class="text-3xl font-bold text-blue-600">3</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center border-t-4 border-red-500">
                    <h3 class="text-gray-500">Total Utilisateur</h3>
                    <p class="text-3xl font-bold text-blue-600">100</p>
                </div>
            </div>

            <!-- Categories Management -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">Categories Management</h2>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Add Category
                    </button>
                </div>
                <table class="w-full bg-white shadow rounded-lg overflow-hidden">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Name</th>
                            <th class="p-3 text-left">Description</th>
                            <th class="p-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">3</td>
                            <td class="p-3">sport</td>
                            <td class="p-3">Deserunt qui provide</td>
                            <td class="p-3 text-right">
                                <button class="text-blue-500 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-500"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">4</td>
                            <td class="p-3">luxury</td>
                            <td class="p-3">Obcaecati reprehende</td>
                            <td class="p-3 text-right">
                                <button class="text-blue-500 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-500"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Additional rows -->
                    </tbody>
                </table>
            </div>

            <!-- Vehicles Management -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Vehicles Management</h2>
                <table class="w-full bg-white shadow rounded-lg overflow-hidden">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Model</th>
                            <th class="p-3 text-left">Marque</th>
                            <th class="p-3 text-left">Category</th>
                            <th class="p-3 text-left">Price/Day</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">6</td>
                            <td class="p-3">volkswagen</td>
                            <td class="p-3">golf</td>
                            <td class="p-3">luxury</td>
                            <td class="p-3">300$</td>
                            <td class="p-3">
                                <span
                                    class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full text-xs">waiting</span>
                            </td>
                            <td class="p-3 text-right">
                                <button class="text-blue-500 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-500"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Additional vehicle rows -->
                    </tbody>
                </table>
            </div>

            <!-- Users Management -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Users Management</h2>
                <table class="w-full bg-white shadow rounded-lg overflow-hidden">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Client</th>
                            <th class="p-3 text-left">Role</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3">2</td>
                            <td class="p-3">omar bourra</td>
                            <td class="p-3">Client</td>
                            <td class="p-3">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs">accepte</span>
                            </td>
                            <td class="p-3 text-right">
                                <button class="text-blue-500 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-red-500"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Additional user rows -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        @if (View::exists('partial.footer'))
            @include('partial.footer')
        @endif
    </div>
</body>

</html>