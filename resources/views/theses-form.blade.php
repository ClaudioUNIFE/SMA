<x-app-layout>

    <div class="view-container">
        <table class="center-table">
            <tr>
                <th>Museo di Riferimento</th>
                <td>{{ $thesis->museum->nome_museo }}</td>
            </tr>
            <tr>
                <th>Deposito di Riferimento</th>
                <td>{{ $thesis->deposit->collocazione }}, {{ $thesis->deposit->deposito }}, stanza numero: {{ $thesis->deposit->codice_stanza }}</td>
            </tr>
            <tr>
                <th>Autore</th>
                <td>{{ $thesis->autore }}</td>
            </tr>
            <tr>
                <th>Titolo</th>
                <td>{{ $thesis->titolo }}</td>
            </tr>
            <tr>
                <th>Anno Accademico</th>
                <td>{{ $thesis->anno_accademico }}</td>
            </tr>
            <tr>
                <th>Disciplina</th>
                <td>{{ $thesis->disciplina }}</td>
            </tr>
            <tr>
                <th>Relatore</th>
                <td>{{ $thesis->relatore }}</td>
            </tr>
            <tr>
                <th>Correlatore</th>
                <td>{{ $thesis->correlatore }}</td>
            </tr>
            <tr>
                <th>Contro Relatore</th>
                <td>{{ $thesis->contro_relatore }}</td>
            </tr>
            <tr>
                <th>Percorso File</th>
                <td><a href="$thesis->percorso_file">{{ $thesis->percorso_file }}</a></td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ $thesis->note }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Visualizzazione delle informazioni della tesi
    </div>
</x-app-layout>
