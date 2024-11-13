<div class="h-full">
    <a href="{{ route('theses.showForm', $thesis->id) }}" class="block h-full scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="outline-color: #ffa3ac">
        <div class="h-full flex flex-col justify-between">
            <div>
                <div class="w-full rounded-lg overflow-hidden">
                    <img src="{{ asset('images/sma.png') }}" alt="SMA" class="w-16 h-auto" style="float: right">
                </div>

                <!-- Titolo tesi -->
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $thesis->titolo }}</h2>

                <!-- Descrizione tesi -->
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    {{ \Illuminate\Support\Str::limit($thesis->autore, 100) }}
                </p>
            </div>

            <div class="mt-6 flex justify-end gap-2">
                <!-- Pulsante Modifica -->
                <form action="{{ route('theses.showupdate', $thesis->id) }}" method="GET" class="inline">
                    @csrf
                    <button type="submit" class="btn-primary">
                        ✏️
                    </button>
                </form>
                
                @if (Auth::user()->hasPermissionTo('delete-theses'))
                <button onclick="event.preventDefault(); showConfirmModal();" class="flex items-center justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-700 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    🗑️
                </button>
                @endif
            </div>
        </div>
    </a>
</div>

<!-- Modale di conferma -->
<div id="confirmModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Conferma Eliminazione</h2>
        <p class="mt-4 text-gray-500 dark:text-gray-400">Sei sicuro di voler eliminare questo elemento? Questa azione non può essere annullata.</p>

        <div class="mt-6 flex justify-end gap-4">
            <!-- Annullare -->
            <button onclick="hideConfirmModal()" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 text-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">
                Annulla
            </button>

            <!-- Bottone per confermare e inviare il form di cancellazione -->
            <form action="{{ route('theses.destroy', $thesis->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700 text-white">
                    Conferma
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Mostra modale di conferma
    function showConfirmModal() {
        document.getElementById('confirmModal').classList.remove('hidden');
    }

    // Nascondi modale di conferma
    function hideConfirmModal() {
        document.getElementById('confirmModal').classList.add('hidden');
    }
</script>
