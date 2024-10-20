<nav x-data="{ open: false }" class="bg-custom-navbar dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/sma.png') }}" alt="SMA" class="w-16 h-auto">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="flex space-x-8 sm:flex sm:ms-10">
                <!-- Dashboard Link -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white text-lg hover:text-gray-300 transition duration-150 ease-in-out">
                    {{ __('Dashboard') }}
                </x-nav-link>

                <!-- Dropdown per Reperto -->
                <div class="relative">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-lg text-white bg-gray-800 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 rounded-md">
                                <span>{{ __('Reperto') }}</span>
                                <svg class="ml-1 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('find.showlist')" :active="request()->routeIs('find.showlist')">
                                {{ __('Consultazione Reperto') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('find.showstore')" :active="request()->routeIs('find.showstore')">
                                {{ __('Inserimento Reperto') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('finds.showadvancedSearch')" :active="request()->routeIs('finds.showadvancedSearch')">
                                {{ __('Ricerca Avanzata') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Gestione Depositi -->
                <x-nav-link :href="route('deposits.index')" :active="request()->routeIs('deposits.index')" class="text-white text-lg hover:text-gray-300 transition duration-150 ease-in-out">
                    {{ __('Gestione depositi') }}
                </x-nav-link>

                <!-- Gestione Collezioni -->
                <x-nav-link :href="route('collection.index')" :active="request()->routeIs('collection.index')" class="text-white text-lg hover:text-gray-300 transition duration-150 ease-in-out">
                    {{ __('Gestione collezioni') }}
                </x-nav-link>

                <!-- Dropdown per Tesi -->
                <div class="relative">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-lg text-white bg-gray-800 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 rounded-md">
                                <span>{{ __('Tesi') }}</span>
                                <svg class="ml-1 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('theses.showList')" :active="request()->routeIs('theses.showList')">
                                {{ __('Consultazione Tesi') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('theses.showStore')" :active="request()->routeIs('theses.showStore')">
                                {{ __('Caricamento Tesi') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Dropdown per Ruoli -->
                <div class="relative">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-lg text-white bg-gray-800 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 rounded-md">
                                <span>{{ __('Ruoli') }}</span>
                                <svg class="ml-1 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('employeeinfo.show')" :active="request()->routeIs('employeeinfo.show')">
                                {{ __('Rubrica') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('role.showRole')" :active="request()->routeIs('role.showRole')">
                                {{ __('Gestione Ruoli') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center ms-auto">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-gray-800 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-1 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
