<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Auto Rent Pro</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=account_circle" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col font-sans text-gray-800">

    <!-- Navigation -->
    @if (View::exists('partial.navbar'))
        @include('partial.navbar')
    @endif

    <main class="flex-grow container mx-auto mt-10 px-4">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <!-- Car Image -->
            <div>
                <img src="{{ asset('storage/img/car6.jpg') }}" alt="AMG CLS" class="rounded-xl shadow-xl transition-transform duration-300 hover:scale-105"/>
            </div>

            <!-- Car Details & Booking -->
            <div class="space-y-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-4xl font-bold text-gray-900 mb-2">AMG CLS</h1>
                        <div class="flex space-x-2">
                            <span class="bg-green-600 text-white px-3 py-1 rounded-full text-xs uppercase tracking-wide">Active</span>
                            <span class="bg-red-600 text-white px-3 py-1 rounded-full text-xs uppercase tracking-wide">Family</span>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-blue-700">$15<span class="text-base font-medium text-gray-600">/day</span></div>
                </div>

                <form class="bg-white p-6 rounded-xl shadow-lg space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold mb-1">Pick-up Date</label>
                            <input type="date" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1">Return Date</label>
                            <input type="date" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-200 shadow-md">Reserve Now</button>
                </form>
            </div>
        </div>

        <!-- Reviews Section -->
        <section class="mt-16 bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6">Customer Reviews</h2>

            <!-- Review Form -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold mb-3">Add Your Review</h3>
                <textarea class="w-full border border-gray-300 rounded-lg p-4 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your review..."></textarea>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200 shadow">Submit Review</button>
            </div>

            <!-- Reviews List -->
            <div class="space-x-6">
                <div class="border-b pb-4">
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold">John Doe</h4>
                        <span class="text-sm text-gray-500">2 days ago</span>
                    </div>
                    <p class="text-gray-700">Great car! Very comfortable and fuel-efficient. The GPS was particularly helpful during my trip.</p>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <h4 class="font-semibold">Jane Smith</h4>
                        <span class="text-sm text-gray-500">1 week ago</span>
                    </div>
                    <p class="text-gray-700">Clean and well-maintained vehicle. The pickup process was smooth and the staff was friendly.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @if (View::exists('partial.footer'))
        @include('partial.footer')
    @endif
</body>
</html>
