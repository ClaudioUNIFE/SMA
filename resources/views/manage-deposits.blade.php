<x-app-layout>

    <!-- Deposits Index Page -->
    <div style="text-align: center; margin-bottom: 20px;">
        <p class="font-semibold" style="font-size: 2.5rem; color:white">Elenco Depositi</p>

        @if ($message = Session::get('success'))
            <div style="color: white; background-color: #28a745; padding: 10px; margin-top: 10px;">
                {{ $message }}
            </div>
        @endif
    </div>

    <div style="margin-left:5%; margin-right:5%">
        <div class="table-responsive">
        <table style= "width: 100%; border-collapse: collapse;">
            <thead style="background-color: grey;">
                <tr>
                    <th style="color: white; padding: 10px; text-align: left;">Collocazione</th>
                    <th style="color: white; padding: 10px; text-align: left;">Deposito</th>
                    <th style="color: white; padding: 10px; text-align: left;">Codice Stanza</th>
                    <th style="color: white; padding: 10px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deposits as $deposit)
                    <tr style="background-color: #444;">
                        <td style="color: white; padding: 10px;">{{ $deposit->collocazione }}</td>
                        <td style="color: white; padding: 10px;">{{ $deposit->deposito }}</td>
                        <td style="color: white; padding: 10px;">{{ $deposit->codice_stanza }}</td>
                        <td style="padding: 10px;">
                            <a href="{{ route('deposits.show', $deposit->id) }}" style="color: white; margin-right: 10px; text-decoration: none; background-color: #007bff; padding: 5px 10px; border-radius: 3px;">Mostra</a>
                            <a href="{{ route('deposits.edit', $deposit->id) }}" style="color: white; margin-right: 10px; text-decoration: none; background-color:rgb(73,159,164); padding: 5px 10px; border-radius: 3px;">Modifica</a>
                            <form id="delete-form-{{ $deposit->id }}" action="{{ route('deposits.destroy', $deposit->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $deposit->id }})" style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer;">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('deposits.create') }}" style="color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Adggiungi un Deposito</a>
        </div>
    </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Sei sicuro di voler eliminare questo deposito?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

<style>
    body {
        background-color: #343a40; /* Colore di sfondo scuro */
        color: #ffffff; /* Testo bianco per contrasto */
    }

    .table-responsive {
        margin-top: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-primary:hover, .btn-danger:hover {
        opacity: 0.8;
    }

    h2 {
        margin-bottom: 20px;
    }

    table {
        border-radius: 10px;
        overflow: hidden;
    }

    th, td {
        vertical-align: middle;
    }

    .table thead th {
        border-bottom: 2px solid #dee2e6;
    }
</style>

</x-app-layout>
