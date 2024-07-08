<!DOCTYPE html>
<html>
<head>
    <title>Import CSV File</title>
    <style>
        .form-control {
            color: #000; /* Imposta il colore del testo su nero */
            width: 100%; /* Assicura che gli input prendano tutta la larghezza */
        }
        .center-table {
            margin: 0 auto; /* Centra la tabella orizzontalmente */
            width: 80%; /* Imposta la larghezza della tabella */
            border: 1px solid #ccc; /* Aggiungi un bordo alla tabella */
            border-collapse: collapse; /* Collassa i bordi per un aspetto più pulito */
        }
        .center-table th,
        .center-table td {
            padding: 8px; /* Aggiungi padding all'interno delle celle della tabella */
            text-align: left; /* Allinea il testo a sinistra */
            border: 1px solid #ccc; /* Aggiungi un bordo alle celle della tabella */
        }
        body {
            margin: 5%;
            color: #FFF;
            background-color: #333; /* Aggiungi uno sfondo scuro per maggiore contrasto */
        }
        button {
            background-color: #007BFF; /* Imposta il colore di sfondo del pulsante */
            color: #FFF; /* Imposta il colore del testo del pulsante */
            border: none; /* Rimuovi il bordo del pulsante */
            padding: 10px 20px; /* Aggiungi padding al pulsante */
            cursor: pointer; /* Cambia il cursore quando si passa sopra il pulsante */
        }
        button:hover {
            background-color: #0056b3; /* Cambia il colore di sfondo al passaggio del mouse */
        }
        .success-message {
            color: #28a745; /* Imposta il colore del messaggio di successo */
            margin-bottom: 20px; /* Aggiungi un margine inferiore al messaggio di successo */
        }
    </style>
</head>
<body>
    <div style="margin: 5%;">
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <table class="center-table">
                <tr>
                    <th><label for="file">Choose CSV File</label></th>
                    <td><input type="file" name="file" class="form-control" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit">Import</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

