<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen bg-gray-100">

  <div class="flex flex-col md:flex-row h-full">

    <!-- Left Side / Image Section -->
    <div class="md:w-1/2 w-full h-1/2 md:h-full relative">
      <img src="{{ asset('storage/img/car1.jpg') }}" alt="Classic car" class="w-full h-full object-cover"/>
      <div class="absolute inset-0 bg-blue-600 opacity-70"></div>
      <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-6">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">Welcome Back</h2>
        <p class="text-xl md:text-2xl opacity-90">Sign in to continue your journey</p>
      </div>
    </div>

    <!-- Right Side / Form Section -->
    <div class="md:w-1/2 w-full h-1/2 md:h-full bg-white flex items-center justify-center p-8 md:p-16">
      <div class="w-full max-w-lg">
        <h1 class="text-4xl font-bold text-gray-800 mb-5 flex items-center">
          <span class="mr-3 text-4xl">👋</span> Sign in to your account
        </h1>
        <p class="text-base text-gray-600 mb-8">
          Not a member?
          <a href="{{ route('signup') }}" class="text-blue-600 hover:underline font-semibold">Sign up</a>
        </p>

        <form class="space-y-6 text-lg">
          <div>
            <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email address</label>
            <input type="email" id="email" placeholder="you@example.com"
                   class="w-full px-5 py-3 text-lg border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password</label>
            <input type="password" id="password" placeholder="Password"
                   class="w-full px-5 py-3 text-lg border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div class="flex items-center justify-between text-base">
            <label class="flex items-center">
              <input type="checkbox" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"/>
              <span class="ml-3 text-gray-700">Remember me</span>
            </label>
            <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
          </div>
          <button type="submit"
                  class="w-full bg-blue-600 text-white text-lg py-3 rounded-xl hover:bg-blue-700 transition duration-300 font-semibold shadow-lg">
            Sign in
          </button>
        </form>
      </div>
    </div>

  </div>

</body>
</html>
