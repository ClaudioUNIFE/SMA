<x-app-layout>
    <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
        <table class="center-table" style="width: 100%;">
            <tr>
                <th colspan="5" style="text-align: center;">Dettagli Allegato</th>
            </tr>
            <tr>
                <th style="width: 30%;">Link</th>
                <th style="width: 20%;">Tipo Allegato</th>
                <th style="width: 15%;">Modifica</th>
                <th style="width: 15%;">Vista Dettagliata</th>
                <th style="width: 20%;">Elimina</th>
            </tr>
            @foreach ($attachments as $attachment)
                <tr>
                    <td>
                        <a href="{{ $attachment->link }}"
                           class="text-blue-500 hover:underline">{{ Str::limit($attachment->link, 30, '...') }}</a>
                    </td>
                    <td>{{ $attachment->tipo_acquisizione }}</td>
                    <td>
                        <form action="{{ route('attached.edit', $attachment->id) }}" method="GET">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded">
                            ✏️
                        </button>
                        </form>
                    </td>
                    <td>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded">
                            👁️
                        </button>
                    </td>
                    <td>
                        <form action="{{ route('attached.destroy', $attachment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded">
                                🗑️
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
        <form action="{{ route('attached.create',$id) }}" method="GET">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded">
            ➕
            </button>
        </form>

        </div>
</x-app-layout>
