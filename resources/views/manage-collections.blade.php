<x-app-layout>
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 class="font-semibold" style="font-size: 2.5rem; color: white;">Elenco Collezioni</h2>

        @if ($message = Session::get('success'))
            <div style="color: white; background-color: #28a745; padding: 10px; margin-top: 10px;">
                {{ $message }}
            </div>
        @endif
    </div>

    <style>
        @media (max-width: 768px) {
            .description-column {
                display: none;
            }
        }
    </style>

    <div style="margin-left:5%; margin-right:5%">
        <div class="table-responsive">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="background-color: rgb(72, 80, 100);">
                    <tr>
                        <th style="color: white; padding: 10px; text-align: left;">Nome Collezione</th>
                        <th style="color: white; padding: 10px; text-align: left;">Data Acquisizione</th>
                        <th style="color: white; padding: 10px; text-align: left;" class="description-column">Descrizione</th>
                        <th style="color: white; padding: 10px; text-align: left;"> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collections as $collection)
                        <tr style="background-color: rgb(48, 54, 78);">
                            <td style="color: white; padding: 10px;">{{ $collection->nome_collezione }}</td>
                            <td style="color: white; padding: 10px;">{{ $collection->data_acquisizione_collezione }}</td>
                            <td class="description-column" style="color: white; padding: 10px;">{{ $collection->descrizione }}</td>
                            <td style="padding: 10px;">
                                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                    <a href="{{ route('collection.edit', $collection->id) }}" class="btn-primary">Modifica</a>
                                    <form id="delete-form-{{ $collection->id }}" action="{{ route('collection.destroy', $collection->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete({{ $collection->id }})" class="btn-danger">Elimina</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="margin: 20px">
                <div style="text-align: center; margin-bottom: 20px;">
                    <a href="{{ route('collection.create') }}" style="color: white; background-color: #619ee4; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Aggiungi Collezione</a>
               </div>
            </div>
        </div>

    </div>


    <script>
        function confirmDelete(id) {
            if (confirm("Sei sicuro di voler eliminare questa collezione?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

</x-app-layout>
