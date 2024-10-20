<!-- resources/views/collezioni/edit.blade.php -->
<x-app-layout>
    <head>
        <title>Modifica Collezione</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/standard.css') }}">
    </head>
    <body>
        <div class="form-container">
            <h2 style="color: white; margin-bottom: 20px; text-align: center;">Modifica Collezione</h2>

            @if($errors->any())
                <div style="color: white; background-color: #e74c3c; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                    <ul style="list-style-type: none; padding: 0;">
                        @foreach($errors->all() as $error)
                            <li style="margin-bottom: 5px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('collection.update', $collection->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 15px; align-items: center;">
                @csrf


                <div class="form-group" style="width: 100%;">
                    <label for="nome_collezione" style="color: white;">Nome Collezione</label>
                    <input type="text" name="nome_collezione" class="form-control" value="{{ $collection->nome_collezione }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>

                <div class="form-group" style="width: 100%;">
                    <label for="data_acquisizione_collezione" style="color: white;">Data di Acquisizione</label>
                    <input type="date" name="data_acquisizione_collezione" class="form-control" value="{{ $collection->data_acquisizione_collezione }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>

                <div class="form-group" style="width: 100%;">
                    <label for="descrizione" style="color: white;">Descrizione</label>
                    <textarea name="descrizione" class="form-control" rows="3" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">{{ $collection->descrizione }}</textarea>
                </div>



                <button type="submit" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; transition: background-color 0.3s ease; margin-top: 20px;">
                    Aggiorna
                </button>
            </form>
        </div>
    </body>
</x-app-layout>
