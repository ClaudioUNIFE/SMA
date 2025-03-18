<!-- 404.html -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Pagina non trovata</title>
    <link rel="stylesheet" href="{{ asset('css/standard.css') }}">

</head>
<body class="error-page">
    <div class="margin: 0; padding: 0; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="error-container">
            <img src="{{ asset('images/404.png') }}" alt="404 Illustration" class="error-image">
            <h1 class="error-title">Ops... sembra che la pagina a cui stai cercando di accedere non esiste o non hai i permessi per accedervi.</h1>
                <a href="/" class="btn-primary">Torna alla Home</a>
        </div>
    </div>
</body>
</html>