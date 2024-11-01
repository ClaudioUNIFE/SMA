<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
            <p class="font-semibold text-2xl">Total Searched Finds: <span id="total_records">0</span></p>
        </div>

        <input type="text" 
               name="search" 
               id="search" 
               class="w-full p-4 mb-6 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 text-black"
               style="color: black;"
               placeholder="Search Finds..." />

        <!-- Container per i risultati -->
        <div id="results">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($finds as $find)
                    <x-findcard :find="$find" />
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            let timeout = null;

            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('finds.action') }}", // Assicurati che questa rotta esista
                    method: 'GET',
                    data: { query: query },
                    dataType: 'json',
                    beforeSend: function() {
                        // Mostra un indicatore di caricamento (opzionale)
                        $('#results').html('<div class="text-center"><p>Caricamento...</p></div>');
                    },
                    success: function(response) {
                        // Log per debugging
                        console.log("Risposta ricevuta:", response);
                        
                        if(response.error) {
                            $('#results').html('<div class="text-center text-red-500">' + response.error + '</div>');
                            $('#total_records').text('0');
                        } else {
                            $('#results').html(response.table_data);
                            $('#total_records').text(response.total_data);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Errore AJAX:", error);
                        console.error("Status:", status);
                        console.error("Response:", xhr.responseText);
                        $('#results').html('<div class="text-center text-red-500">Errore durante la ricerca</div>');
                    }
                });
            }

            // Evento keyup con debounce
            $('#search').on('keyup', function() {
                clearTimeout(timeout);
                
                const query = $(this).val();
                console.log("Query digitata:", query);
                
                timeout = setTimeout(function() {
                    fetch_customer_data(query);
                }, 500);
            });

            // Carica i dati iniziali
            fetch_customer_data();
        });
    </script>
</x-app-layout>