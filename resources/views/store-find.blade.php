<x-app-layout>
    <style>
        .form-control {
            color: #000; /* Set the text color to black */
            width: 100%; /* Ensure inputs take full width */
        }
        .center-table {
            margin: 0 auto; /* Center the table horizontally */
            width: 80%; /* Set the table width */
            border: 1px solid #ccc; /* Add border to the table */
            border-collapse: collapse; /* Collapse borders for a cleaner look */
        }
        .center-table th,
        .center-table td {
            padding: 8px; /* Add padding inside table cells */
            text-align: left; /* Align text to the left */
            border: 1px solid #ccc; /* Add border to table cells */
        }
    </style>

    <div style="margin: 5%; color: #FFF;">
        <form action="{{ route('finds.action') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <table class="center-table">
                <tr>
                    <th><label for="id_museo"><b>Museo di Riferimento</b></label></th>
                    <td>
                        <select name="id_museo" id="id_museo" class="form-control">
                            @foreach ($museums as $museum)
                                <option value="{{ $museum->id }}">{{ $museum->nome_museo }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="id_vecchio"><b>ID reperto (ICCD o altro)</b></label></th>
                    <td><input type="text" name="id_vecchio" id="id_vecchio" class="form-control" placeholder="ID reperto (ICCD o altro)" /></td>
                </tr>
                <tr>
                    <th><label for="descrizione"><b>Descrizione</b></label></th>
                    <td><input type="text" name="descrizione" id="descrizione" class="form-control" placeholder="Descrizione" /></td>
                </tr>
                <tr>
                    <th><label for="note"><b>Note</b></label></th>
                    <td><textarea name="note" id="note" class="form-control" placeholder="Note"></textarea></td>
                </tr>
                <tr>
                    <th><label for="esposto"><b>Esposto</b></label></th>
                    <td><input type="checkbox" id="esposto" name="esposto"></td>
                </tr>
                <tr>
                    <th><label for="digitalizzato"><b>Digitalizzato</b></label></th>
                    <td><input type="checkbox" id="digitalizzato" name="digitalizzato"></td>
                </tr>
                <tr>
                    <th><label for="id_deposito"><b>Deposito</b></label></th>
                    <td>
                        <select name="id_deposito" id="id_deposito" class="form-control">
                            @foreach ($deposits as $deposit)
                                <option value="{{ $deposit->id }}">{{ $deposit->collocazione }}, {{ $deposit->deposito }}, stanza numero: {{ $deposit->codice_stanza }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="id_collezione"><b>Collezione</b></label></th>
                    <td>
                        <select name="id_collezione" id="id_collezione" class="form-control">
                            @foreach ($collections as $collection)
                                <option value="{{ $collection->id }}">{{ $collection->nome_collezione }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="validato"><b>Validato</b></label></th>
                    <td><input type="checkbox" id="validato" name="validato"></td>
                </tr>
                <tr>
                    <th><label for="tipo_entita"><b>Tipo Entità</b></label></th>
                    <td><input type="text" name="tipo_entita" id="tipo_entita" class="form-control" placeholder="Tipo Entità" /></td>
                </tr>
                <tr>
                    <th><label for="categoria"><b>Categoria Reperto</b></label></th>
                    <td>
                        <select name="taxon_group" id="taxon_group" class="form-control" required>
                            <option value="Geologico">Geologico</option>
                            <option value="Paleontologico">Paleontologico</option>
                            <option value="Biologico">Biologico</option>
                            <option value="Antropologico">Antropologico</option>
                            <option value="Archeologico">Archeologico</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="gigapixel_flag"><b>Gigapixel</b></label></th>
                    <td><input type="checkbox" id="gigapixel_flag" name="gigapixel_flag"></td>
                </tr>
                <tr>
                    <th><label for="render_flag"><b>Render</b></label></th>
                    <td><input type="checkbox" id="render_flag" name="render_flag"></td>
                </tr>
                <tr>
                    <th><label for="olotipo"><b>Olotipo</b></label></th>
                    <td><input type="checkbox" name="olotipo" id="olotipo"></td>
                </tr>
                <tr>
                    <th><label for="riferimento_tassonomico"><b>Riferimento Tassonomico</b></label></th>
                    <td><input type="text" name="riferimento_tassonomico" id="riferimento_tassonomico" class="form-control" placeholder="Riferimento Tassonomico" /></td>
                </tr>
                <tr>
                    <th><label for="nome_comune"><b>Nome Comune</b></label></th>
                    <td><input type="text" name="nome_comune" id="nome_comune" class="form-control" placeholder="Nome Comune" /></td>
                </tr>
                <tr>
                    <th><label for="taxon_group"><b>Taxon Group</b></label></th>
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
                    <th><label for="riferimento_cronologico"><b>Riferimento Cronologico</b></label></th>
                    <td><input type="text" name="riferimento_cronologico" id="riferimento_cronologico" class="form-control" placeholder="Riferimento Cronologico" /></td>
                </tr>
                <tr>
                    <th><label for="id_catalogo"><b>Catalogo</b></label></th>
                    <td>
                        <select name="id_catalogo" id="id_catalogo" class="form-control">
                            @foreach ($catalogs as $catalog)
                                <option value="{{ $catalog->id }}">{{ $catalog->catalogo }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="multiplo"><b>Multiplo</b></label></th>
                    <td><input type="checkbox" name="multiplo" id="multiplo"></td>
                </tr>
                <tr>
                    <th><label for="originale"><b>Originale</b></label></th>
                    <td><input type="checkbox" name="originale" id="originale"></td>
                </tr>
                <tr>
                    <th><label for="fossile"><b>Fossile</b></label></th>
                    <td><input type="checkbox" name="fossile" id="fossile"></td>
                </tr>
                <tr>
                    <th><label for="materiale"><b>Materiale</b></label></th>
                    <td><input type="text" name="materiale" id="materiale" class="form-control" placeholder="Materiale" /></td>
                </tr>
                <tr>
                    <th><label for="modalita_acquisizione"><b>Modalità di Acquisizione</b></label></th>
                    <td><input type="text" name="modalita_acquisizione" id="modalita_acquisizione" class="form-control" placeholder="Modalità di Acquisizione" /></td>
                </tr>
                <tr>
                    <th><label for="data_acquisizione"><b>Data di Acquisizione</b></label></th>
<td><input type="date" name="data_acquisizione" id="data_acquisizione" class="form-control" /></td>
</tr>
<tr>
<th><label for="data_inventario"><b>Data di Inventariazione</b></label></th>
<td><input type="date" name="data_inventario" id="data_inventario" class="form-control" /></td>
</tr>
<tr>
<th><label for="proprieta"><b>Proprietà</b></label></th>
<td><input type="text" name="proprieta" id="proprieta" class="form-control" placeholder="Proprietà" /></td>
</tr>
<tr>
<th><label for="provenienza"><b>Provenienza</b></label></th>
<td><input type="text" name="provenienza" id="provenienza" class="form-control" placeholder="Provenienza" /></td>
</tr>
<tr>
<th><label for="codice_patrimonio"><b>Codice di Patrimonio</b></label></th>
<td><input type="text" name="codice_patrimonio" id="codice_patrimonio" class="form-control" placeholder="Codice di Patrimonio" /></td>

</tr>
<tr>
    <th><label for="descrizione_tecnica"><b>Fornitore</b></label></th>
    <td><input type="text" name="fornitore" id="fornitore" class="form-control" placeholder="Fornitore" /></td>
</tr>
<tr>
<th><label for="gigapixel_file"><b>Gigapixel File</b></label></th>
<td><input type="file" name="gigapixel_file" id="gigapixel_file" class="form-control" style="color: white"/></td>
</tr>
<tr>
<th><label for="render_file"><b>Render File</b></label></th>
<td><input type="file" name="render_file" id="render_file" class="form-control" style="color: white" /></td>
</tr>
</table>
</form>
</div>
<footer><br><br><br></footer>
</x-app-layout>

