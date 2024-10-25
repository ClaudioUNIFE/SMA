<div style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
    <div x-data="{ open: false }" class="relative">
        <!-- Bottone principale -->
        <button 
            @click="open = !open"
            @click.stop
            style="background-color: #3490dc; color: white; padding: 15px; border-radius: 50%; box-shadow: 0 2px 4px rgba(0,0,0,0.1);"
        >
            <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </button>

        <!-- Menu dropdown con animazione verso l'alto -->
        <div 
            x-show="open" 
            x-cloak
            @click.away="open = false"
            x-transition:enter="transition ease-out duration-200" 
            x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-2"
            style="position: absolute; bottom: 100%; right: 0; margin-bottom: 10px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 200px;"
            class="z-150"
        >
            <a href="{{ route('profile.edit') }}" style="display: block; padding: 10px 15px; color: #333; text-decoration: none;">
                Il mio profilo
            </a>
            <hr style="border: 0; border-top: 1px solid #edf2f7;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="width: 100%; text-align: left; padding: 10px 15px; color: #333; background: none; border: none; cursor: pointer;">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
