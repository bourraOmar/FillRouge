<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-blue': '#3B82F6'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-gray-800">
    <nav class="bg-blue-500 shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-2xl font-bold text-white">Auto Rent Pro</div>
            <div class="space-x-6">
                <a href="{{ route('home') }}" class="text-white hover:text-gray-300">Accueil</a>
                <a href="{{ route('cataloge') }}" class="text-white hover:text-gray-300">Voitures</a>
                <a href="#" class="text-white hover:text-gray-300">Services</a>
                <a href="#Contact" class="text-white hover:text-gray-300">Contact</a>
                <a href="#" class="bg-white text-blue-500 px-4 py-2 rounded hover:text-blue-700">Connexion</a>
            </div>
        </div>
    </nav>

    <header class="container mx-auto px-4 py-16 flex items-center">
        <div class="w-1/2 pr-8">
            <h1 class="text-4xl font-bold mb-4">Vivez l'Exception Automobile</h1>
            <p class="text-gray-600 mb-6">Des véhicules d'exception sélectionnés pour leur performance, leur élégance et
                leur caractère unique. Découvrez notre collection exclusive et réservez votre prochaine expérience de
                conduite.</p>
            <div class="flex space-x-4">
                <a href="#" class="bg-brand-blue text-white px-6 py-3 rounded hover:bg-blue-700">Voir la collection</a>
                <a href="#" class="border border-gray-300 text-gray-700 px-6 py-3 rounded hover:bg-gray-100">En savoir
                    plus</a>
            </div>
            <div class="mt-8 flex space-x-8">
                <div>
                    <div class="text-3xl font-bold text-brand-blue">20+</div>
                    <div class="text-gray-600">Véhicules de luxe</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand-blue">24/7</div>
                    <div class="text-gray-600">Support client</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand-blue">100%</div>
                    <div class="text-gray-600">Satisfaction Client</div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('storage/img/car5.jpg') }}" alt="Luxury Car" class="w-full rounded-lg shadow-xl">
        </div>
    </header>

    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Notre Collection</h2>
        <div class="grid grid-cols-3 gap-8">
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/img/car2.jpeg') }}" alt="Dacia Sandero" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Dacia Sandero</h3>
                    <p class="text-gray-600 mb-4">Sport - Hybride</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold">75€/jour</span>
                        <a href="#" class="bg-brand-blue text-white px-4 py-2 rounded hover:bg-blue-700">Réserver</a>
                    </div>
                </div>
            </div>
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/img/car3.jpg') }}" alt="Ford Bronco" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Ford Bronco</h3>
                    <p class="text-gray-600 mb-4">Family - Hybride</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold">155€/jour</span>
                        <a href="#" class="bg-brand-blue text-white px-4 py-2 rounded hover:bg-blue-700">Réserver</a>
                    </div>
                </div>
            </div>
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/img/car8.jpg') }}" alt="Peugeot 2008" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Peugeot 2008</h3>
                    <p class="text-gray-600 mb-4">Family - Hybride</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold">235€/jour</span>
                        <a href="#" class="bg-brand-blue text-white px-4 py-2 rounded hover:bg-blue-700">Réserver</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="#" class="bg-brand-blue text-white px-6 py-3 rounded hover:bg-blue-700">Voir plus</a>
        </div>
    </section>

    <section class="container mx-auto px-4 py-16 flex items-center">
        <div class="w-1/2 pr-8">
            <h2 class="text-3xl font-bold mb-6">À Propos de Nous</h2>
            <p class="text-gray-600 mb-4">Chez Drive & Loc, nous nous engageons à offrir une expérience de location de
                voitures de luxe inégalée. Notre passion pour l'automobile nous pousse à sélectionner les véhicules les
                plus performants, élégants et uniques pour nos clients.</p>
            <p class="text-gray-600 mb-6">Fondée en 2024, notre entreprise s'est rapidement imposée comme un leader dans
                le domaine de la location de voitures de luxe. Nous proposons une gamme variée de véhicules, allant des
                berlines élégantes aux supercars puissantes, pour répondre à tous vos besoins.</p>
            <a href="#" class="bg-brand-blue text-white px-6 py-3 rounded hover:bg-blue-700">En savoir plus</a>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('storage/img/car6.jpg') }}" alt="Luxury Car" class="w-full rounded-lg shadow-xl">
        </div>
    </section>

    <section class="py-16 ">
        <div id="Contact" class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Contactez-Nous</h2>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <p class="text-gray-600 mb-8">
                        Vous avez des questions ou besoin d'assistance ? Notre équipe est là pour vous aider. N'hésitez pas à nous contacter par téléphone, email ou via le formulaire de contact ci-dessous.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-800 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+33 1 23 45 67 89</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-800 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>contact@drive-loc.fr</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-800 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>75008 Paris, France</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Nom</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-brand-blue text-white py-8">
        <div class="container mx-auto px-4 flex justify-between">
            <div>
                <h3 class="text-xl font-bold mb-4">Auto Rent Pro</h3>
                <p>L'excellence automobile à votre service.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-2">Navigation</h4>
                <div class="space-y-1">
                    <a href="#" class="block hover:text-gray-200">Accueil</a>
                    <a href="#" class="block hover:text-gray-200">Collection</a>
                    <a href="#" class="block hover:text-gray-200">Services</a>
                </div>
            </div>
            <div>
                <h4 class="font-semibold mb-2">Contact</h4>
                <p>+33 1 23 45 67 89</p>
                <p>contact@drive-loc.fr</p>
                <p>75008 Paris, France</p>
            </div>
        </div>
        <div class="text-center mt-8 text-sm">
            © 2024 Drive & Loc. Tous droits réservés.
        </div>
    </footer>
</body>

</html>