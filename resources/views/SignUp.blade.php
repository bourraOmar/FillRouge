<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create an Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen bg-gray-100">

  <div class="flex flex-col md:flex-row h-full">

    <!-- Left Side Image Section (matched to login page) -->
    <div class="md:w-1/2 w-full h-1/2 md:h-full relative">
      <img src="{{ asset('storage/img/car4.jpg') }}" alt="Classic car" class="w-full h-full object-cover"/>
      <div class="absolute inset-0 bg-blue-500 opacity-60"></div>
      <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-6">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">Drive Your Dream Car Today</h2>
        <p class="text-xl md:text-2xl opacity-90">
        Create an account to rent in minutes</p>
      </div>
    </div>

    <!-- Right Form Section -->
    <div class="md:w-1/2 w-full h-1/2 md:h-full bg-white flex items-center justify-center p-8 md:p-16">
      <div class="w-full max-w-xl">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Create an account</h1>
        <p class="text-base text-gray-600 mb-8">Already have an account?
          <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium"> Log in</a>
        </p>

        <form class="space-y-6 text-lg">
          <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
            <div class="w-full">
              <label for="firstName" class="block text-lg font-medium text-gray-700 mb-2">First name</label>
              <input type="text" id="firstName" placeholder="first name"
                     class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg"/>
            </div>
            <div class="w-full">
              <label for="lastName" class="block text-lg font-medium text-gray-700 mb-2">Last name</label>
              <input type="text" id="lastName" placeholder="last name"
                     class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg"/>
            </div>
          </div>
          <div>
            <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email address</label>
            <input type="email" id="email" placeholder="you@example.com"
                   class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg"/>
          </div>
          <div>
            <label for="role" class="block text-lg font-medium text-gray-700 mb-2">Role</label>
            <input type="text" id="role" placeholder="Role"
                   class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg"/>
          </div>
          <div>
            <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password</label>
            <input type="password" id="password" placeholder="Password"
                   class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg"/>


          </div>
          <button type="submit"
                  class="w-full bg-blue-600 text-white py-3 text-lg rounded-xl hover:bg-blue-700 transition duration-300 font-semibold shadow-md">
            Create account
          </button>
        </form>
      </div>
    </div>

  </div>

</body>
</html>
