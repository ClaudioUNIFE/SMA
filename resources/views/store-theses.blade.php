<x-app-layout>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            margin: 5% auto;
            max-width: 800px;
            background-color: #2c3e50;
            padding: 2%;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #ecf0f1;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            background-color: #ecf0f1;
            color: #2c3e50;
        }
        .form-control::placeholder {
            color: #7f8c8d;
        }
        .center-table {
            margin: 0 auto;
            width: 100%;
            border: none;
            border-collapse: separate;
        }
        .center-table th,
        .center-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #7f8c8d;
        }
        .center-table th {
            background-color: #34495e;
            color: #fff;
        }
        .center-table tr:nth-child(even) {
            background-color: #34495e;
        }
        .center-table tr:hover {
            background-color: #3a5168;
        }
        button[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="file"] {
            background-color: #ecf0f1;
            padding: 5px;
        }
        textarea.form-control {
            height: 100px;
            resize: vertical;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #2c3e50;
            color: #ecf0f1;
        }
    </style>

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
                    <td><input type="file" name="percorso_file" id="percorso_file" class="form-control" required></td>
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

