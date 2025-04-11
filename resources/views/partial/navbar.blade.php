<!-- Navigation -->
<nav class="bg-blue-700 text-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-extrabold tracking-wide">Auto Rent Pro</div>

        <!-- Links -->
        <div class="flex items-center space-x-6">
            <a href="{{ route('home') }}" class="hover:text-blue-200 transition-colors">Accueil</a>
            <a href="{{ route('cataloge') }}" class="hover:text-blue-200 transition-colors">Voitures</a>
            <a href="#" class="hover:text-blue-200 transition-colors">Services</a>
            <a href="#" class="hover:text-blue-200 transition-colors">Contact</a>

            @auth
                <a
                    @if (auth()->user()->role == 'client') 
                        href="{{ route('profile') }}"
                    @elseif (auth()->user()->role == 'admin') 
                        href="{{ route('dashboardAdmin') }}"
                    @else
                        href="{{ route('dashboardOwner') }}"
                    @endif
                    class="flex items-center gap-2 bg-white text-blue-700 hover:bg-blue-100 transition-colors px-4 py-2 rounded-md"
                >
                    <span class="material-symbols-outlined">account_circle</span>
                </a>
            @else
                <a href="{{ route('login') }}" class="bg-white text-blue-700 hover:bg-blue-100 transition-colors px-4 py-2 rounded-md">
                    Connexion
                </a>
            @endif
        </div>
    </div>
</nav>
