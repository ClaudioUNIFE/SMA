<!-- resources/views/collezioni/create.blade.php -->

<x-app-layout>
<head>
    <title>Crea Collezione</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crea una Nuova Collezione</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('collection.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="data_acquisizione_collezione">Data di Acquisizione</label>
                <input type="date" name="data_acquisizione_collezione" class="form-control" value="{{ old('data_acquisizione_collezione') }}" required>
            </div>

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea name="descrizione" class="form-control" rows="3" required>{{ old('descrizione') }}</textarea>
            </div>

            <div class="form-group">
                <label for="nome_collezione">Nome Collezione</label>
                <input type="text" name="nome_collezione" class="form-control" value="{{ old('nome_collezione') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
</body>
</x-app-layout>
