<!-- Navigation -->
<nav class="bg-blue-700 text-white p-4">
  <div class="container mx-auto flex justify-between items-center">
    <div class="text-2xl font-bold">Auto Rent Pro</div>
    <div class="space-x-4">
      <a href="{{ route('home') }}" class="hover:text-blue-200">Accueil</a>
      <a href="{{ route('cataloge') }}" class="hover:text-blue-200">Voitures</a>
      <a href="#" class="hover:text-blue-200">Services</a>
      <a href="#" class="hover:text-blue-200">Contact</a>
      <!-- Logout Button -->
      <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        @method('POST')
        <button type="submit" class="bg-white text-red-700 px-4 py-2 rounded-md">
          Logout
        </button>
      </form>
    </div>
  </div>
</nav>