

<x-app-layout>

    <div>

        <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
            <p class="font-semibold" style="font-size: 1.5rem;">Total Searched Finds : <span id="total_records"></span></p>
        </div>

        <input style="width: 100%" type="text" name="search" id="search" class="form-control" placeholder="Search Finds..." />

        <div id="results">
             @foreach ($finds as $find)
                <x-findcard :find="$find" />
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            let timeout = null;  // Variabile per gestire il timeout

            // Funzione che effettua la ricerca e popola i risultati
            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('finds.action') }}",  // Rotta verso il controller
                    method: 'GET',
                    data: { query: query },  // Invia la query
                    dataType: 'json',
                    success: function(data) {
                        // Log dei dati ricevuti per il debug
                        console.log("Risposta ricevuta dal server:", data);

                        // Popola i risultati nel DOM
                        $('#results').html(data.table_data);
                        // Aggiorna il numero totale di record
                        $('#total_records').text(data.total_data);
                    },
                    error: function(xhr, status, error) {
                        // Log per il debug degli errori
                        console.error("Errore durante la richiesta AJAX: ", error);
                    }
                });
            }

            // Ascolta l'input nella barra di ricerca
            $('#search').on('keyup', function() {
                var query = $(this).val();  // Ottieni il valore della ricerca

                // Cancella il timeout precedente
                clearTimeout(timeout);

                // Imposta un nuovo timeout di 300 ms
                timeout = setTimeout(function() {
                    console.log("Query inviata:", query);  // Log della query per il debug
                    fetch_customer_data(query);  // Esegui la ricerca dopo il timeout
                }, 300);  // Attesa di 300 ms prima di eseguire la richiesta
            });
        });
    </script>


    </x-app-layout>
