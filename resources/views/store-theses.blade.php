<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/standard.css') }}">
    </head>
    <div class="form-container">
        <form action="{{ route('theses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <table class="center-table">
                <tr>
                    <th><label for="id_museo">Museo:</label></th>
                    <td>
                        <select name="id_museo" id="id_museo" class="form-control" required>
                            @foreach ($museums as $museum)
                                <option value="{{ $museum->id }}">{{ $museum->nome_museo }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="id_deposito">Deposito:</label></th>
                    <td>
                        <select name="id_deposito" id="id_deposito" class="form-control">
                            @foreach ($deposits as $deposit)
                                <option value="{{ $deposit->id }}">{{ $deposit->collocazione }}, {{ $deposit->deposito }}, stanza numero: {{ $deposit->codice_stanza }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="autore">Autore:</label></th>
                    <td><input type="text" name="autore" id="autore" class="form-control" required></td>
                </tr>
                <tr>
                    <th><label for="titolo">Titolo:</label></th>
                    <td><input type="text" name="titolo" id="titolo" class="form-control" required></td>
                </tr>
                <tr>
                    <th><label for="anno_accademico">Anno Accademico:</label></th>
                    <td><input type="text" name="anno_accademico" id="anno_accademico" class="form-control" required></td>
                </tr>
                <tr>
                    <th><label for="disciplina">Disciplina:</label></th>
                    <td><input type="text" name="disciplina" id="disciplina" class="form-control" required></td>
                </tr>
                <tr>
                    <th><label for="relatore">Relatore:</label></th>
                    <td><input type="text" name="relatore" id="relatore" class="form-control" required></td>
                </tr>
                <tr>
                    <th><label for="correlatore">Correlatore:</label></th>
                    <td><input type="text" name="correlatore" id="correlatore" class="form-control"></td>
                </tr>
                <tr>
                    <th><label for="contro_relatore">Contro Relatore:</label></th>
                    <td><input type="text" name="contro_relatore" id="contro_relatore" class="form-control"></td>
                </tr>
                <tr>
                    <th><label for="percorso_file">File Tesi:</label></th>
                    <td><input type="text" name="percorso_file" id="percorso_file" class="form-control" required></td>
                </tr>
                <tr>
                    <th><label for="note">Note:</label></th>
                    <td><textarea name="note" id="note" class="form-control"></textarea></td>
                </tr>
            </table>
            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        // Mostra il popup di successo
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Successo',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        @endif

        // Mostra il popup di errore
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Errore',
                html: '{!! implode('<br>', $errors->all()) !!}',
            });
        @endif
    </script>
</x-app-layout>

