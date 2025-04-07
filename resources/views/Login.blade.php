<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In to Your Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl flex shadow-lg">
        <div class="w-1/2 bg-cover bg-center relative" style="background-image: url('/api/placeholder/800/600');">
            <img src="/api/placeholder/800/600" alt="Classic car" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-red-500 opacity-60"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div class="text-white text-center">
                    <h2 class="text-4xl font-bold mb-4">Welcome Back</h2>
                    <p class="text-lg opacity-80">Sign in to continue your journey</p>
                </div>
            </div>
        </div>
        <div class="w-1/2 bg-white p-12 flex flex-col justify-center">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2 flex items-center">
                    <span class="mr-3">👋</span>
                    Sign in to your account
                </h1>
                <p class="text-gray-600">
                    Not a member? 
                    <a href="#" class="text-blue-600 hover:underline">Sign up</a>
                </p>
            </div>
            <form class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">
                    Sign in
                </button>
            </form>
        </div>
    </div>
</body>
</html>