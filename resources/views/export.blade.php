
<table>
    <thead>
        <tr>
            <th>ID reperto (ICCD o altro)</th>
            <th>Descrizione</th>
            <th>Note</th>
            <th>Esposto</th>
            <th>Digitalizzato</th>
            <th>Catalogato</th>
            <th>Restaurato</th>
            <th>Deposito</th>
            <th>Collezione</th>
            <th>Validato</th>
            <th>Categoria Reperto</th>
            <th>Olotipo</th>
            <th>Riferimento Tassonomico</th>
            <th>Nome Comune</th>
            <th>Taxon Group</th>
            <th>Riferimento Cronologico</th>
            <th>Multiplo</th>
            <th>Molteplicità</th>
            <th>Originale</th>
            <th>Fossile</th>
            <th>Materiale</th>
            <th>Modalità di Acquisizione</th>
            <th>Data di Acquisizione</th>
            <th>Data di Inventariazione</th>
            <th>Proprietà</th>
            <th>Provenienza</th>
            <th>Codice di Patrimonio</th>
            <th>Fornitore</th>

            <th>Cartellino Storico</th>
            <th>Cartellino Attuale</th>
            <th>Didascalia</th>

            <th>Catalogo</th>
            <th>ICCD</th>
            <th>PATER</th>
            <th>Vecchio DB</th>


            <th>Tipo_acquisizione</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>



        @foreach ($finds as $find)
        <tr>

            <td>{{ $find->id_vecchio }}</td>
            <td>{{ $find->find_descrizione }}</td>
            <td>{{ $find->note }}</td>
            <td>{{ $find->esposto ? 'Sì' : 'No' }}</td>
            <td>{{ $find->digitalizzato ? 'Sì' : 'No' }}</td>
            <td>{{ $find->catalogato ? 'Sì' : 'No' }}</td>
            <td>{{ $find->restaurato ? 'Sì' : 'No' }}</td>
            <td>{{ $find->collocazione }}, {{ $find->deposito }}, stanza numero: {{ $find->codice_stanza }}</td>
            <td>{{ $find->nome_collezione }}</td>
            <td>{{ $find->validato ? 'Sì' : 'No' }}</td>
            <td>{{ $find->categoria }}</td>
            <td>{{ $find->olotipo ? 'Sì' : 'No' }}</td>
            <td>{{ $find->riferimento_tassonomico }}</td>
            <td>{{ $find->nome_comune }}</td>
            <td>{{ $find->taxon_group }}</td>
            <td>{{ $find->riferimento_cronologico }}</td>
            <td>{{ $find->multiplo ? 'Sì' : 'No' }}</td>
            <td>{{ $find->molteplicita }}</td>
            <td>{{ $find->originale ? 'Sì' : 'No' }}</td>
            <td>{{ $find->fossile ? 'Sì' : 'No' }}</td>
            <td>{{ $find->materiale }}</td>
            <td>{{ $find->modalita_acquisizione }}</td>
            <td>{{ $find->data_acquisizione }}</td>
            <td>{{ $find->data_inventario }}</td>
            <td>{{ $find->proprieta }}</td>
            <td>{{ $find->provenienza }}</td>
            <td>{{ $find->codice_patrimonio }}</td>
            <td>{{ $find->fornitore }}</td>
            <td>{{ $find->cartellino_storico }}</td>
            <td>{{ $find->cartellino_attuale }}</td>
            <td>{{ $find->didascalia }}</td>
            <td>{{ $find->catalogo }}</td>
            <td>{{ $find->iccd }}</td>
            <td>{{ $find->pater }}</td>
            <td>{{ $find->vecchio_db }}</td>
            <td>{{ $find->tipo_acquisizione }}</td>
            <td>{{ $find->link }}</td>
        </tr>
        @endforeach

    </tbody>

</table>
