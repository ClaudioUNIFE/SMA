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
            color: #000000;
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
            <div>
                <label for="id_museo">ID Museo:</label>
                <input type="number" id="id_museo" name="id_museo" required>
            </div>
            <div>
                <label for="id_deposito">ID Deposito:</label>
                <input type="number" id="id_deposito" name="id_deposito" required>
            </div>
            <div>
                <label for="autore">Autore:</label>
                <input type="text" id="autore" name="autore" required>
            </div>
            <div>
                <label for="titolo">Titolo:</label>
                <input type="text" id="titolo" name="titolo" required>
            </div>
            <div>
                <label for="anno_accademico">Anno Accademico:</label>
                <input type="text" id="anno_accademico" name="anno_accademico" required>
            </div>
            <div>
                <label for="disciplina">Disciplina:</label>
                <input type="text" id="disciplina" name="disciplina" required>
            </div>
            <div>
                <label for="relatore">Relatore:</label>
                <input type="text" id="relatore" name="relatore" required>
            </div>
            <div>
                <label for="correlatore">Correlatore:</label>
                <input type="text" id="correlatore" name="correlatore">
            </div>
            <div>
                <label for="contro_relatore">Contro Relatore:</label>
                <input type="text" id="contro_relatore" name="contro_relatore">
            </div>
            <div>
                <label for="percorso_file">Percorso File:</label>
                <input type="file" id="percorso_file" name="percorso_file" required>
            </div>
            <div>
                <label for="note">Note:</label>
                <textarea id="note" name="note"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>

    </div>
</x-app-layout>
