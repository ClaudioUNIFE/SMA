<x-app-layout>
    <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
        <table class="center-table">
            <tr>
                <th colspan="5">Dettagli Allegato</th>
            </tr>
            <tr>
                <th>Link</th>
                <th>Tipo Allegato</th>
                <th>Modifica</th>
                <th>Vista Dettagliata</th>
                <th>Elimina</th>
            </tr>


            <tr>
                <td>
                    <a href="{{ $attachments->link }}" class="text-blue-500 hover:underline">{{ $attachments->link }}</a>
                </td>
                <td>{{ $attachments->tipo_acquisizione }}</td>
                <td>
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded">
                        ✏️
                    </button>
                </td>
                <td>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded">
                    👁️
                    </button>
                </td>
                <td>
                    <form action="{{ route('attached.destroy',$attachments->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded">
                            🗑️
                        </button>
                    </form>
                </td>
            </tr>


        </table>
    </div>
</x-app-layout>
