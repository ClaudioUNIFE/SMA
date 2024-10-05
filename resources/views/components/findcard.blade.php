<div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 " style="grid-template-columns: repeat(3, minmax(0, 1fr));">
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
                <a href="{{ route('find.showupdate', $find->id) }}" class="flex items-center justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">✏️</a>
                <a href="{{ route('find.destroy', $find->id) }}" class="flex items-center justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">🗑️</a>
<div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
    <a href="{{ route('find.showform', $find->id) }}" class="block">
        <div class="flex flex-col items-center">
            <!-- Immagine del reperto -->
            <div class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $find->foto_principale) }}" alt="Find Image" class="object-cover w-full h-full">
            </div>

            <!-- Riferimento tassonomico -->
            <h2 class="mt-4 text-lg font-bold text-gray-900 dark:text-white text-center">{{ $find->riferimento_tassonomico }}</h2>

            <!-- Nome comune -->
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 text-center">{{ $find->nome_comune }}</p>

            <!-- Descrizione -->
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 text-center">
                {{ \Illuminate\Support\Str::limit($find->descrizione, 100) }} <!-- Limita la descrizione a 100 caratteri -->
            </p>
        </div>
    </a>

    <!-- Pulsanti Azioni -->
    <div class="flex justify-between mt-4 space-x-2">
        <!-- Pulsante Modifica -->
        <a href="{{ route('find.showupdate', $find->id) }}" class="flex-1 px-4 py-2 bg-yellow-500 text-white text-sm font-medium text-center rounded-lg hover:bg-yellow-600">
            ✏️ Modifica
        </a>

        <!-- Pulsante Cancella -->
        <a href="{{ route('find.destroy', $find->id) }}" class="flex-1 px-4 py-2 bg-red-600 text-white text-sm font-medium text-center rounded-lg hover:bg-red-700">
            🗑️ Cancella
        </a>
    </div>
</div>
