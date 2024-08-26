<x-app-layout>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .view-container {
            margin: 5% auto;
            max-width: 800px;
            background-color: #2c3e50;
            padding: 2%;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #ecf0f1;
        }
        .view-control {
            margin: 10px 0;
            padding: 10px;
            background-color: #34495e;
            border-radius: 6px;
            box-sizing: border-box;
            color: #ecf0f1;
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
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #2c3e50;
            color: #ecf0f1;
        }
    </style>

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
