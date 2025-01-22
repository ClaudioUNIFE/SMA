<x-app-layout>
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 class="font-semibold" style="font-size: 2.5rem; color: white;">Gestisci Uscite Reperto</h2>

        @if ($message = Session::get('success'))
            <div style="color: white; background-color: #28a745; padding: 10px; margin-top: 10px;">
                {{ $message }}
            </div>
        @endif
    </div>

    <style>
        @media (max-width: 768px) {
            .tipo-column {
                display: none;
            }
        }
    </style>

    <div style="margin-left:5%; margin-right:5%">
        <div class="table-responsive">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="background-color: rgb(72, 80, 100);">
                    <tr>
                        <th style="color: white; padding: 10px; text-align: left;">Motivazione</th>
                        <th style="color: white; padding: 10px; text-align: left;">Sede Temporanea</th>
                        <th style="color: white; padding: 10px; text-align: left;">Data Uscita</th>
                        <th style="color: white; padding: 10px; text-align: left;">Data Entrata</th>
                        <th style="color: white; padding: 10px; text-align: left;">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($xits as $xit)
                        <tr style="background-color: rgb(48, 54, 78);">
                            <td style="color: white; padding: 10px;">{{ $xit->motivazione }}</td>
                            <td style="color: white; padding: 10px;">{{ $xit->sede_temporanea }}</td>
                            <td style="color: white; padding: 10px;">{{ $xit->data_uscita }}</td>
                            <td style="color: white; padding: 10px;">{{ $xit->data_entrata }}</td>
                            <td style="padding: 10px;">
                                <a href="{{ route('managexits.show', $xit->id) }}" class="btn-primary">Vista Dettagliata</a>
                                {{-- <form id="delete-form-{{ $xit->id }}" action="{{ route('managexits.destroy', $xit->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $xit->id }})" class="btn-danger">Elimina</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <div style="margin: 20px">
                <div style="text-align: center; margin-bottom: 20px;">
                    <a href="{{ route('managexits.create', $id) }}" style="color: white; background-color: #619ee4; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Aggiungi Uscita</a>
                </div> --}}
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Sei sicuro di voler eliminare questa uscita?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

</x-app-layout>
