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
        <form action="{{ route('attached.store', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <table class="center-table">
                <tr>
                    <th colspan="2">Dettagli Allegato</th>
                </tr>
                <tr>
                    <th><label for="link">Link</label></th>
                    <td><input type="text" name="link" id="link" class="form-control" placeholder="Inserisci il link" value="{{ old('link', $metadata->link ?? '') }}" required/></td>
                </tr>
                <tr>
                    <th><label for="tipo_acquisizione">Tipo Acquisizione</label></th>
                    <td><input type="text" name="tipo_acquisizione" id="tipo_acquisizione" class="form-control" placeholder="Tipo Acquisizione" value="{{ old('tipo_acquisizione', $metadata->tipo_acquisizione ?? '') }}" required/></td>
                </tr>
            </table>

            <br><br><br>

            <table class="center-table">
                <tr>
                    <th colspan="2">Inserisci Metadati</th>
                </tr>
                <tr>
                    <td><label for="titolo">Titolo</label></td>
                    <td><input type="text" name="titolo" id="titolo" class="form-control" placeholder="Titolo" required></td>
                </tr>
                <tr>
                    <td><label for="autore">Autore</label></td>
                    <td><input type="text" name="autore" id="autore" class="form-control" placeholder="Autore"></td>
                </tr>
                <tr>
                    <td><label for="soggetto">Soggetto</label></td>
                    <td><input type="text" name="soggetto" id="soggetto" class="form-control" placeholder="Soggetto"></td>
                </tr>
                <tr>
                    <td><label for="descrizione">Descrizione</label></td>
                    <td><textarea name="descrizione" id="descrizione" class="form-control" placeholder="Descrizione"></textarea></td>
                </tr>
                <tr>
                    <td><label for="editore">Editore</label></td>
                    <td><input type="text" name="editore" id="editore" class="form-control" placeholder="Editore"></td>
                </tr>
                <tr>
                    <td><label for="autore_di_contributo">Autore di Contributo</label></td>
                    <td><input type="text" name="autore_di_contributo" id="autore_di_contributo" class="form-control" placeholder="Autore di Contributo"></td>
                </tr>
                <tr>
                    <td><label for="data">Data</label></td>
                    <td><input type="date" name="data" id="data" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="tipo">Tipo</label></td>
                    <td><input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo"></td>
                </tr>
                <tr>
                    <td><label for="formato">Formato</label></td>
                    <td><input type="text" name="formato" id="formato" class="form-control" placeholder="Formato"></td>
                </tr>
                <tr>
                    <td><label for="identificatore">Identificatore</label></td>
                    <td><input type="text" name="identificatore" id="identificatore" class="form-control" placeholder="Identificatore"></td>
                </tr>
                <tr>
                    <td><label for="fonte">Fonte</label></td>
                    <td><input type="text" name="fonte" id="fonte" class="form-control" placeholder="Fonte"></td>
                </tr>
                <tr>
                    <td><label for="lingua">Lingua</label></td>
                    <td><input type="text" name="lingua" id="lingua" class="form-control" placeholder="Lingua"></td>
                </tr>
                <tr>
                    <td><label for="relazione">Relazione</label></td>
                    <td><input type="text" name="relazione" id="relazione" class="form-control" placeholder="Relazione"></td>
                </tr>
                <tr>
                    <td><label for="copertura">Copertura</label></td>
                    <td><input type="text" name="copertura" id="copertura" class="form-control" placeholder="Copertura"></td>
                </tr>
                <tr>
                    <td><label for="gestione_dei_diritti">Gestione dei Diritti</label></td>
                    <td><input type="text" name="gestione_dei_diritti" id="gestione_dei_diritti" class="form-control" placeholder="Gestione dei Diritti"></td>
                </tr>
            </table>

            <br><br><br>

            <table class="center-table">
                <tr>
                    <th colspan="2">Inserisci Paradati</th>
                </tr>
                <tr>
                    <td><label for="stato_corrente">Stato Corrente</label></td>
                    <td><input type="text" name="stato_corrente" id="stato_corrente" class="form-control" placeholder="Stato Corrente"></td>
                </tr>
                <tr>
                    <td><label for="responsabile_scelta_reperto">Responsabile Scelta Reperto</label></td>
                    <td><input type="text" name="responsabile_scelta_reperto" id="responsabile_scelta_reperto" class="form-control" placeholder="Responsabile Scelta Reperto"></td>
                </tr>
                <tr>
                    <td><label for="scheda_validata">Scheda Validata</label></td>
                    <td>
                        <input type="hidden" name="scheda_validata" value="0">
                        <input type="checkbox" name="scheda_validata" id="scheda_validata" value="1">
                    </td>
                </tr>
                <tr>
                    <td><label for="validatore_scheda">Validatore Scheda</label></td>
                    <td><input type="text" name="validatore_scheda" id="validatore_scheda" class="form-control" placeholder="Validatore Scheda"></td>
                </tr>
                <tr>
                    <td><label for="note">Note</label></td>
                    <td><textarea name="note" id="note" class="form-control" placeholder="Note"></textarea></td>
                </tr>
                <tr>
                    <td><label for="file_path">Seleziona il file</label></td>
                    <td><input type="file" name="file_path" id="file_path" class="form-control"></td>
                </tr>
            </table>

            <br>

            <div class="footer">
                <button type="submit">Salva</button>
            </div>
        </form>
    </div>
</x-app-layout>
