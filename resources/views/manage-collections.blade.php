<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white">Elenco Collezioni</h2>
                <a href="{{ route('collection.create') }}" class="btn btn-primary mb-3">Aggiungi Collezione</a>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Data Acquisizione</th>
                                <th>Descrizione</th>
                                <th>Nome Collezione</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collections as $collection)
                                <tr>
                                    <td>{{ $collection->id }}</td>
                                    <td>{{ $collection->data_acquisizione_collezione }}</td>
                                    <td>{{ $collection->descrizione }}</td>
                                    <td>{{ $collection->nome_collezione }}</td>
                                    <td>
                                        <a href="{{ route('collection.edit', $collection->id) }}" class="btn btn-sm btn-primary">Modifica</a>
                                        <form action="{{ route('collection.destroy', $collection->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa collezione?')">Elimina</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Aggiungi del CSS per migliorare ulteriormente l'estetica -->
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
