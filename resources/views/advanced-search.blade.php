<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="text-gray-900 tracking-wider leading-normal">
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-4 lg:pt-8 mt-8">
            <!-- Menu laterale -->
            <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
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
                                <span class="pb-1 md:pb-0 text-sm">Informazioni Tassonomiche</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section3' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Collocazione</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section4' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Acquisizione</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section5' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Attributi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Area principale -->
            <section class="w-full lg:w-4/5">
                <h1 class="flex items-center font-sans font-bold break-normal text-white px-2 text-2xl mt-12 lg:mt-0 md:text-2xl">
                    Ricerca Avanzata
                </h1>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Inizio del form -->
                <form action="{{ route('finds.advancedSearch') }}" method="GET">
                    <!-- Sezione 1: Informazioni Generali -->
                    <h2 id='section1' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Informazioni Generali
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Descrizione Reperto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="descrizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Descrizione Reperto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="descrizione" id="descrizione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                        <!-- Categoria -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="categoria" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Categoria
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="categoria" id="categoria" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                                    <option value="">Seleziona</option>
                                    <option value="Geologico">Geologico</option>
                                    <option value="Paleontologico">Paleontologico</option>
                                    <option value="Biologico">Biologico</option>
                                    <option value="Antropologico">Antropologico</option>
                                    <option value="Archeologico">Archeologico</option>
                                </select>
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
                                <input type="text" name="note" id="note" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
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
                                    <span class="ml-2"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 2: Informazioni Tassonomiche -->
                    <h2 id='section2' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Informazioni Tassonomiche
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Riferimento Tassonomico -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="riferimento_tassonomico" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Riferimento Tassonomico
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="riferimento_tassonomico" id="riferimento_tassonomico" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
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
                                <input type="text" name="nome_comune" id="nome_comune" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
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
                                <select name="taxon_group" id="taxon_group" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                                    <option value="">Seleziona</option>
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
                                    <span class="ml-2"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 3: Collocazione -->
                    <h2 id='section3' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Collocazione
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Collocazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="collocazione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Collocazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="collocazione" id="collocazione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                        <!-- Codice Stanza -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="codice_stanza" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Codice Stanza
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="codice_stanza" id="codice_stanza" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                        <!-- Deposito -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="deposito" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Deposito
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="deposito" id="deposito" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
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
                                <label for="modalita_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Modalità di Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="modalita_acquisizione" id="modalita_acquisizione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                        <!-- Data Acquisizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="data_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Data Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="date" name="data_acquisizione" id="data_acquisizione" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
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
                                <input type="text" name="fornitore" id="fornitore" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
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
                                <input type="text" name="provenienza" id="provenienza" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
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
                                <input type="text" name="proprieta" id="proprieta" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 5: Attributi -->
                    <h2 id='section5' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Attributi
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
                                <input type="text" name="materiale" id="materiale" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                        <!-- Molteplicità -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="molteplicita" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Molteplicità
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="number" name="molteplicita" id="molteplicita" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                    </div>

                    <!-- Bottoni di azione -->
                    <div class="pt-8 flex justify-center">
                        <button type="submit" class="btn-primary">
                            Cerca
                        </button>
                    </div>
                </form>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Sezione per visualizzare i risultati della ricerca -->
                @if(isset($finds) && count($finds) > 0)
                <h3 class="flex items-center font-sans font-bold break-normal text-white px-2 text-xl mt-12 lg:mt-0 md:text-xl">
                    Risultati della Ricerca
                </h3>
                <div class="p-8 mt-6 lg:mt-0 rounded shadow" style="background-color: #2c3e50;">
                    <!-- Form per esportare in Excel -->
                    <form action="{{ route('finds.export') }}" method="POST" class="mb-6">
                        @csrf
                        @foreach($ids as $id)
                            <input type="hidden" name="ids[]" value="{{ $id }}">
                        @endforeach
                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary">
                                Esporta in Excel
                            </button>
                        </div>
                    </form>

                    <!-- Griglia dei risultati -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($finds as $find)
                        <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                            <h4 class="text-lg font-bold mb-3">ID: {{ $find->id }}</h4>
                            <p><strong>Descrizione:</strong> {{ $find->descrizione }}</p>
                            <p><strong>Categoria:</strong> {{ $find->categoria }}</p>
                            <p><strong>Nome Comune:</strong> {{ $find->nome_comune }}</p>
                            <p><strong>Riferimento Tassonomico:</strong> {{ $find->riferimento_tassonomico }}</p>
                            <p><strong>Materiale:</strong> {{ $find->materiale }}</p>
                            <p><strong>Modalità Acquisizione:</strong> {{ $find->modalita_acquisizione }}</p>
                            <p><strong>Fornitore:</strong> {{ $find->fornitore }}</p>
                            <p><strong>Provenienza:</strong> {{ $find->provenienza }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @elseif(isset($finds))
                <p class="text-center mt-5">Nessun risultato trovato.</p>
                @endif

            </section>
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
                e.stopPropagation();
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
                menuItems = topMenu.find("a"),
                // Anchors
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
                var fromTop = $(this).scrollTop() + topMenuHeight;
                var cur = scrollItems.map(function() {
                    if ($(this).offset().top < fromTop)
                        return this;
                });
                cur = cur[cur.length - 1];
                var id = cur && cur.length ? cur[0].id : "";
                if (lastId !== id) {
                    lastId = id;
                    menuItems
                        .parent().removeClass("font-bold border-yellow-600")
                        .end().filter("[href='#" + id + "']").parent().addClass("font-bold border-yellow-600");
                }
            });

            // Successo
            @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Successo',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
            @endif

            // Errore
            @if($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Errore',
                html: '{!! implode(' <br> ', $errors->all()) !!}',
            });
            @endif
        </script>
    </div>
</x-app-layout>
