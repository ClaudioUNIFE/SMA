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
                    <th><label for="titolo">Titolo</label></th>
                    <td><input type="text" name="titolo" id="titolo" class="form-control" placeholder="Titolo della Tesi" required /></td>
                </tr>
                <tr>
                    <th><label for="autore">Autore</label></th>
                    <td><input type="text" name="autore" id="autore" class="form-control" placeholder="Autore" required /></td>
                </tr>
                <tr>
                    <th><label for="anno_accademico">Anno Accademico</label></th>
                    <td><input type="text" name="anno_accademico" id="anno_accademico" class="form-control" placeholder="Anno Accademico" required /></td>
                </tr>
                <tr>
                    <th><label for="disciplina">Disciplina</label></th>
                    <td><input type="text" name="disciplina" id="disciplina" class="form-control" placeholder="Disciplina" required /></td>
                </tr>
                <tr>
                    <th><label for="relatore">Relatore</label></th>
                    <td><input type="text" name="relatore" id="relatore" class="form-control" placeholder="Relatore" required /></td>
                </tr>
                <tr>
                    <th><label for="percorso_file">Percorso File</label></th>
                    <td><input type="file" name="percorso_file" id="percorso_file" class="form-control" required /></td>
                </tr>
                <tr>
                    <th><label for="abstract">Abstract</label></th>
                    <td><textarea name="abstract" id="abstract" class="form-control" placeholder="Abstract"></textarea></td>
                </tr>
                <tr>
                    <th><label for="bibliografia">Bibliografia</label></th>
                    <td><textarea name="bibliografia" id="bibliografia" class="form-control" placeholder="Bibliografia"></textarea></td>
                </tr>
                <tr>
                    <th><label for="tags">Tag</label></th>
                    <td><input type="text" name="tags" id="tags" class="form-control" placeholder="Tag" /></td>
                </tr>
            </table>
            <div style="text-align: center; margin-top: 20px;">
                <button type="submit">INSERISCI</button>
            </div>
        </form>
    </div>
</x-app-layout>
