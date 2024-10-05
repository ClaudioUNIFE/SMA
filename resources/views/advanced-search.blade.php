<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ricerca Avanzata') }}
        </h2>
    </x-slot>

    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            margin: 5% auto;
            max-width: 60%;
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
        <h2 class="text-center mb-4">Ricerca Avanzata</h2>
        <form action="{{ route('finds.advancedSearch') }}" method="GET">
            <table class="center-table" style=" margin: auto;">
                <tbody>
                    <!-- Campi del modello Find -->
                    <tr>
                        <td><label for="descrizione">Descrizione Reperto</label></td>
                        <td><input type="text" class="form-control" name="descrizione" id="descrizione"></td>
                    </tr>
                    <tr>
                        <td><label for="categoria">Categoria</label></td>
                        <td><input type="text" class="form-control" name="categoria" id="categoria"></td>
                    </tr>
                    <tr>
                        <td><label for="note">Note</label></td>
                        <td><input type="text" class="form-control" name="note" id="note"></td>
                    </tr>
                    <tr>
                        <td><label for="esposto">Esposto</label></td>
                        <td>
                            <select name="esposto" id="esposto" class="form-control">
                                <option value="">Seleziona</option>
                                <option value="1">Sì</option>
                                <option value="0">No</option>
                            </select>
                        </td>
                    </tr>

                    <!-- Campi del modello BiologicalEntity -->
                    <tr>
                        <td><label for="riferimento_tassonomico">Riferimento Tassonomico</label></td>
                        <td><input type="text" class="form-control" name="riferimento_tassonomico" id="riferimento_tassonomico"></td>
                    </tr>
                    <tr>
                        <td><label for="nome_comune">Nome Comune</label></td>
                        <td><input type="text" class="form-control" name="nome_comune" id="nome_comune"></td>
                    </tr>
                    <tr>
                        <td><label for="taxon_group">Taxon Group</label></td>
                        <td><input type="text" class="form-control" name="taxon_group" id="taxon_group"></td>
                    </tr>
                    <tr>
                        <td><label for="olotipo">Olotipo</label></td>
                        <td>
                            <select name="olotipo" id="olotipo" class="form-control">
                                <option value="">Seleziona</option>
                                <option value="1">Sì</option>
                                <option value="0">No</option>
                            </select>
                        </td>
                    </tr>

                    <!-- Campi del modello Deposit -->
                    <tr>
                        <td><label for="collocazione">Collocazione</label></td>
                        <td><input type="text" class="form-control" name="collocazione" id="collocazione"></td>
                    </tr>
                    <tr>
                        <td><label for="codice_stanza">Codice Stanza</label></td>
                        <td><input type="text" class="form-control" name="codice_stanza" id="codice_stanza"></td>
                    </tr>
                    <tr>
                        <td><label for="deposito">Deposito</label></td>
                        <td><input type="text" class="form-control" name="deposito" id="deposito"></td>
                    </tr>

                    <!-- Campi del modello Collection -->
                    <tr>
                        <td><label for="nome_collezione">Nome Collezione</label></td>
                        <td><input type="text" class="form-control" name="nome_collezione" id="nome_collezione"></td>
                    </tr>
                    <tr>
                        <td><label for="descrizione_collezione">Descrizione Collezione</label></td>
                        <td><input type="text" class="form-control" name="descrizione_collezione" id="descrizione_collezione"></td>
                    </tr>

                    <!-- Campi del modello Acquisition -->
                    <tr>
                        <td><label for="modalita_acquisizione">Modalità di Acquisizione</label></td>
                        <td><input type="text" class="form-control" name="modalita_acquisizione" id="modalita_acquisizione"></td>
                    </tr>
                    <tr>
                        <td><label for="data_acquisizione">Data Acquisizione</label></td>
                        <td><input type="date" class="form-control" name="data_acquisizione" id="data_acquisizione"></td>
                    </tr>
                    <tr>
                        <td><label for="fornitore">Fornitore</label></td>
                        <td><input type="text" class="form-control" name="fornitore" id="fornitore"></td>
                    </tr>
                    <tr>
                        <td><label for="provenienza">Provenienza</label></td>
                        <td><input type="text" class="form-control" name="provenienza" id="provenienza"></td>
                    </tr>
                    <tr>
                        <td><label for="proprieta">Proprietà</label></td>
                        <td><input type="text" class="form-control" name="proprieta" id="proprieta"></td>
                    </tr>

                    <!-- Campi del modello Composition -->
                    <tr>
                        <td><label for="materiale">Materiale</label></td>
                        <td><input type="text" class="form-control" name="materiale" id="materiale"></td>
                    </tr>
                    <tr>
                        <td><label for="molteplicita">Molteplicita</label></td>
                        <td><input type="number" class="form-control" name="molteplicita" id="molteplicita"></td>
                    </tr>

                    <!-- Pulsante di invio -->
                    <tr>
                        <td colspan="2"  style="text-align: center"  class="text-center">
                            <button type="submit" >Cerca</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Sezione per visualizzare i risultati della ricerca -->
    @if(isset($finds) && count($finds) > 0)
    <div class="form-container">
        <h3 class="text-center mt-5">Risultati della Ricerca</h3>
        <form action="{{ route('finds.export') }}" method="POST" class="form-inline">
            @csrf
            <!-- Assicurati che gli ID siano correttamente inclusi nel form -->
            @foreach($ids as $id)
                <input type="hidden" name="ids[]" value="{{ $id }}">
            @endforeach
            <div>
                <button type="submit" class="btn btn-primary">Esporta Excel</button>
            </div>
        </form>
        <table class="center-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrizione</th>
                    <th>Categoria</th>
                    <th>Nome Comune</th>
                    <th>Riferimento Tassonomico</th>
                    <th>Materiale</th>
                    <th>Modalità Acquisizione</th>
                    <th>Fornitore</th>
                    <th>Provenienza</th>
                </tr>
            </thead>
            <tbody>
                @foreach($finds as $find)
                <tr>
                    <td>{{ $find->id }}</td>
                    <td>{{ $find->descrizione }}</td>
                    <td>{{ $find->categoria }}</td>
                    <td>{{ $find->nome_comune }}</td>
                    <td>{{ $find->riferimento_tassonomico }}</td>
                    <td>{{ $find->materiale }}</td>
                    <td>{{ $find->modalita_acquisizione }}</td>
                    <td>{{ $find->fornitore }}</td>
                    <td>{{ $find->provenienza }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @elseif(isset($finds))
    <p class="text-center mt-5">Nessun risultato trovato.</p>
    @endif
</x-app-layout>
