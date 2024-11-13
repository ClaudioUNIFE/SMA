<!-- cambiare ordine, codice = stanza -- deposito = arredo -- colocazione non obbligatoria = ripiano -->
<x-app-layout>
    <!-- Create Deposit Form -->
    <div class="form-container">
        <h2 class="text-white mb-5 text-center">Crea Deposito</h2>
        @if ($errors->any())
          <div class="text-white bg-red-600 p-4 rounded-lg mb-5">
              <ul class="list-none p-0">
              @foreach ($errors->all() as $error)
                  <li class="mb-1">{{ $error }}</li>
              @endforeach
              </ul>
          </div>
          @endif
    <form action="{{ route('deposits.store') }}" method="POST" class="flex flex-col gap-4 items-center">
        @csrf
        @include('deposits._form')
        <button type="submit" class="btn-primary">
        Salva
        </button>
    </form>
    </div>
  </x-app-layout>
