<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/standard.css') }}">
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div >
                <div class="form-container">
                    <table class="center-table">
                        <thead>
                            <tr>

                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Numero Ufficio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>

                                    <td>{{ $user->nome }}</td>
                                    <td>{{ $user->cognome }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telefono }}</td>
                                    <td>{{ $user->numero_ufficio }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
