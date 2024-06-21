<!-- resources/views/collezioni/edit.blade.php -->
<x-app-layout>
    <head>
        <title>Modifica Collezione</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-white">Modifica Collezione</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('collection.update', $collection->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="data_acquisizione_collezione" class="text-white">Data di Acquisizione</label>
                    <input type="date" name="data_acquisizione_collezione" class="form-control" value="{{ $collection->data_acquisizione_collezione }}" required>
                </div>

                <div class="form-group">
                    <label for="descrizione" class="text-white">Descrizione</label>
                    <textarea name="descrizione" class="form-control" rows="3" required>{{ $collection->descrizione }}</textarea>
                </div>

                <div class="form-group">
                    <label for="nome_collezione" class="text-white">Nome Collezione</label>
                    <input type="text" name="nome_collezione" class="form-control" value="{{ $collection->nome_collezione }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </form>
        </div>
    </body>
    <style>
        body {
            background-color: #343a40; /* Colore di sfondo scuro */
            color: #ffffff; /* Testo bianco per contrasto */
        }

        .container {
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            opacity: 0.8;
        }

        .form-group label {
            color: #ffffff;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
    </x-app-layout>
