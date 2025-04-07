<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">Auto Rent Pro</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-200">Accueil</a>
                <a href="#" class="hover:text-blue-200">Voitures</a>
                <a href="#" class="hover:text-blue-200">Services</a>
                <a href="#" class="hover:text-blue-200">Contact</a>
                <a href="#" class="bg-white text-blue-600 px-4 py-2 rounded">Connexion</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8 px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <img src="/api/placeholder/600/400" alt="AMG CLS" class="rounded-lg shadow-lg">
            </div>
            <div>
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-3xl font-bold">AMG CLS</h1>
                    <div>
                        <span class="bg-green-500 text-white px-2 py-1 rounded-full text-sm mr-2">active</span>
                        <span class="bg-red-500 text-white px-2 py-1 rounded-full text-sm">family</span>
                    </div>
                    <div class="text-2xl font-bold text-blue-600">$15/day</div>
                </div>
                <form class="bg-white p-6 rounded-lg shadow-md">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Pick-up Date</label>
                            <input type="date" class="w-full border rounded px-3 py-2">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Return Date</label>
                            <input type="date" class="w-full border rounded px-3 py-2">
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">Reserve Now</button>
                </form>
            </div>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4">Customer Reviews</h2>
            
            <div class="mb-6">
                <h3 class="text-xl mb-4">Add Your Review</h3>
                <textarea class="w-full border rounded p-4 mb-4" placeholder="Your Review"></textarea>
                <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Submit Review</button>
            </div>

            <div class="space-y-4">
                <div class="border-b pb-4">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-bold">John Doe</h4>
                        <span class="text-gray-500 text-sm">2 days ago</span>
                    </div>
                    <p>Great car! Very comfortable and fuel-efficient. The GPS was particularly helpful during my trip.</p>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-bold">Jane Smith</h4>
                        <span class="text-gray-500 text-sm">1 week ago</span>
                    </div>
                    <p>Clean and well-maintained vehicle. The pickup process was smooth and the staff was friendly.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-blue-600 text-white mt-8 py-8">
        <div class="container mx-auto grid md:grid-cols-3 gap-8 px-4">
            <div>
                <h3 class="text-xl font-bold mb-4">Auto Rent Pro</h3>
                <p>L'excellence automobile à votre service.</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Navigation</h4>
                <div class="space-y-2">
                    <a href="#" class="block hover:text-blue-200">Accueil</a>
                    <a href="#" class="block hover:text-blue-200">Collection</a>
                    <a href="#" class="block hover:text-blue-200">Services</a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-4">Contact</h4>
                <p>+33 1 23 45 67 89</p>
                <p>contact@drive-loc.fr</p>
                <p>75008 Paris, France</p>
            </div>
        </div>
        <div class="text-center mt-4 text-sm">
            © 2024 Drive & Loc. Tous droits réservés.
        </div>
    </footer>
</body>
</html>