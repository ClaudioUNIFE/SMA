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
        <form action="{{ route('theses.update', $thesis->id) }}" method="POST" enctype="multipart/form-data">

            <table class="center-table">
                <tr>
                    <th><label for="titolo">Titolo</label></th>
                    <td><input type="text" name="titolo" id="titolo" class="form-control" placeholder="Titolo della tesi" value="{{ $thesis->titolo }}" /></td>
                </tr>
                <tr>
                    <th><label for="autore">Autore</label></th>
                    <td><input type="text" name="autore" id="autore" class="form-control" placeholder="Autore" value="{{ $thesis->autore }}" /></td>
                </tr>
                <tr>
                    <th><label for="relatore">Relatore</label></th>
                    <td><input type="text" name="relatore" id="relatore" class="form-control" placeholder="Relatore" value="{{ $thesis->relatore }}" /></td>
                </tr>
                <tr>
                    <th><label for="abstract">Abstract</label></th>
                    <td><textarea name="abstract" id="abstract" class="form-control" placeholder="Abstract della tesi">{{ $thesis->abstract }}</textarea></td>
                </tr>
                <tr>
                    <th><label for="anno">Anno</label></th>
                    <td><input type="number" name="anno" id="anno" class="form-control" placeholder="Anno" value="{{ $thesis->anno }}" /></td>
                </tr>
                <tr>
                    <th><label for="facolta">Facoltà</label></th>
                    <td><input type="text" name="facolta" id="facolta" class="form-control" placeholder="Facoltà" value="{{ $thesis->facolta }}" /></td>
                </tr>
                <tr>
                    <th><label for="documento">Percorso</label></th>
                    <td><input type="text" name="percorso" id="percorso_file" class="form-control" /></td>
                </tr>
            </table>

            <div style="text-align: center; margin-top: 20px;">
                <button type="submit">AGGIORNA</button>
            </div>
        </form>
    </div>

</x-app-layout>
