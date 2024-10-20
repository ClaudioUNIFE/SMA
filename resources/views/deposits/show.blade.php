<x-app-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Deposit Details -->
    <div style="background-color: grey; padding: 30px; border-radius: 15px; margin: 5%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin-left: auto; margin-right: auto;">
        <h2 style="color: white; margin-bottom: 20px; text-align: center;">Dettagli Deposito</h2>
        <div style="margin-bottom: 10px;">
            <strong style="color: white;">Collocazione:</strong>
            {{ $deposit->collocazione }}
        </div>
        <div style="margin-bottom: 10px;">
            <strong style="color: white;">Deposito:</strong>
            {{ $deposit->deposito }}
        </div>
        <div style="margin-bottom: 10px;">
            <strong style="color: white;">Codice Stanza:</strong>
            {{ $deposit->codice_stanza }}
        </div>
        <a href="{{ route('deposits.index') }}" style="color: #007bff; text-decoration: none;"> <i class="fa-solid fa-download"></i> </a>
    </div>
</x-app-layout>
