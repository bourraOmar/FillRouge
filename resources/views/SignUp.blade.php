<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl flex shadow-lg">
        <div class="w-1/2 bg-cover bg-center relative" style="background-image: url('/api/placeholder/800/600');">
            <img src="/api/placeholder/800/600" alt="Classic car" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="absolute bottom-4 left-4 text-white">
                <div class="text-sm flex items-center space-x-2">
                    <img src="/api/placeholder/30/30" alt="Worldwide Projects Logo" class="w-8 h-8">
                    <span>Worldwide Projects</span>
                </div>
                <h2 class="text-2xl font-bold mt-2">Allswage Van Racking</h2>
            </div>
        </div>
        <div class="w-1/2 bg-white p-12 flex flex-col justify-center">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Create an account</h1>
                <p class="text-gray-600">
                    <a href="#" class="text-blue-600 hover:underline">Already have an account? Log in</a>
                </p>
            </div>
            <form class="space-y-4">
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First name</label>
                        <input type="text" id="firstName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="w-1/2">
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
                        <input type="text" id="lastName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                    <input type="text" id="role" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">
                    Create account
                </button>
            </form>
        </div>
    </div>
</body>
</html>