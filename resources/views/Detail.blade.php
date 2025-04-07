<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rent Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- navigation -->
    @if (view::exists('partial.navbar'))
        @include('partail.navbar')
    @endif

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

    @if (view::exists('partial.footer'))
        @include('partial.footer')
    @endif
</body>
</html>