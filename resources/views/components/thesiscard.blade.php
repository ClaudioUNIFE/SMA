<div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105">
    <a href="{{ route('theses.showForm', $thesis->id) }}" class="block">
        <div class="flex flex-col items-center">
            <!-- Immagine della tesi -->
            <div class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $thesis->image) }}" alt="Thesis Image" class="object-cover w-full h-full">
            </div>

            <!-- Titolo della tesi -->
            <h2 class="mt-4 text-lg font-bold text-gray-900 dark:text-white text-center">{{ $thesis->title }}</h2>

            <!-- Descrizione della tesi -->
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 text-center">
                {{ \Illuminate\Support\Str::limit($thesis->description, 100) }} <!-- Limita la descrizione a 100 caratteri -->
            </p>
        </div>
    </a>

    <!-- Pulsanti Azioni -->
    <div class="flex justify-between mt-4 space-x-2">
        <!-- Pulsante Modifica -->
        <a href="{{ route('theses.showupdate', $thesis->id) }}" class="flex-1 px-4 py-2 bg-yellow-500 text-white text-sm font-medium text-center rounded-lg hover:bg-yellow-600">
            ✏️ Modifica
        </a>

        <!-- Pulsante Cancella -->
        <a href="{{ route('theses.destroy', $thesis->id) }}" class="flex-1 px-4 py-2 bg-red-600 text-white text-sm font-medium text-center rounded-lg hover:bg-red-700">
            🗑️ Cancella
        </a>
    </div>
</div>
