<x-app-layout>
    <div style="margin: 5%">
        <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
            <p class="font-semibold" style="font-size: 1.5rem;">Total Searched Theses: <span id="total_records"></span></p>
        </div>

        <input style="width: 100%" type="text" name="search" id="search" class="form-control" placeholder="Search Theses..." />

        <div id="results" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach ($theses as $thesis)
                <x-thesiscard :thesis="$thesis" />
            @endforeach
        </div>
    </div>
    <head>
        <!-- <link rel="stylesheet" href="{{ asset('css/standard.css') }}"> -->
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            let timeout = null;

            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('theses.action') }}", // Assicurati che questa rotta esista
                    method: 'GET',
                    data: { query: query },
                    dataType: 'json',
                    beforeSend: function() {
                        // Mostra un indicatore di caricamento (opzionale)
                        $('#results').html('<div class="text-center col-span-3"><p>Caricamento...</p></div>');
                    },
                    success: function(response) {
                        // Log per debugging
                        console.log("Risposta ricevuta:", response);
                        
                        if(response.error) {
                            $('#results').html('<div class="text-center col-span-3 text-red-500">' + response.error + '</div>');
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
                        $('#results').html('<div class="text-center col-span-3 text-red-500">Errore durante la ricerca</div>');
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
    <script>
        $(document).ready(function() {
            function fetch_thesis_data(query = '') {
                $.ajax({
                    url: "{{ route('theses.action') }}",
                    method: 'GET',
                    data: { query: query },
                    dataType: 'json',
                    success: function(data) {
                        $('#results').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                });thesi
            }

            $('#search').on('keyup', function() {
                var query = $(this).val();
                fetch_thesis_data(query);
            });
        });
    </script>
</x-app-layout>
