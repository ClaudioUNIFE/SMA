{{-- resources/views/store-find.blade.php --}}
<x-app-layout>
    {{-- Includi i tuoi file CSS --}}
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/standard.css') }}"> -->

    {{-- Contenuto principale --}}
    <div class="text-gray-900 tracking-wider leading-normal">

        <!-- Container principale -->
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-4 lg:pt-8 mt-8">
        <!-- Menu laterale -->
            <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
                <!--<p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>-->
                <div class="block lg:hidden sticky inset-0 lg:hidden">
                <button id="menu-toggle" class="flex w-auto justify-center px-3 py-3 bg-gray-700 border rounded border-gray-600 hover:border-yellow-600 appearance-none focus:outline-none">
                    <svg class="fill-current h-6 w-6 text-yellow-400" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
                </div>
                <div class="w-full sticky inset-0 hidden max-h-128 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:6em;" id="menu-content">
                    <ul class="list-reset py-2 md:py-0">
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent font-bold border-yellow-600">
                            <a href='#section1' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Informazioni Generali</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section2' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Stato e Attributi</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section3' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Informazioni Tassonomiche</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section4' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Acquisizione</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section5' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Inventario</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section6' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Documentazione</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Area principale -->
            <section class="w-full lg:w-4/5">
                <!-- Titolo -->
                <h1 class="flex items-center font-sans font-bold break-normal text-white px-2 text-2xl mt-12 lg:mt-0 md:text-2xl">
                    Aggiungi Nuovo Reperto
                </h1>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Inizio del form -->
                <form action="{{ route('find.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Sezione 1: Informazioni Generali -->
                    <h2 id='section1' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Informazioni Generali
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Museo di Riferimento -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="id_museo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Museo di Riferimento
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="id_museo" id="id_museo" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                                    @foreach ($museums as $museum)
                                        <option value="{{ $museum->id }}">{{ $museum->nome_museo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- ID reperto (ICCD o altro) -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="id_vecchio" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    ID reperto (ICCD o altro)
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="id_vecchio" id="id_vecchio" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="ID reperto (ICCD o altro)" />
                            </div>
                        </div>

                        <!-- Descrizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="descrizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Descrizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="descrizione" id="descrizione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Descrizione" />
                            </div>
                        </div>

                        <!-- Note -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="note" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Note
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea name="note" id="note" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Note"></textarea>
                            </div>
                        </div>

                        <!-- Deposito -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="id_deposito" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Deposito
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="id_deposito" id="id_deposito" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                                    @foreach ($deposits as $deposit)
                                        <option value="{{ $deposit->id }}">{{ $deposit->collocazione }}, {{ $deposit->deposito }}, stanza numero: {{ $deposit->codice_stanza }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Collezione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="id_collezione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Collezione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="id_collezione" id="id_collezione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                                    @foreach ($collections as $collection)
                                        <option value="{{ $collection->id }}">{{ $collection->nome_collezione }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 2: Stato e Attributi -->
                    <h2 id='section2' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Stato e Attributi
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Esposto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="esposto" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Esposto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="esposto" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="esposto" name="esposto" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Esposto</span>
                                </label>
                            </div>
                        </div>

                        <!-- Digitalizzato -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="digitalizzato" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Digitalizzato
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="digitalizzato" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="digitalizzato" name="digitalizzato" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Digitalizzato</span>
                                </label>
                            </div>
                        </div>

                        <!-- Catalogato -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="catalogato" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Catalogato
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="catalogato" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="catalogato" name="catalogato" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Catalogato</span>
                                </label>
                            </div>
                        </div>

                        <!-- Restaurato -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="restaurato" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Restaurato
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="restaurato" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="restaurato" name="restaurato" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Restaurato</span>
                                </label>
                            </div>
                        </div>

                        <!-- Validato -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="validato" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Validato
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="validato" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="validato" name="validato" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Validato</span>
                                </label>
                            </div>
                        </div>

                        <!-- Categoria Reperto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="categoria" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Categoria Reperto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="categoria" id="categoria" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                                    <option value="Geologico">Geologico</option>
                                    <option value="Paleontologico">Paleontologico</option>
                                    <option value="Biologico">Biologico</option>
                                    <option value="Antropologico">Antropologico</option>
                                    <option value="Archeologico">Archeologico</option>
                                </select>
                            </div>
                        </div>

                        <!-- Multiplo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="multiplo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Multiplo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="multiplo" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="multiplo" name="multiplo" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" onchange="toggleMolteplicita()">
                                    <span class="ml-2">Multiplo</span>
                                </label>
                            </div>
                        </div>

                        <!-- Molteplicità -->
                        <div class="md:flex mb-6 transition-all duration-500 ease-in-out overflow-hidden" id="molteplicita-container" style="height: 0; opacity: 0;">
                            <div class="md:w-1/3">
                                <label for="molteplicita" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Molteplicità
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="molteplicita" id="molteplicita" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Molteplicità" />
                            </div>
                        </div>

                        <!-- Script per gestire l'animazione del campo Molteplicità -->
                        <script>
                            function toggleMolteplicita() {
                                const multiploCheckbox = document.getElementById('multiplo');
                                const molteplicitaContainer = document.getElementById('molteplicita-container');
                                const molteplicitaInput = document.getElementById('molteplicita');

                                if (multiploCheckbox.checked) {
                                    // Mostra il campo Molteplicità con animazione
                                    molteplicitaContainer.style.height = molteplicitaContainer.scrollHeight + 'px';
                                    molteplicitaContainer.style.opacity = '1';
                                    molteplicitaInput.value = ''; // Cancella il valore se il campo era nascosto prima
                                } else {
                                    // Nascondi il campo Molteplicità con animazione e imposta il valore a 1
                                    molteplicitaContainer.style.height = '0';
                                    molteplicitaContainer.style.opacity = '0';
                                    molteplicitaInput.value = '1';
                                }
                            }

                            // Esegui la funzione al caricamento della pagina
                            document.addEventListener('DOMContentLoaded', toggleMolteplicita);
                        </script>

                    </div>

                    <!-- Continua con le altre sezioni -->
                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 3: Informazioni Tassonomiche -->
                    <h2 id='section3' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Informazioni Tassonomiche
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Olotipo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="olotipo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Olotipo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="olotipo" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="olotipo" name="olotipo" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Olotipo</span>
                                </label>
                            </div>
                        </div>

                        <!-- Riferimento Tassonomico -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="riferimento_tassonomico" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Riferimento Tassonomico
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="riferimento_tassonomico" id="riferimento_tassonomico" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Riferimento Tassonomico" />
                            </div>
                        </div>

                        <!-- Nome Comune -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="nome_comune" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Nome Comune
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="nome_comune" id="nome_comune" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Nome Comune" />
                            </div>
                        </div>

                        <!-- Taxon Group -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="taxon_group" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Taxon Group
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="taxon_group" id="taxon_group" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                                    <option value="V">Vertebrate</option>
                                    <option value="I">Invertebrate</option>
                                    <option value="P">Plant</option>
                                    <option value="M">Mammal</option>
                                    <option value="F">Fish</option>
                                    <option value="A">Amphibian</option>
                                    <option value="R">Reptile</option>
                                    <option value="B">Bird</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Riferimento Cronologico -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="riferimento_cronologico" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Riferimento Cronologico
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="riferimento_cronologico" id="riferimento_cronologico" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Riferimento Cronologico" />
                            </div>
                        </div>

                        <!-- Originale -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="originale" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Originale
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="originale" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="originale" name="originale" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Originale</span>
                                </label>
                            </div>
                        </div>

                        <!-- Fossile -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="fossile" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Fossile
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="fossile" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="fossile" name="fossile" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <span class="ml-2">Fossile</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Continua con le altre sezioni -->
                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 4: Acquisizione -->
                    <h2 id='section4' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Acquisizione
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Materiale -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="materiale" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Materiale
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="materiale" id="materiale" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Materiale" />
                            </div>
                        </div>

                        <!-- Modalità di Acquisizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="modalita_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Modalità di Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="modalita_acquisizione" id="modalita_acquisizione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Modalità di Acquisizione" />
                            </div>
                        </div>

                        <!-- Data di Acquisizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="data_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Data di Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="date" name="data_acquisizione" id="data_acquisizione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- Data di Inventariazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="data_inventario" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Data di Inventariazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="date" name="data_inventario" id="data_inventario" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- Proprietà -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="proprieta" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Proprietà
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="proprieta" id="proprieta" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Proprietà" />
                            </div>
                        </div>

                        <!-- Provenienza -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="provenienza" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Provenienza
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="provenienza" id="provenienza" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Provenienza" />
                            </div>
                        </div>

                        <!-- Fornitore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="fornitore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Fornitore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="fornitore" id="fornitore" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Fornitore" />
                            </div>
                        </div>
                    </div>

                    <!-- Continua con le altre sezioni -->
                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 5: Inventario -->
                    <h2 id='section5' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Inventario
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Codice di Patrimonio -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="codice_patrimonio" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Codice di Patrimonio
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="codice_patrimonio" id="codice_patrimonio" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" placeholder="Codice di Patrimonio" />
                            </div>
                        </div>

                        <!-- Catalogo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="id_catalogo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Catalogo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="id_catalogo" id="id_catalogo" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                                    @foreach ($catalogs as $catalog)
                                        <option value="{{ $catalog->id }}">{{ $catalog->catalogo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Catalogo (testo) -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="catalogo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Catalogo (Testo)
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="catalogo" id="catalogo" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- ICCD -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="iccd" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    ICCD
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="iccd" id="iccd" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- PATER -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="pater" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    PATER
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="pater" id="pater" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- Vecchio DB -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="vecchio_db" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Vecchio DB
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="vecchio_db" id="vecchio_db" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>
                    </div>

                    <!-- Continua con le altre sezioni -->
                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 6: Documentazione -->
                    <h2 id='section6' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Documentazione
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Cartellino Storico -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="cartellino_storico" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Cartellino Storico
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="cartellino_storico" id="cartellino_storico" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- Cartellino Attuale -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="cartellino_attuale" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Cartellino Attuale
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="cartellino_attuale" id="cartellino_attuale" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- Didascalia -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="didascalia" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Didascalia
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="didascalia" id="didascalia" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>

                        <!-- Foto Reperto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="foto_principale" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Foto Reperto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="file" name="foto_principale" id="foto_principale" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" />
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Bottoni di azione -->
                    <div class="pt-8 flex justify-center">
                        <button type="submit" class="btn-primary">
                            INSERISCI
                        </button>
                    </div>

                </form>
            </section>
            <!--/Fine area principale-->
        </div>
        <!--/Fine container-->

        <!-- Script per il menu e lo scrollspy -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script>
            // Toggle dropdown list
            var userMenuDiv = document.getElementById("userMenu");
            var userMenu = document.getElementById("userButton");

            var helpMenuDiv = document.getElementById("menu-content");
            var helpMenu = document.getElementById("menu-toggle");

            helpMenu.addEventListener('click', function(e) {
                e.stopPropagation(); // Previene la propagazione del click all'elemento `document`
                if (helpMenuDiv.classList.contains("hidden")) {
                    helpMenuDiv.classList.remove("hidden");
                    helpMenuDiv.classList.add("block");
                } else {
                    helpMenuDiv.classList.add("hidden");
                    helpMenuDiv.classList.remove("block");
                }
            });

            document.addEventListener('click', function(e) {
                if (!checkParent(e.target, helpMenuDiv) && !checkParent(e.target, helpMenu)) {
                    helpMenuDiv.classList.add("hidden");
                    helpMenuDiv.classList.remove("block");
                }
            });


            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

                // User Menu
                if (!checkParent(target, userMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, userMenu)) {
                        // click on the link
                        if (userMenuDiv.classList.contains("invisible")) {
                            userMenuDiv.classList.remove("invisible");
                        } else {
                            userMenuDiv.classList.add("invisible");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        userMenuDiv.classList.add("invisible");
                    }
                }

                // Help Menu
                if (!checkParent(target, helpMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, helpMenu)) {
                        // click on the link
                        if (helpMenuDiv.classList.contains("hidden")) {
                            helpMenuDiv.classList.remove("hidden");
                        } else {
                            helpMenuDiv.classList.add("hidden");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        helpMenuDiv.classList.add("hidden");
                    }
                }
            }

            function checkParent(t, elm) {
                while (t.parentNode) {
                    if (t == elm) {
                        return true;
                    }
                    t = t.parentNode;
                }
                return false;
            }

            // Scroll Spy
            var lastId,
                topMenu = $("#menu-content"),
                topMenuHeight = topMenu.outerHeight() + 169,
                // All list items
                menuItems = topMenu.find("a"),
                // Anchors corresponding to menu items
                scrollItems = menuItems.map(function() {
                    var item = $($(this).attr("href"));
                    if (item.length) {
                        return item;
                    }
                });

            // Bind click handler to menu items
            menuItems.click(function(e) {
                var href = $(this).attr("href"),
                    offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 420;
                $('html, body').stop().animate({
                    scrollTop: offsetTop
                }, 300);
                if (!helpMenuDiv.classList.contains("hidden")) {
                    helpMenuDiv.classList.add("hidden");
                }
                e.preventDefault();
            });

            // Bind to scroll
            $(window).scroll(function() {
                // Get container scroll position
                var fromTop = $(this).scrollTop() + topMenuHeight;

                // Get id of current scroll item
                var cur = scrollItems.map(function() {
                    if ($(this).offset().top < fromTop)
                        return this;
                });
                // Get the id of the current element
                cur = cur[cur.length - 1];
                var id = cur && cur.length ? cur[0].id : "";

                if (lastId !== id) {
                    lastId = id;
                    // Set/remove active class
                    menuItems
                        .parent().removeClass("font-bold border-yellow-600")
                        .end().filter("[href='#" + id + "']").parent().addClass("font-bold border-yellow-600");
                }
            });

            // Mostra il popup di successo
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Successo',
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif

            // Mostra il popup di errore
            @if ($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Errore',
                    html: '{!! implode('<br>', $errors->all()) !!}',
                });
            @endif
        </script>
    </div>
</x-app-layout>
