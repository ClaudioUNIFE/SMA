<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/standard.css') }}">
    </head>
    <!-- Create Deposit Form -->
    <div class="form-container">
      <h2 style="color: white; margin-bottom: 20px; text-align: center;">Modifica Deposito</h2>
      @if ($errors->any())
          <div style="color: white; background-color: #e74c3c; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
              <ul style="list-style-type: none; padding: 0;">
                  @foreach ($errors->all() as $error)
                      <li style="margin-bottom: 5px;">{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif


      <form action="{{ route('deposits.update', $deposit->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 15px; align-items: center;">
          @csrf
          @include('deposits._form')
          <button type="submit" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; transition: background-color 0.3s ease; margin-top: 20px;">
            Salva
          </button>
      </form>
    </div>
  </x-app-layout>

