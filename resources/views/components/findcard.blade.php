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
