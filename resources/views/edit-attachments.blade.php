<x-app-layout>
    
    <head>
        <!-- <link rel="stylesheet" href="{{ asset('css/standard.css') }}"> -->
    </head>
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
