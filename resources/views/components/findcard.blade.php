<div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 " style="margin: 5px">

        <a href="{{ route('find.showform', $find->id) }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="outline-color: #ffa3ac">
            <div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <img src="{{ asset('storage/' . $find->foto_principale) }}" alt="Find Image"/>
                </p>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $find->riferimento_tassonomico }}</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    {{ $find->nome_comune }}
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    {{ $find->descrizione }}
                </p>
                <div>
                    <!-- Form per la modifica (showupdate) -->
                    <form action="{{ route('find.showupdate', $find->id) }}" method="GET" class="inline">
                        @csrf
                        <button type="submit" class="flex items-center justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-green">
                            ✏️
                        </button>
                    </form>

                    <!-- Form per la cancellazione (destroy) -->
                    <form action="{{ route('find.destroy', $find->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex items-center justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                            🗑️
                        </button>
                    </form>
                </div>
            </div>
        </a>

</div>
