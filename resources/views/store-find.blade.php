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
        <form action="{{ route('find.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <table class="center-table">
                <tr>
                    <th><label for="id_museo">Museo di Riferimento</label></th>
                    <td>
                        <select name="id_museo" id="id_museo" class="form-control">
                            @foreach ($museums as $museum)
                                <option value="{{ $museum->id }}">{{ $museum->nome_museo }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="id_vecchio">ID reperto (ICCD o altro)</label></th>
                    <td><input type="text" name="id_vecchio" id="id_vecchio" class="form-control" placeholder="ID reperto (ICCD o altro)" /></td>
                </tr>
                <tr>
                    <th><label for="descrizione">Descrizione</label></th>
                    <td><input type="text" name="descrizione" id="descrizione" class="form-control" placeholder="Descrizione" /></td>
                </tr>
                <tr>
                    <th><label for="note">Note</label></th>
                    <td><textarea name="note" id="note" class="form-control" placeholder="Note"></textarea></td>
                </tr>
                <tr>
                    <th><label for="esposto">Esposto</label></th>
                    <td>
                        <input type="hidden" name="esposto" value="0">
                        <input type="checkbox" id="esposto" name="esposto" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="digitalizzato">Digitalizzato</label></th>
                    <td>
                        <input type="hidden" name="digitalizzato" value="0">
                        <input type="checkbox" id="digitalizzato" name="digitalizzato" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="digitalizzato">Catalogato</label></th>
                    <td>
                        <input type="hidden" name="catalogato" value="0">
                        <input type="checkbox" id="catalogato" name="catalogato" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="restaurato">Restaurato</label></th>
                    <td>
                        <input type="hidden" name="restaurato" value="0">
                        <input type="checkbox" id="restaurato" name="restaurato" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="id_deposito">Deposito</label></th>
                    <td>
                        <select name="id_deposito" id="id_deposito" class="form-control">
                            @foreach ($deposits as $deposit)
                                <option value="{{ $deposit->id }}">{{ $deposit->collocazione }}, {{ $deposit->deposito }}, stanza numero: {{ $deposit->codice_stanza }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="id_collezione">Collezione</label></th>
                    <td>
                        <select name="id_collezione" id="id_collezione" class="form-control">
                            @foreach ($collections as $collection)
                                <option value="{{ $collection->id }}">{{ $collection->nome_collezione }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="validato">Validato</label></th>
                    <td>
                        <input type="hidden" name="validato" value="0">
                        <input type="checkbox" id="validato" name="validato" value="1">
                    </td>
                </tr>

                <tr>
                    <th><label for="categoria">Categoria Reperto</label></th>
                    <td>
                        <select name="categoria" id="categoria" class="form-control" required>
                            <option value="Geologico">Geologico</option>
                            <option value="Paleontologico">Paleontologico</option>
                            <option value="Biologico">Biologico</option>
                            <option value="Antropologico">Antropologico</option>
                            <option value="Archeologico">Archeologico</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="olotipo">Olotipo</label></th>
                    <td>
                        <input type="hidden" name="olotipo" value="0">
                        <input type="checkbox" name="olotipo" id="olotipo" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="riferimento_tassonomico">Riferimento Tassonomico</label></th>
                    <td><input type="text" name="riferimento_tassonomico" id="riferimento_tassonomico" class="form-control" placeholder="Riferimento Tassonomico" /></td>
                </tr>
                <tr>
                    <th><label for="nome_comune">Nome Comune</label></th>
                    <td><input type="text" name="nome_comune" id="nome_comune" class="form-control" placeholder="Nome Comune" /></td>
                </tr>
                <tr>
                    <th><label for="taxon_group">Taxon Group</label></th>
                    <td>
                        <select name="taxon_group" id="taxon_group" class="form-control" required>
                            <option value="V">Vertebrate</option>
                            <option value="I">Invertebrate</option>
                            <option value="P">Plant</option>
                            <option value="M">Mammal</option>
                            <option value="F">Fish</option>
                            <option value="A">Amphibian</option>
                            <option value="R">Reptile</option>
                            <option value="B">Bird</option>
                            <option value="O">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="riferimento_cronologico">Riferimento Cronologico</label></th>
                    <td><input type="text" name="riferimento_cronologico" id="riferimento_cronologico" class="form-control" placeholder="Riferimento Cronologico" /></td>
                </tr>
                <tr>
                    <th><label for="id_catalogo">Catalogo</label></th>
                    <td>
                        <select name="id_catalogo" id="id_catalogo" class="form-control">
                            @foreach ($catalogs as $catalog)
                                <option value="{{ $catalog->id }}">{{ $catalog->catalogo }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="multiplo">Multiplo</label></th>
                    <td>
                        <input type="hidden" name="multiplo" value="0">
                        <input type="checkbox" id="multiplo" name="multiplo" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="molteplicita">Molteplicità</label></th>
                    <td><input type="text" name="molteplicita" id="molteplicita" class="form-control" placeholder="Molteplicità" /></td>
                <tr>
                    <th><label for="originale">Originale</label></th>
                    <td>
                        <input type="hidden" name="originale" value="0">
                        <input type="checkbox" name="originale" id="originale" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="fossile">Fossile</label></th>
                    <td>
                        <input type="hidden" name="fossile" value="0">
                        <input type="checkbox" name="fossile" id="fossile" value="1">
                    </td>
                </tr>
                <tr>
                    <th><label for="materiale">Materiale</label></th>
                    <td><input type="text" name="materiale" id="materiale" class="form-control" placeholder="Materiale" /></td>
                </tr>
                <tr>
                    <th><label for="modalita_acquisizione">Modalità di Acquisizione</label></th>
                    <td><input type="text" name="modalita_acquisizione" id="modalita_acquisizione" class="form-control" placeholder="Modalità di Acquisizione" /></td>
                </tr>
                <tr>
                    <th><label for="data_acquisizione">Data di Acquisizione</label></th>
                    <td><input type="date" name="data_acquisizione" id="data_acquisizione" class="form-control" /></td>
                </tr>
                <tr>
                    <th><label for="data_inventario">Data di Inventariazione</label></th>
                    <td><input type="date" name="data_inventario" id="data_inventario" class="form-control" /></td>
                </tr>
                <tr>
                    <th><label for="proprieta">Proprietà</label></th>
                    <td><input type="text" name="proprieta" id="proprieta" class="form-control" placeholder="Proprietà" /></td>
                </tr>
                <tr>
                    <th><label for="provenienza">Provenienza</label></th>
                    <td><input type="text" name="provenienza" id="provenienza" class="form-control" placeholder="Provenienza" /></td>
                </tr>
                <tr>
                    <th><label for="codice_patrimonio">Codice di Patrimonio</label></th>
                    <td><input type="text" name="codice_patrimonio" id="codice_patrimonio" class="form-control" placeholder="Codice di Patrimonio" /></td>
                </tr>
                <tr>
                    <th><label for="fornitore">Fornitore</label></th>
                    <td><input type="text" name="fornitore" id="fornitore" class="form-control" placeholder="Fornitore" /></td>
                </tr>
                <tr>
                    <th><label for="cartellino_storico">Cartellino Storico</label></th>
                    <td><input type="text" name="cartellino_storico" id="cartellino_storico" class="form-control" /></td>
                </tr>
                <tr>
                    <th><label for="cartellino_attuale">Cartellino Attuale</label></th>
                    <td><input type="text" name="cartellino_attuale" id="cartellino_attuale" class="form-control" /></td>
                </tr>
                <tr>
                    <th><label for="didascalia">Didascalia</label></th>
                    <td><input type="text" name="didascalia" id="didascalia" class="form-control" /></td>
                </tr>

                <tr>
                    <th><label for="foto_principale">Foto reperto</label></th>
                    <td><input type="file" name="foto_principale" id="foto_principale" class="form-control" /></td>
                </tr>
                <tr>
                    <th><label for="catalogo">Catalogo</label></th>
                    <td><input type="text" name="catalogo" id="catalogo" class="form-control"/></td>
                </tr>
                <tr>
                    <th><label for="iccd">ICCD</label></th>
                    <td><input type="text" name="iccd" id="iccd" class="form-control"/></td>
                </tr>
                <tr>
                    <th><label for="pater">PATER</label></th>
                    <td><input type="text" name="pater" id="pater" class="form-control"/></td>
                </tr>
                <tr>
                    <th><label for="vecchio_db">Vecchio DB</label></th>
                    <td><input type="text" name="vecchio_db" id="vecchio_db" class="form-control"/></td>
                </tr>

            </table>
            <div style="text-align: center; margin-top: 20px;">
                <button type="submit">INSERISCI</button>
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
