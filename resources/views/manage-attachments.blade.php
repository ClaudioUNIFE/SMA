<x-app-layout>
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 class="font-semibold" style="font-size: 2.5rem; color: white;">Dettagli Allegato</h2>

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
                        <th style="color: white; padding: 10px; text-align: left;">Link</th>
                        <th style="color: white; padding: 10px; text-align: left;">Tipo Allegato</th>
                        <th style="color: white; padding: 10px; text-align: left;"></th>
                        <th style="color: white; padding: 10px; text-align: left;"></th>
                        <th style="color: white; padding: 10px; text-align: left;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attachments as $attachment)
                        <tr style="background-color: rgb(48, 54, 78);">
                            <td style="color: white; padding: 10px;">
                                <a href="{{ $attachment->link }}" class="text-blue-500 hover:underline">{{ Str::limit($attachment->link, 30, '...') }}</a>
                            </td>
                            <td class="tipo-column" style="color: white; padding: 10px;">{{ $attachment->tipo_acquisizione }}</td>
                            <td style="padding: 10px;">
                                <form action="{{ route('attached.edit', $attachment->id) }}" method="GET" style="display:inline;">
                                    <button class="btn-primary">Modifica</button>
                                </form>
                            </td>
                            <td style="padding: 10px;">
                                <a href="{{ route('attached.show', $attachment->id) }}" class="btn-primary">Vista Dettagliata</a>
                            </td>
                            <td style="padding: 10px;">
                                <form id="delete-form-{{ $attachment->id }}" action="{{ route('attached.destroy', $attachment->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $attachment->id }})" class="btn-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="margin: 20px">
                <div style="text-align: center; margin-bottom: 20px;">
                    <a href="{{ route('attached.create', $id) }}" style="color: white; background-color: #619ee4; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Aggiungi Allegato</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Sei sicuro di voler eliminare questo allegato?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

</x-app-layout>
