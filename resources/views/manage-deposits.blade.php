<x-app-layout>
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
            <thead style="background-color: rgb(72, 80, 100);">
                <tr>
                    <th style="color: white; padding: 10px; text-align: left;">Codice Stanza</th>                    
                    <th style="color: white; padding: 10px; text-align: left;">Deposito</th>
                    <th style="color: white; padding: 10px; text-align: left;">Collocazione</th>
                    <th style="color: white; padding: 10px; text-align: left;"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deposits as $deposit)
                    <tr style="background-color: rgb(48, 54, 78);">
                        <td style="color: white; padding: 10px;">{{ $deposit->codice_stanza }}</td>
                        <td style="color: white; padding: 10px;">{{ $deposit->deposito }}</td>
                        <td style="color: white; padding: 10px;">{{ $deposit->collocazione }}</td>
                        <td style="padding: 10px;">
                            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                <a href="{{ route('deposits.show', $deposit->id) }}" class="btn-primary">Mostra</a>
                                <a href="{{ route('deposits.edit', $deposit->id) }}" class="btn-primary">Modifica</a>
                                <form id="delete-form-{{ $deposit->id }}" action="{{ route('deposits.destroy', $deposit->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $deposit->id }})" class="btn-danger">Elimina</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('deposits.create') }}" style="color: white; background-color: #619ee4; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Aggiungi un Deposito</a>
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

</x-app-layout>
