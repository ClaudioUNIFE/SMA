<x-app-layout>

    <!-- <link rel="stylesheet" href="{{ asset('css/standard.css') }}"> -->

    <div class="form-container">
        <form action="{{ route('attached.store', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <table class="center-table">

                <tr>
                    <th colspan="2">Dettagli Allegato </th>
                </tr>

                <tr>
                    <th><label for="codice_reperto">Link</label></th>
                    <td><input type="text" name="link" id="link" class="form-control" placeholder="Inserisci il link" value="{{ old('link', $metadata->codice_reperto ?? '') }}" required/></td>
                </tr>
                <tr>
                    <th><label for="titolo">Tipo Acquisizione</label></th>
                    <td><input type="text" name="tipo_acquisizione" id="tipo_acquisizione" class="form-control" placeholder="Tipo Acquisizione" value="{{ old('tipo_acquisizione', $metadata->titolo ?? '') }}" required/></td>
            </tr>

            </table>
            <br>
            <br>
            <br>


            <table class="center-table">
                <tr>
                    <th colspan="2">Inserisci Metadati </th>
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
                    <td><label for="sogetto">Soggetto</label></td>
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
            <br>
            <br>
            <br>


            <table class="center-table">
                <tr>
                    <th colspan="2">Inserisci Paradati </th>
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
                    <td><label for="responsabile_acquisizione">Responsabile Acquisizione</label></td>
                    <td><input type="text" name="responsabile_acquisizione" id="responsabile_acquisizione" class="form-control" placeholder="Responsabile Acquisizione"></td>
                </tr>
                <tr>
                    <td><label for="operatore">Operatore</label></td>
                    <td><input type="text" name="operatore" id="operatore" class="form-control" placeholder="Operatore"></td>
                </tr>
                <tr>
                    <td><label for="tipo_superfice">Tipo Superfice</label></td>
                    <td><input type="text" name="tipo_superfice" id="tipo_superfice" class="form-control" placeholder="Tipo Superfice"></td>
                </tr>
                <tr>
                    <td><label for="descrizione_complessita">Descrizione Complessità</label></td>
                    <td><textarea name="descrizione_complessita" id="descrizione_complessita" class="form-control" placeholder="Descrizione Complessità"></textarea></td>
                </tr>
                <tr>
                    <td><label for="fotocamera">Fotocamera</label></td>
                    <td><input type="text" name="fotocamera" id="fotocamera" class="form-control" placeholder="Fotocamera"></td>
                </tr>
                <tr>
                    <td><label for="impostazioni">Impostazioni</label></td>
                    <td><input type="text" name="impostazioni" id="impostazioni" class="form-control" placeholder="Impostazioni"></td>
                </tr>
                <tr>
                    <td><label for="obiettivo">Obiettivo</label></td>
                    <td><input type="text" name="obiettivo" id="obiettivo" class="form-control" placeholder="Obiettivo"></td>
                </tr>
                <tr>
                    <td><label for="illuminazione">Illuminazione</label></td>
                    <td><input type="text" name="illuminazione" id="illuminazione" class="form-control" placeholder="Illuminazione"></td>
                </tr>
                <tr>
                    <td><label for="light_box">Light Box</label></td>
                    <td>
                        <input type="hidden" name="light_box" value="0">
                        <input type="checkbox" name="light_box" id="light_box" value="1">
                    </td>
                </tr>
                <tr>
                    <td><label for="tipo_supporto">Tipo Supporto</label></td>
                    <td><input type="text" name="tipo_supporto" id="tipo_supporto" class="form-control" placeholder="Tipo Supporto"></td>
                </tr>
                <tr>
                    <td><label for="numero_scatti">Numero Scatti</label></td>
                    <td><input type="text" name="numero_scatti" id="numero_scatti" class="form-control" placeholder="Numero Scatti"></td>
                </tr>
                <tr>
                    <td><label for="software">Software</label></td>
                    <td><input type="text" name="software" id="software" class="form-control" placeholder="Software"></td>
                </tr>
                <tr>
                    <td><label for="output">Output</label></td>
                    <td><input type="text" name="output" id="output" class="form-control" placeholder="Output"></td>
                </tr>
                <tr>
                    <td><label for="strumentazione">Strumentazione</label></td>
                    <td><input type="text" name="strumentazione" id="strumentazione" class="form-control" placeholder="Strumentazione"></td>
                </tr>
                <tr>
                    <td><label for="risoluzione">Risoluzione</label></td>
                    <td><input type="text" name="risoluzione" id="risoluzione" class="form-control" placeholder="Risoluzione"></td>
                </tr>
                <tr>
                    <td><label for="modalita_scansione">Modalità Scansione</label></td>
                    <td><input type="text" name="modalita_scansione" id="modalita_scansione" class="form-control" placeholder="Modalità Scansione"></td>
                </tr>
                <tr>
                    <td><label for="ingrandimento">Ingrandimento</label></td>
                    <td><input type="text" name="ingrandimento" id="ingrandimento" class="form-control" placeholder="Ingrandimento"></td>
                </tr>
                <tr>
                    <td><label for="luminosita">Luminosità</label></td>
                    <td><input type="text" name="luminosita" id="luminosita" class="form-control" placeholder="Luminosità"></td>
                </tr>
                <tr>
                    <td><label for="fibra_ottica">Fibra Ottica</label></td>
                    <td>
                        <input type="hidden" name="fibra_ottica" value="0">
                        <input type="checkbox" name="fibra_ottica" id="fibra_ottica" value="1">
                    </td>
                </tr>
                <tr>
                    <td><label for="tiling">Tiling</label></td>
                    <td>
                        <input type="hidden" name="tiling" value="0">
                        <input type="checkbox" name="tiling" id="tiling" value="1">
                    </td>
                </tr>
                <tr>
                    <td><label for="scala">Scala</label></td>
                    <td><input type="text" name="scala" id="scala" class="form-control" placeholder="Scala"></td>
                </tr>
                <tr>
                    <td><label for="formato">Formato</label></td>
                    <td><input type="text" name="formato" id="formato" class="form-control" placeholder="Formato"></td>
                </tr>
                <tr>
                    <td><label for="data_inizio">Data Inizio</label></td>
                    <td><input type="date" name="data_inizio" id="data_inizio" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="data_fine">Data Fine</label></td>
                    <td><input type="date" name="data_fine" id="data_fine" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="tempo_totale">Tempo Totale</label></td>
                    <td><input type="text" name="tempo_totale" id="tempo_totale" class="form-control" placeholder="Tempo Totale"></td>
                </tr>
                <tr>
                    <td><label for="luogo_acquisizione">Luogo Acquisizione</label></td>
                    <td><input type="text" name="luogo_acquisizione" id="luogo_acquisizione" class="form-control" placeholder="Luogo Acquisizione"></td>
                </tr>
                <tr>
                    <td><label for="temperatura">Temperatura</label></td>
                    <td><input type="text" name="temperatura" id="temperatura" class="form-control" placeholder="Temperatura"></td>
                </tr>
                <tr>
                    <td><label for="condizioni_iniziali_conservazione">Condizioni Iniziali Conservazione</label></td>
                    <td><textarea name="condizioni_iniziali_conservazione" id="condizioni_iniziali_conservazione" class="form-control" placeholder="Condizioni Iniziali Conservazione"></textarea></td>
                </tr>
                <tr>
                    <td><label for="condizioni_finali_conservazione">Condizioni Finali Conservazione</label></td>
                    <td><textarea name="condizioni_finali_conservazione" id="condizioni_finali_conservazione" class="form-control" placeholder="Condizioni Finali Conservazione"></textarea></td>
                </tr>
            </table>


            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
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
