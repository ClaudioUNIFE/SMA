<x-app-layout>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            margin: 5% auto;
            max-width: 80%;
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
        button {
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

    {{-- <a href="{{ route('finds.export', $find->id) }}" class="button">Esporta</a>
    <a href="{{ route('attached.manage', $find->id) }}" class="view-control">gestisci allegati</a> --}}

    <div class="form-container">
        <table class="center-table">
            <tr>
                <th>Museo di Riferimento</th>
                <td>{{ $museum->nome_museo }}</td>
            </tr>
            <tr>
                <th>ID reperto (ICCD o altro)</th>
                <td>{{ $find->id_vecchio }}</td>
            </tr>
            <tr>
                <th>Descrizione</th>
                <td>{{ $find->find_descrizione }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ $find->note }}</td>
            </tr>
            <tr>
                <th>Esposto</th>
                <td>{{ $find->esposto ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Digitalizzato</th>
                <td>{{ $find->digitalizzato ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Catalogato</th>
                <td>{{ $find->catalogato ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Restaurato</th>
                <td>{{ $find->restaurato ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Deposito</th>
                <td>{{ $deposit->collocazione }}, {{ $deposit->deposito }}, stanza numero: {{ $deposit->codice_stanza }}</td>
            </tr>
            <tr>
                <th>Collezione</th>
                <td>{{ $collection->nome_collezione }}</td>
            </tr>
            <tr>
                <th>Validato</th>
                <td>{{ $find->validato ? 'Sì' : 'No' }}</td>
            </tr>

            <tr>
                <th>Categoria Reperto</th>
                <td>{{ $find->categoria }}</td>
            </tr>
            <tr>
                <th>Olotipo</th>
                <td>{{ $find->olotipo ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Riferimento Tassonomico</th>
                <td>{{ $find->riferimento_tassonomico }}</td>
            </tr>
            <tr>
                <th>Nome Comune</th>
                <td>{{ $find->nome_comune }}</td>
            </tr>
            <tr>
                <th>Taxon Group</th>
                <td>{{ $find->taxon_group }}</td>
            </tr>
            <tr>
                <th>Riferimento Cronologico</th>
                <td>{{ $find->riferimento_cronologico }}</td>
            </tr>

            <tr>
                <th>Multiplo</th>
                <td>{{ $find->multiplo ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Molteplicità</th>
                <td>{{ $find->molteplicita }}</td>
            </tr>
            <tr>
                <th>Originale</th>
                <td>{{ $find->originale ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Fossile</th>
                <td>{{ $find->fossile ? 'Sì' : 'No' }}</td>
            </tr>
            <tr>
                <th>Materiale</th>
                <td>{{ $find->materiale }}</td>
            </tr>
            <tr>
                <th>Modalità di Acquisizione</th>
                <td>{{ $find->modalita_acquisizione }}</td>
            </tr>
            <tr>
                <th>Data di Acquisizione</th>
                <td>{{ $find->data_acquisizione }}</td>
            </tr>
            <tr>
                <th>Data di Inventariazione</th>
                <td>{{ $find->data_inventario }}</td>
            </tr>
            <tr>
                <th>Proprietà</th>
                <td>{{ $find->proprieta }}</td>
            </tr>
            <tr>
                <th>Provenienza</th>
                <td>{{ $find->provenienza }}</td>
            </tr>
            <tr>
                <th>Codice di Patrimonio</th>
                <td>{{ $find->codice_patrimonio }}</td>
            </tr>
            <tr>
                <th>Fornitore</th>
                <td>{{ $find->fornitore }}</td>
            </tr>

            <tr>
                <th>Cartellino Storico</th>
                <td>{{ $find->cartellino_storico }}</td>
            </tr>
            <tr>
                <th>Cartellino Attuale</th>
                <td>{{ $find->cartellino_attuale }}</td>
            </tr>
            <tr>
                <th>Didascalia</th>
                <td>{{ $find->didascalia }}</td>
            </tr>
            <tr>
                <th>Foto reperto</th>
                <td>
                    @if($find->foto_principale)
                        <img src="{{ asset('storage/' . $find->foto_principale) }}" alt="Foto reperto" style="max-width: 100%; height: auto;">
                    @else
                        Nessuna foto disponibile
                    @endif
                </td>
            </tr>
            <tr>
                <th>Catalogo</th>
                <td>{{ $find->catalogo }}</td>
            </tr>
            <tr>
                <th>ICCD</th>
                <td>{{ $find->iccd }}</td>
            </tr>
            <tr>
                <th>PATER</th>
                <td>{{ $find->pater }}</td>
            </tr>
            <tr>
                <th>Vecchio DB</th>
                <td>{{ $find->vecchio_db }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Visualizzazione delle informazioni del reperto
    </div>
</x-app-layout>
