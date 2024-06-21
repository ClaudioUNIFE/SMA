<x-app-layout>

    <!-- Deposits Index Page -->
    <div style="text-align: center; margin-bottom: 20px;">
        <p class="font-semibold" style="font-size: 2.5rem; color:white">DEPOSITI</p>

        @if ($message = Session::get('success'))
            <div style="color: white; background-color: #28a745; padding: 10px; margin-top: 10px;">
                {{ $message }}
            </div>
        @endif
    </div>

    <div style="margin-left:5%; margin-right:5%">
        <table style="width: 100%; border-collapse: collapse;">
            <thead style="background-color: grey;">
                <tr>
                    <th style="color: white; padding: 10px; text-align: left;">Collocazione</th>
                    <th style="color: white; padding: 10px; text-align: left;">Deposito</th>
                    <th style="color: white; padding: 10px; text-align: left;">Codice Stanza</th>
                    <th style="color: white; padding: 10px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deposits as $deposit)
                    <tr style="background-color: #444;">
                        <td style="color: white; padding: 10px;">{{ $deposit->collocazione }}</td>
                        <td style="color: white; padding: 10px;">{{ $deposit->deposito }}</td>
                        <td style="color: white; padding: 10px;">{{ $deposit->codice_stanza }}</td>
                        <td style="padding: 10px;">
                            <a href="{{ route('deposits.show', $deposit->id) }}" style="color: white; margin-right: 10px; text-decoration: none; background-color: #007bff; padding: 5px 10px; border-radius: 3px;">Show</a>
                            <a href="{{ route('deposits.edit', $deposit->id) }}" style="color: white; margin-right: 10px; text-decoration: none; background-color: #ffc107; padding: 5px 10px; border-radius: 3px;">Edit</a>
                            <form id="delete-form-{{ $deposit->id }}" action="{{ route('deposits.destroy', $deposit->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $deposit->id }})" style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('deposits.create') }}" style="color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Add New Deposit</a>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Sei sicuro di voler eliminare questo deposito?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

</x-app-layout>
