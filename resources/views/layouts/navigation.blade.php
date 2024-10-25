<nav x-data="{ open: false }" class="navbar z-150 relative border-b-2 border-gray-300 text-gray-900">
    <div class="max-w-none px-4 sm:px-6 lg:px-8">        
        <div class="flex justify-between items-center h-16 w-full">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/sma.png') }}" alt="SMA" class="w-16 h-auto">
                </a>
            </div>

            <!-- Burger Button -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" class="burger-button focus:outline-none lg:hidden">
                    <svg x-show="!open" class="w-8 h-8 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="w-8 h-8 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <ul class="hidden sm:flex space-x-8 overflow-x-auto whitespace-nowrap items-center">
                <!-- Dashboard -->
                <li class="hover:bg-blue-800 hover:text-white">
                    <a href="{{ route('dashboard') }}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">
                        {{ __('Dashboard') }}
                    </a>
                </li>

                <!-- Reperto Dropdown -->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">
                        {{ __('Reperto') }}
                    </a>
                    <div class="mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800 w-full">
                        <div class="container mx-auto w-full flex flex-wrap justify-between p-8">
                            <!-- Sezione Links per Gestione Reperti -->
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-2xl text-white mb-4">{{ __('Gestione Reperti') }}</h3>
                                
                                <li class="mb-4">
                                    <a href="{{ route('find.showlist') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Consultazione Reperto') }}
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('find.showstore') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Inserimento Reperto') }}
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('finds.showadvancedSearch') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Ricerca Avanzata') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>


                <!-- Gestione Depositi -->
                <li class="hover:bg-blue-800 hover:text-white">
                    <a href="{{ route('deposits.index') }}" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">
                        {{ __('Gestione depositi') }}
                    </a>
                </li>

                <!-- Gestione Collezioni -->
                <li class="hover:bg-blue-800 hover:text-white">
                    <a href="{{ route('collection.index') }}" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">
                        {{ __('Gestione collezioni') }}
                    </a>
                </li>

                <!-- Tesi Dropdown -->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">
                        {{ __('Tesi') }}
                    </a>
                    <div class="mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800 w-full">
                        <div class="container mx-auto w-full flex flex-wrap justify-between p-8">
                            <!-- Sezione Links per Gestione Tesi -->
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-2xl text-white mb-4">{{ __('Gestione Tesi') }}</h3>
                                
                                <li class="mb-4">
                                    <a href="{{ route('theses.showList') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Consultazione Tesi') }}
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('theses.showStore') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Caricamento Tesi') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>


                                <!-- Ruoli Dropdown -->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">
                        {{ __('Ruoli') }}
                    </a>
                    <div class="mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800 w-full">
                        <div class="container mx-auto w-full flex flex-wrap justify-between p-8">
                            <!-- Sezione Links per Gestione Ruoli -->
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-2xl text-white mb-4">{{ __('Gestione Ruoli') }}</h3>
                                
                                <li class="mb-4">
                                    <a href="{{ route('employeeinfo.show') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Rubrica') }}
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('role.showRole') }}" class="block p-4 hover:bg-blue-600 text-gray-300 hover:text-white transition-all duration-300 rounded">
                                        {{ __('Gestione Ruoli') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <!-- Mobile Menu -->
<div x-show="open" class="sm:hidden mt-4 bg-gray-800 text-white rounded-md shadow-md">
    <div class="pt-2 pb-3 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="block px-4 py-3 hover:bg-gray-700 rounded">{{ __('Dashboard') }}</a>

        <!-- Reperto Dropdown Mobile -->
        <div class="border-t border-gray-700">
            <h3 class="font-bold text-lg px-4 py-3 bg-gray-700">{{ __('Reperto') }}</h3>
            <a href="{{ route('find.showlist') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Consultazione Reperto') }}</a>
            <a href="{{ route('find.showstore') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Inserimento Reperto') }}</a>
            <a href="{{ route('finds.showadvancedSearch') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Ricerca Avanzata') }}</a>
        </div>

        <!-- Gestione Depositi -->
        <a href="{{ route('deposits.index') }}" class="block px-4 py-3 hover:bg-gray-700 rounded">{{ __('Gestione depositi') }}</a>

        <!-- Gestione Collezioni -->
        <a href="{{ route('collection.index') }}" class="block px-4 py-3 hover:bg-gray-700 rounded">{{ __('Gestione collezioni') }}</a>

        <!-- Tesi Dropdown Mobile -->
        <div class="border-t border-gray-700">
            <h3 class="font-bold text-lg px-4 py-3 bg-gray-700">{{ __('Tesi') }}</h3>
            <a href="{{ route('theses.showList') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Consultazione Tesi') }}</a>
            <a href="{{ route('theses.showStore') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Caricamento Tesi') }}</a>
        </div>

        <!-- Ruoli Dropdown Mobile -->
        <div class="border-t border-gray-700">
            <h3 class="font-bold text-lg px-4 py-3 bg-gray-700">{{ __('Ruoli') }}</h3>
            <a href="{{ route('employeeinfo.show') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Rubrica') }}</a>
            <a href="{{ route('role.showRole') }}" class="block px-6 py-2 hover:bg-gray-700">{{ __('Gestione Ruoli') }}</a>
        </div>
    </div>
</div>

    </div>
</nav>