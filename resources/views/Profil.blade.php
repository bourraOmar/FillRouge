<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro - User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <nav class="bg-blue-600 text-white py-4 mb-8">
            <div class="container mx-auto flex justify-between items-center px-4">
                <h1 class="text-2xl font-bold">Auto Rent Pro</h1>
                <div class="space-x-4">
                    <a href="#" class="hover:text-blue-200">Accueil</a>
                    <a href="#" class="hover:text-blue-200">Voitures</a>
                    <a href="#" class="hover:text-blue-200">Services</a>
                    <a href="#" class="hover:text-blue-200">Contact</a>
                    <a href="#" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">Logout</a>
                </div>
            </div>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-1 bg-white shadow-md rounded-lg p-6">
                <div class="flex flex-col items-center">
                    <div class="bg-gray-300 rounded-full w-24 h-24 flex items-center justify-center mb-4">
                        <svg class="w-16 h-16 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold">omar bourra</h2>
                    <p class="text-gray-500">User</p>
                    <p class="text-gray-500 mt-2">omar@gmail.com</p>
                </div>

                <div class="mt-6 border-t pt-4">
                    <h3 class="font-semibold mb-3">Contact Information</h3>
                    <div class="space-y-2">
                        <p class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +1 (555) 123-4567
                        </p>
                        <p class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            omar@gmail.com
                        </p>
                        <p class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            New York, USA
                        </p>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">My Reservations</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="p-3">VEHICLE</th>
                                <th class="p-3">START DATE</th>
                                <th class="p-3">END DATE</th>
                                <th class="p-3">TOTAL PRICE</th>
                                <th class="p-3">STATUS</th>
                                <th class="p-3">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="p-3">sandero dacia</td>
                                <td class="p-3">Jan 05, 2025</td>
                                <td class="p-3">Jan 06, 2025</td>
                                <td class="p-3">7.00 $</td>
                                <td class="p-3">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded">accepte</span>
                                </td>
                                <td class="p-3"></td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-3">sandero dacia</td>
                                <td class="p-3">Jan 17, 2025</td>
                                <td class="p-3">Jan 22, 2025</td>
                                <td class="p-3">7.00 $</td>
                                <td class="p-3">
                                    <span class="bg-red-100 text-red-800 px-2 py-1 rounded">refuse</span>
                                </td>
                                <td class="p-3"></td>
                            </tr>
                            <tr>
                                <td class="p-3">bronco ford</td>
                                <td class="p-3">Feb 11, 2025</td>
                                <td class="p-3">Feb 13, 2025</td>
                                <td class="p-3">15.00 $</td>
                                <td class="p-3">
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">waiting</span>
                                </td>
                                <td class="p-3">
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <footer class="bg-blue-600 text-white mt-8 py-6">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
                <div>
                    <h3 class="font-bold mb-3">Auto Rent Pro</h3>
                    <p>L'excellence automobile à votre service.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-3">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-200">Accueil</a></li>
                        <li><a href="#" class="hover:text-blue-200">Collection</a></li>
                        <li><a href="#" class="hover:text-blue-200">Services</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-3">Contact</h3>
                    <p>+33 1 23 45 67 89</p>
                    <p>contact@drive-loc.fr</p>
                    <p>75008 Paris, France</p>
                </div>
            </div>
            <div class="text-center mt-6 text-sm">
                © 2024 Drive & Loc. Tous droits réservés.
            </div>
        </footer>
    </div>
</body>
</html>