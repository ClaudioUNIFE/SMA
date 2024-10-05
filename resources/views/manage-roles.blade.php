<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestisci Ruoli') }}
        </h2>
    </x-slot>

    <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
        <p class="font-semibold" style="font-size: 2.5rem;">UTENTI APP</p>
    </div>

    <article>
        <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
            <p class="font-semibold" style="font-size: 1.5rem;">Totale Utenti: <span id="total_records"></span></p>
        </div>

        <input style="width: 100%" type="text" name="search" id="search" class="form-control" placeholder="Cerca utenti..." />

        <table class="table">
            <thead>
                <tr>
                    <th style="width: 20%;">Nome</th>
                    <th style="width: 20%;">Cognome</th>
                    <th style="width: 20%;">Email</th>
                    <th style="width: 20%;">Ruolo Attuale</th> <!-- Colonna per il ruolo attuale -->
                    <th style="width: 20%; text-align:center">Nuovo Ruolo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->cognome}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->first() ? $user->roles->first()->name : 'Nessun ruolo assegnato' }}</td>
                    <td style="text-align: center">
                        <form method="POST" action="{{ route('role.updateUserRole') }}">
                            @csrf
                            <select style="color:black; width:95%" id="role_{{ $user->id }}" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                <option value="" disabled selected>Seleziona Ruolo</option>
                                @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-primary">{{ __('Cambia Ruolo!') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Funzione per caricare i dati iniziali
            fetch_customer_data();

            // Funzione che invia la richiesta AJAX al server
            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('role.action') }}",  // Route definita nel controller
                    method: 'GET',
                    data: { query: query },  // Invia la query inserita
                    dataType: 'json',
                    success: function(data) {
                        // Popola la tabella con i risultati
                        $('tbody').html(data.table_data);
                        // Aggiorna il conteggio totale
                        $('#total_records').text(data.total_data);
                    },
                    error: function(xhr, status, error) {
                        console.error("Errore durante la richiesta AJAX: ", error);
                    }
                });
            }

            // Rileva l'input nella barra di ricerca e invia la query
            $(document).on('keyup', '#search', function() {
                var query = $(this).val();
                fetch_customer_data(query);  // Invia la query attuale
            });
        });
    </script>

</x-app-layout>
