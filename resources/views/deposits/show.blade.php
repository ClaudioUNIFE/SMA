<x-app-layout>
    <!-- Deposit Details -->
    <div style="background-color: grey; padding: 30px; border-radius: 15px; margin: 5%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin-left: auto; margin-right: auto;">
        <h2 style="color: white; margin-bottom: 20px; text-align: center;">Deposit Details</h2>
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
        <a href="{{ route('deposits.index') }}" style="color: #007bff; text-decoration: none;">Back</a>
    </div>
</x-app-layout>
