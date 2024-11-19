<x-app-layout>

    <!-- <link rel="stylesheet" href="{{ asset('css/standard.css') }}"> -->

    <div class="form-container">
        <form action="{{ route('attached.update', ['id' => $attached->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <table class="center-table">
                <tr>
                    <th colspan="2">Dettagli Allegato </th>
                </tr>


                <tr>
                    <th><label for="link">Link</label></th>
                    <td><input type="text" name="link" id="link" class="form-control" placeholder="Inserisci il link" value="{{ old('link', $attached->link ?? '') }}" required/></td>
                </tr>
                <tr>
                    <th><label for="tipo_acquisizione">Tipo Acquisizione</label></th>
                    <td><input type="text" name="tipo_acquisizione" id="tipo_acquisizione" class="form-control" placeholder="Tipo Acquisizione" value="{{ old('tipo_acquisizione', $attached->tipo_acquisizione ?? '') }}" required/></td>
                </tr>
            </table>

            <br><br>

            <table class="center-table">
                <tr>
                    <th colspan="2">Inserisci Metadati </th>
                </tr>
                <tr>
                    <td><label for="titolo">Titolo</label></td>
                    <td><input type="text" name="titolo" id="titolo" class="form-control" placeholder="Titolo" value="{{ old('titolo', $metadata->titolo ?? '') }}" required></td>
                </tr>
                <tr>
                    <td><label for="autore">Autore</label></td>
                    <td><input type="text" name="autore" id="autore" class="form-control" placeholder="Autore" value="{{ old('autore', $metadata->autore ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="soggetto">Soggetto</label></td>
                    <td><input type="text" name="soggetto" id="soggetto" class="form-control" placeholder="Soggetto" value="{{ old('soggetto', $metadata->soggetto ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="descrizione">Descrizione</label></td>
                    <td><textarea name="descrizione" id="descrizione" class="form-control" placeholder="Descrizione">{{ old('descrizione', $metadata->descrizione ?? '') }}</textarea></td>
                </tr>
                <tr>
                    <td><label for="editore">Editore</label></td>
                    <td><input type="text" name="editore" id="editore" class="form-control" placeholder="Editore" value="{{ old('editore', $metadata->editore ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="autore_di_contributo">Autore di Contributo</label></td>
                    <td><input type="text" name="autore_di_contributo" id="autore_di_contributo" class="form-control" placeholder="Autore di Contributo" value="{{ old('autore_di_contributo', $metadata->autore_di_contributo ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="data">Data</label></td>
                    <td><input type="date" name="data" id="data" class="form-control" value="{{ old('data', $metadata->data ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="tipo">Tipo</label></td>
                    <td><input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo" value="{{ old('tipo', $metadata->tipo ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="formato">Formato</label></td>
                    <td><input type="text" name="formato" id="formato" class="form-control" placeholder="Formato" value="{{ old('formato', $metadata->formato ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="identificatore">Identificatore</label></td>
                    <td><input type="text" name="identificatore" id="identificatore" class="form-control" placeholder="Identificatore" value="{{ old('identificatore', $metadata->identificatore ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="fonte">Fonte</label></td>
                    <td><input type="text" name="fonte" id="fonte" class="form-control" placeholder="Fonte" value="{{ old('fonte', $metadata->fonte ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="lingua">Lingua</label></td>
                    <td><input type="text" name="lingua" id="lingua" class="form-control" placeholder="Lingua" value="{{ old('lingua', $metadata->lingua ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="relazione">Relazione</label></td>
                    <td><input type="text" name="relazione" id="relazione" class="form-control" placeholder="Relazione" value="{{ old('relazione', $metadata->relazione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="copertura">Copertura</label></td>
                    <td><input type="text" name="copertura" id="copertura" class="form-control" placeholder="Copertura" value="{{ old('copertura', $metadata->copertura ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="gestione_dei_diritti">Gestione dei Diritti</label></td>
                    <td><input type="text" name="gestione_dei_diritti" id="gestione_dei_diritti" class="form-control" placeholder="Gestione dei Diritti" value="{{ old('gestione_dei_diritti', $metadata->gestione_dei_diritti ?? '') }}"></td>
                </tr>
            </table>

            <br><br>

            <table class="center-table">
                <tr>
                    <th colspan="2">Inserisci Paradati </th>
                </tr>
                <tr>
                    <td><label for="stato_corrente">Stato Corrente</label></td>
                    <td><input type="text" name="stato_corrente" id="stato_corrente" class="form-control" placeholder="Stato Corrente" value="{{ old('stato_corrente', $paradata->stato_corrente ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="responsabile_scelta_reperto">Responsabile Scelta Reperto</label></td>
                    <td><input type="text" name="responsabile_scelta_reperto" id="responsabile_scelta_reperto" class="form-control" placeholder="Responsabile Scelta Reperto" value="{{ old('responsabile_scelta_reperto', $paradata->responsabile_scelta_reperto ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="scheda_validata">Scheda Validata</label></td>
                    <td>
                        <input type="hidden" name="scheda_validata" value="0">
                        <input type="checkbox" name="scheda_validata" id="scheda_validata" value="1" {{ old('scheda_validata', $paradata->scheda_validata ?? 0) == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td><label for="validatore_scheda">Validatore Scheda</label></td>
                    <td><input type="text" name="validatore_scheda" id="validatore_scheda" class="form-control" placeholder="Validatore Scheda" value="{{ old('validatore_scheda', $paradata->validatore_scheda ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="note">Note</label></td>
                    <td><textarea name="note" id="note" class="form-control" placeholder="Note">{{ old('note', $paradata->note ?? '') }}</textarea></td>
                </tr>
                <tr>
                    <td><label for="responsabile_acquisizione">Responsabile Acquisizione</label></td>
                    <td><input type="text" name="responsabile_acquisizione" id="responsabile_acquisizione" class="form-control" placeholder="Responsabile Acquisizione" value="{{ old('responsabile_acquisizione', $paradata->responsabile_acquisizione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="operatore">Operatore</label></td>
                    <td><input type="text" name="operatore" id="operatore" class="form-control" placeholder="Operatore" value="{{ old('operatore', $paradata->operatore ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="tipo_superfice">Tipo Superfice</label></td>
                    <td><input type="text" name="tipo_superfice" id="tipo_superfice" class="form-control" placeholder="Tipo Superfice" value="{{ old('tipo_superfice', $paradata->tipo_superfice ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="descrizione_complessita">Descrizione Complessità</label></td>
                    <td><textarea name="descrizione_complessita" id="descrizione_complessita" class="form-control" placeholder="Descrizione Complessità">{{ old('descrizione_complessita', $paradata->descrizione_complessita ?? '') }}</textarea></td>
                </tr>
                <tr>
                    <td><label for="fotocamera">Fotocamera</label></td>
                    <td><input type="text" name="fotocamera" id="fotocamera" class="form-control" placeholder="Fotocamera" value="{{ old('fotocamera', $paradata->fotocamera ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="impostazioni">Impostazioni</label></td>
                    <td><input type="text" name="impostazioni" id="impostazioni" class="form-control" placeholder="Impostazioni" value="{{ old('impostazioni', $paradata->impostazioni ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="obiettivo">Obiettivo</label></td>
                    <td><input type="text" name="obiettivo" id="obiettivo" class="form-control" placeholder="Obiettivo" value="{{ old('obiettivo', $paradata->obiettivo ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="illuminazione">Illuminazione</label></td>
                    <td><input type="text" name="illuminazione" id="illuminazione" class="form-control" placeholder="Illuminazione" value="{{ old('illuminazione', $paradata->illuminazione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="light_box">Light Box</label></td>
                    <td>
                        <input type="hidden" name="light_box" value="0">
                        <input type="checkbox" name="light_box" id="light_box" value="1" {{ old('light_box', $paradata->light_box ?? 0) == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td><label for="tipo_supporto">Tipo Supporto</label></td>
                    <td><input type="text" name="tipo_supporto" id="tipo_supporto" class="form-control" placeholder="Tipo Supporto" value="{{ old('tipo_supporto', $paradata->tipo_supporto ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="numero_scatti">Numero Scatti</label></td>
                    <td><input type="text" name="numero_scatti" id="numero_scatti" class="form-control" placeholder="Numero Scatti" value="{{ old('numero_scatti', $paradata->numero_scatti ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="software">Software</label></td>
                    <td><input type="text" name="software" id="software" class="form-control" placeholder="Software" value="{{ old('software', $paradata->software ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="output">Output</label></td>
                    <td><input type="text" name="output" id="output" class="form-control" placeholder="Output" value="{{ old('output', $paradata->output ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="strumentazione">Strumentazione</label></td>
                    <td><input type="text" name="strumentazione" id="strumentazione" class="form-control" placeholder="Strumentazione" value="{{ old('strumentazione', $paradata->strumentazione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="risoluzione">Risoluzione</label></td>
                    <td><input type="text" name="risoluzione" id="risoluzione" class="form-control" placeholder="Risoluzione" value="{{ old('risoluzione', $paradata->risoluzione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="modalita_scansione">Modalità Scansione</label></td>
                    <td><input type="text" name="modalita_scansione" id="modalita_scansione" class="form-control" placeholder="Modalità Scansione" value="{{ old('modalita_scansione', $paradata->modalita_scansione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="ingrandimento">Ingrandimento</label></td>
                    <td><input type="text" name="ingrandimento" id="ingrandimento" class="form-control" placeholder="Ingrandimento" value="{{ old('ingrandimento', $paradata->ingrandimento ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="luminosita">Luminosità</label></td>
                    <td><input type="text" name="luminosita" id="luminosita" class="form-control" placeholder="Luminosità" value="{{ old('luminosita', $paradata->luminosita ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="fibra_ottica">Fibra Ottica</label></td>
                    <td>
                        <input type="hidden" name="fibra_ottica" value="0">
                        <input type="checkbox" name="fibra_ottica" id="fibra_ottica" value="1" {{ old('fibra_ottica', $paradata->fibra_ottica ?? 0) == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td><label for="tiling">Tiling</label></td>
                    <td>
                        <input type="hidden" name="tiling" value="0">
                        <input type="checkbox" name="tiling" id="tiling" value="1" {{ old('tiling', $paradata->tiling ?? 0) == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td><label for="scala">Scala</label></td>
                    <td><input type="text" name="scala" id="scala" class="form-control" placeholder="Scala" value="{{ old('scala', $paradata->scala ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="data_inizio">Data Inizio</label></td>
                    <td><input type="date" name="data_inizio" id="data_inizio" class="form-control" value="{{ old('data_inizio', $paradata->data_inizio ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="data_fine">Data Fine</label></td>
                    <td><input type="date" name="data_fine" id="data_fine" class="form-control" value="{{ old('data_fine', $paradata->data_fine ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="tempo_totale">Tempo Totale</label></td>
                    <td><input type="text" name="tempo_totale" id="tempo_totale" class="form-control" placeholder="Tempo Totale" value="{{ old('tempo_totale', $paradata->tempo_totale ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="luogo_acquisizione">Luogo Acquisizione</label></td>
                    <td><input type="text" name="luogo_acquisizione" id="luogo_acquisizione" class="form-control" placeholder="Luogo Acquisizione" value="{{ old('luogo_acquisizione', $paradata->luogo_acquisizione ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="temperatura">Temperatura</label></td>
                    <td><input type="text" name="temperatura" id="temperatura" class="form-control" placeholder="Temperatura" value="{{ old('temperatura', $paradata->temperatura ?? '') }}"></td>
                </tr>
                <tr>
                    <td><label for="condizioni_iniziali_conservazione">Condizioni Iniziali Conservazione</label></td>
                    <td><textarea name="condizioni_iniziali_conservazione" id="condizioni_iniziali_conservazione" class="form-control" placeholder="Condizioni Iniziali Conservazione">{{ old('condizioni_iniziali_conservazione', $paradata->condizioni_iniziali_conservazione ?? '') }}</textarea></td>
                </tr>
                <tr>
                    <td><label for="condizioni_finali_conservazione">Condizioni Finali Conservazione</label></td>
                    <td><textarea name="condizioni_finali_conservazione" id="condizioni_finali_conservazione" class="form-control" placeholder="Condizioni Finali Conservazione">{{ old('condizioni_finali_conservazione', $paradata->condizioni_finali_conservazione ?? '') }}</textarea></td>
                </tr>
                <table>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
</x-app-layout>
