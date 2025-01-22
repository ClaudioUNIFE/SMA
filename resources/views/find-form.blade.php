{{-- resources/views/find-form.blade.php --}}
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
        <div class="w-full sticky inset-0 hidden max-h-128 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent shadow lg:shadow-none lg:bg-transparent z-20" style="top:6em;" id="menu-content">
            <ul class="list-reset py-2 md:py-0">
                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent font-bold border-yellow-600">
                    <a href='#section1' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Informazioni Generali</span>
                    </a>
                </li>
                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                    <a href='#section2' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Stato</span>
                    </a>
                </li>
                <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                    <a href='#section3' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                        <span class="pb-1 md:pb-0 text-sm">Attributi</span>
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
            Visualizzazione Reperto
        </h1>

        <!-- Divider -->
        <hr class="bg-gray-300 my-12">

        <!-- Sezione 1: Informazioni Generali -->
        <h2 id='section1' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
            Informazioni Generali
        </h2>
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <!-- Museo di Riferimento -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Museo di Riferimento
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $museum->nome_museo }}</p>
                </div>
            </div>
            <!-- Codice SMA -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Codice SMA Leonardi
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->id_vecchio }}</p>
                </div>
            </div>
            <!-- Descrizione -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Descrizione
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->descrizione }}</p>
                </div>
            </div>
            <!-- Collezione -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Collezione
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $collection->nome_collezione }}</p>
                </div>
            </div>
            <!-- Categoria Reperto -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Categoria Reperto
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->categoria }}</p>
                </div>
            </div>
            <!-- Multiplo -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Multiplo
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->multiplo ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Molteplicità -->
            @if($find->multiplo)
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Molteplicità
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->molteplicita }}</p>
                </div>
            </div>
            @endif
            <!-- Luogo di conservazione -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Luogo di conservazione
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $deposit->collocazione }}, {{ $deposit->deposito }}, stanza numero: {{ $deposit->codice_stanza }}</p>
                </div>
            </div>
            <!-- Note -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Note
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->note }}</p>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="bg-gray-300 my-12">

        <!-- Sezione 2: Stato -->
        <h2 id='section2' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
            Stato
        </h2>
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <!-- Esposto -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Esposto
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->esposto ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Catalogato -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Catalogato
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->catalogato ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Digitalizzato -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Digitalizzato
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->digitalizzato ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Restaurato -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Restaurato
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->restaurato ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Validato -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Validato
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->validato ? 'Sì' : 'No' }}</p>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="bg-gray-300 my-12">

        <!-- Sezione 3: Attributi -->
        <h2 id='section3' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
            Attributi
        </h2>
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <!-- Olotipo -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Olotipo
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->olotipo ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Materiale -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Materiale
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->materiale }}</p>
                </div>
            </div>
            <!-- Riferimento Tassonomico -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Riferimento Tassonomico
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->riferimento_tassonomico }}</p>
                </div>
            </div>
            <!-- Nome Comune -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Nome Comune
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->nome_comune }}</p>
                </div>
            </div>
            <!-- Taxon Group -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Taxon Group
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">
                        @php
                            $taxonGroups = [
                                'V' => 'Vertebrate',
                                'I' => 'Invertebrate',
                                'P' => 'Plant',
                                'M' => 'Mammal',
                                'F' => 'Fish',
                                'A' => 'Amphibian',
                                'R' => 'Reptile',
                                'B' => 'Bird',
                                'O' => 'Other',
                            ];
                        @endphp
                        {{ $taxonGroups[$find->taxon_group] ?? $find->taxon_group }}
                    </p>
                </div>
            </div>
            <!-- Riferimento Cronologico -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Riferimento Cronologico
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->riferimento_cronologico }}</p>
                </div>
            </div>
            <!-- Provenienza -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Provenienza
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->provenienza }}</p>
                </div>
            </div>
            <!-- Originale -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Originale
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->originale ? 'Sì' : 'No' }}</p>
                </div>
            </div>
            <!-- Fossile -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Fossile
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->fossile ? 'Sì' : 'No' }}</p>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="bg-gray-300 my-12">

        <!-- Sezione 4: Acquisizione -->
        <h2 id='section4' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
            Acquisizione
        </h2>
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <!-- Modalità di Acquisizione -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Modalità di Acquisizione
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->modalita_acquisizione }}</p>
                </div>
            </div>
            <!-- Data di Acquisizione -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Data di Acquisizione
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->data_acquisizione }}</p>
                </div>
            </div>
            <!-- Data di Inventariazione -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Data di Inventariazione
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->data_inventario }}</p>
                </div>
            </div>
            <!-- Proprietà -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Proprietà
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->proprieta }}</p>
                </div>
            </div>
            <!-- Fornitore -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Fornitore
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->fornitore }}</p>
                </div>
            </div>
        </div>

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
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Codice di Patrimonio
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->codice_patrimonio }}</p>
                </div>
            </div>
            <!-- Catalogo -->
            <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Catalogo
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $find->catalogo }}</p>
                        </div>
                    </div>
            <!-- ICCD -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        ICCD
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->iccd }}</p>
                </div>
            </div>
            <!-- PATER -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        PATER
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->pater }}</p>
                </div>
            </div>
            <!-- Vecchio DB -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Vecchio DB
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->vecchio_db }}</p>
                </div>
            </div>
        </div>

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
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Cartellino Storico
                    </label>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-800">{{ $find->cartellino_storico }}</p>
                </div>
            </div>
            <!-- Cartellino Attuale -->
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                        Cartellino Attuale
                    </label>
                </div>
            <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $find->cartellino_attuale }}</p>
                        </div>
                    </div>
                    <!-- Codice Siglatura -->
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Codice Siglatura
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $find->didascalia }}</p>
                        </div>
                    </div>
                    <!-- Foto Reperto -->
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Foto Reperto
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            @if($find->foto_principale)
                                <img src="{{ asset('storage/' . $find->foto_principale) }}" alt="Foto reperto" class="max-w-full h-auto">
                            @else
                                <p class="text-gray-800">Nessuna foto disponibile</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Bottoni di azione -->
                <div class="pt-8 flex justify-center">
                    <div class="flex space-x-4">
                        <a href="{{ route('attached.manage', $find->id) }}" class="btn-primary">Gestisci Allegati</a>
                        <a href="{{ route('managexits.show', $find->id) }}" class="btn-primary">Gestisci Uscite</a>
                    </div>
                </div>

            </section>
            <!--/Fine area principale-->
        </div>
        <!--/Fine container-->

        <!-- Script per il menu e lo scrollspy -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script>
            // Toggle dropdown list
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
        </script>
    </div>
</x-app-layout>
