<x-app-layout>
    {{-- Include i tuoi file CSS --}}
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/standard.css') }}"> -->

    {{-- Contenuto principale --}}
    <div class="text-gray-900 tracking-wider leading-normal">

        <!-- Container principale -->
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
                                <span class="pb-1 md:pb-0 text-sm">Metadati</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section3' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Paradati</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Area principale -->
            <section class="w-full lg:w-4/5">
                <!-- Titolo -->
                <h1 class="flex items-center font-sans font-bold break-normal text-white px-2 text-2xl mt-12 lg:mt-0 md:text-2xl">
                    Modifica Allegato
                </h1>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Inizio del form -->
                <form action="{{ route('attached.update', ['id' => $attached->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Sezione 1: Informazioni Generali -->
                    <h2 id='section1' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Informazioni Generali
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Link -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="link" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Link
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="link" id="link" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Inserisci il link" value="{{ old('link', $attached->link) }}" required />
                            </div>
                        </div>
                        <!-- Tipo Acquisizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tipo_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tipo Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="tipo_acquisizione" id="tipo_acquisizione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Tipo Acquisizione" value="{{ old('tipo_acquisizione', $attached->tipo_acquisizione) }}" required />
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 2: Metadati -->
                    <h2 id='section2' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Metadati
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Titolo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="titolo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Titolo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="titolo" id="titolo" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Titolo" value="{{ old('titolo', $metadata->titolo) }}" required />
                            </div>
                        </div>
                        <!-- Autore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="autore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Autore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="autore" id="autore" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Autore" value="{{ old('autore', $metadata->autore) }}" />
                            </div>
                        </div>
                        <!-- Soggetto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="soggetto" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Soggetto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="soggetto" id="soggetto" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Soggetto" value="{{ old('soggetto', $metadata->soggetto) }}" />
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
                                <textarea name="descrizione" id="descrizione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Descrizione">{{ old('descrizione', $metadata->descrizione) }}</textarea>
                            </div>
                        </div>
                        <!-- Editore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="editore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Editore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="editore" id="editore" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Editore" value="{{ old('editore', $metadata->editore) }}" />
                            </div>
                        </div>
                        <!-- Autore di Contributo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="autore_di_contributo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Autore di Contributo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="autore_di_contributo" id="autore_di_contributo" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Autore di Contributo" value="{{ old('autore_di_contributo', $metadata->autore_di_contributo) }}" />
                            </div>
                        </div>
                        <!-- Data -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="data" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Data
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="date" name="data" id="data" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" value="{{ old('data', $metadata->data) }}" />
                            </div>
                        </div>
                        <!-- Tipo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tipo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tipo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="tipo" id="tipo" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Tipo" value="{{ old('tipo', $metadata->tipo) }}" />
                            </div>
                        </div>
                        <!-- Formato -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="formato" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Formato
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="formato" id="formato" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Formato" value="{{ old('formato', $metadata->formato) }}" />
                            </div>
                        </div>
                        <!-- Identificatore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="identificatore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Identificatore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="identificatore" id="identificatore" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Identificatore" value="{{ old('identificatore', $metadata->identificatore) }}" />
                            </div>
                        </div>
                        <!-- Fonte -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="fonte" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Fonte
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="fonte" id="fonte" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Fonte" value="{{ old('fonte', $metadata->fonte) }}" />
                            </div>
                        </div>
                        <!-- Lingua -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="lingua" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Lingua
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="lingua" id="lingua" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Lingua" value="{{ old('lingua', $metadata->lingua) }}" />
                            </div>
                        </div>
                        <!-- Relazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="relazione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Relazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="relazione" id="relazione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Relazione" value="{{ old('relazione', $metadata->relazione) }}" />
                            </div>
                        </div>
                        <!-- Copertura -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="copertura" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Copertura
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="copertura" id="copertura" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Copertura" value="{{ old('copertura', $metadata->copertura) }}" />
                            </div>
                        </div>
                        <!-- Gestione dei Diritti -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="gestione_dei_diritti" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Gestione dei Diritti
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="gestione_dei_diritti" id="gestione_dei_diritti" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Gestione dei Diritti" value="{{ old('gestione_dei_diritti', $metadata->gestione_dei_diritti) }}" />
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 3: Paradati -->
                    <h2 id='section3' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Paradati
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Stato Corrente -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="stato_corrente" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Stato Corrente
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="stato_corrente" id="stato_corrente" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Stato Corrente" value="{{ old('stato_corrente', $paradata->stato_corrente) }}" />
                            </div>
                        </div>
                        <!-- Responsabile Scelta Reperto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="responsabile_scelta_reperto" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Responsabile Scelta Reperto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="responsabile_scelta_reperto" id="responsabile_scelta_reperto" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Responsabile Scelta Reperto" value="{{ old('responsabile_scelta_reperto', $paradata->responsabile_scelta_reperto) }}" />
                            </div>
                        </div>
                        <!-- Scheda Validata -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="scheda_validata" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Scheda Validata
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="scheda_validata" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="scheda_validata" id="scheda_validata" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" {{ old('scheda_validata', $paradata->scheda_validata) ? 'checked' : '' }}>
                                    <span class="ml-2"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Validatore Scheda -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="validatore_scheda" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Validatore Scheda
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="validatore_scheda" id="validatore_scheda" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Validatore Scheda" value="{{ old('validatore_scheda', $paradata->validatore_scheda) }}" />
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
                                <textarea name="note" id="note" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Note">{{ old('note', $paradata->note) }}</textarea>
                            </div>
                        </div>
                        <!-- Responsabile Acquisizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="responsabile_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Responsabile Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="responsabile_acquisizione" id="responsabile_acquisizione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Responsabile Acquisizione" value="{{ old('responsabile_acquisizione', $paradata->responsabile_acquisizione) }}" />
                            </div>
                        </div>
                        <!-- Operatore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="operatore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Operatore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="operatore" id="operatore" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Operatore" value="{{ old('operatore', $paradata->operatore) }}" />
                            </div>
                        </div>
                        <!-- Tipo Superfice -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tipo_superfice" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tipo Superficie
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="tipo_superfice" id="tipo_superfice" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Tipo Superficie" value="{{ old('tipo_superfice', $paradata->tipo_superfice) }}" />
                            </div>
                        </div>
                        <!-- Descrizione Complessità -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="descrizione_complessita" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Descrizione Complessità
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea name="descrizione_complessita" id="descrizione_complessita" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Descrizione Complessità">{{ old('descrizione_complessita', $paradata->descrizione_complessita) }}</textarea>
                            </div>
                        </div>
                        <!-- Fotocamera -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="fotocamera" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Fotocamera
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="fotocamera" id="fotocamera" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Fotocamera" value="{{ old('fotocamera', $paradata->fotocamera) }}" />
                            </div>
                        </div>
                        <!-- Impostazioni -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="impostazioni" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Impostazioni
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="impostazioni" id="impostazioni" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Impostazioni" value="{{ old('impostazioni', $paradata->impostazioni) }}" />
                            </div>
                        </div>
                        <!-- Obiettivo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="obiettivo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Obiettivo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="obiettivo" id="obiettivo" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Obiettivo" value="{{ old('obiettivo', $paradata->obiettivo) }}" />
                            </div>
                        </div>
                        <!-- Illuminazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="illuminazione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Illuminazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="illuminazione" id="illuminazione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Illuminazione" value="{{ old('illuminazione', $paradata->illuminazione) }}" />
                            </div>
                        </div>
                        <!-- Light Box -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="light_box" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Light Box
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="light_box" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="light_box" id="light_box" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" {{ old('light_box', $paradata->light_box) ? 'checked' : '' }}>
                                    <span class="ml-2"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Tipo Supporto -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tipo_supporto" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tipo Supporto
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="tipo_supporto" id="tipo_supporto" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Tipo Supporto" value="{{ old('tipo_supporto', $paradata->tipo_supporto) }}" />
                            </div>
                        </div>
                        <!-- Numero Scatti -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="numero_scatti" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Numero Scatti
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="number" name="numero_scatti" id="numero_scatti" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Numero Scatti" value="{{ old('numero_scatti', $paradata->numero_scatti) }}" />
                            </div>
                        </div>
                        <!-- Software -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="software" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Software
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="software" id="software" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Software" value="{{ old('software', $paradata->software) }}" />
                            </div>
                        </div>
                        <!-- Output -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="output" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Output
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="output" id="output" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Output" value="{{ old('output', $paradata->output) }}" />
                            </div>
                        </div>
                        <!-- Strumentazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="strumentazione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Strumentazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="strumentazione" id="strumentazione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Strumentazione" value="{{ old('strumentazione', $paradata->strumentazione) }}" />
                            </div>
                        </div>
                        <!-- Risoluzione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="risoluzione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Risoluzione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="risoluzione" id="risoluzione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Risoluzione" value="{{ old('risoluzione', $paradata->risoluzione) }}" />
                            </div>
                        </div>
                        <!-- Modalità Scansione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="modalita_scansione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Modalità Scansione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="modalita_scansione" id="modalita_scansione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Modalità Scansione" value="{{ old('modalita_scansione', $paradata->modalita_scansione) }}" />
                            </div>
                        </div>
                        <!-- Ingrandimento -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="ingrandimento" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Ingrandimento
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="ingrandimento" id="ingrandimento" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Ingrandimento" value="{{ old('ingrandimento', $paradata->ingrandimento) }}" />
                            </div>
                        </div>
                        <!-- Luminosità -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="luminosita" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Luminosità
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="luminosita" id="luminosita" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Luminosità" value="{{ old('luminosita', $paradata->luminosita) }}" />
                            </div>
                        </div>
                        <!-- Fibra Ottica -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="fibra_ottica" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Fibra Ottica
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="fibra_ottica" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="fibra_ottica" id="fibra_ottica" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" {{ old('fibra_ottica', $paradata->fibra_ottica) ? 'checked' : '' }}>
                                    <span class="ml-2"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Tiling -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tiling" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tiling
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="hidden" name="tiling" value="0">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="tiling" id="tiling" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" {{ old('tiling', $paradata->tiling) ? 'checked' : '' }}>
                                    <span class="ml-2"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Scala -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="scala" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Scala
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="scala" id="scala" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Scala" value="{{ old('scala', $paradata->scala) }}" />
                            </div>
                        </div>
                        <!-- Data Inizio -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="data_inizio" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Data Inizio
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="date" name="data_inizio" id="data_inizio" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" value="{{ old('data_inizio', $paradata->data_inizio) }}" />
                            </div>
                        </div>
                        <!-- Data Fine -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="data_fine" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Data Fine
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="date" name="data_fine" id="data_fine" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" value="{{ old('data_fine', $paradata->data_fine) }}" />
                            </div>
                        </div>
                        <!-- Tempo Totale -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="tempo_totale" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Tempo Totale
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="tempo_totale" id="tempo_totale" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Tempo Totale" value="{{ old('tempo_totale', $paradata->tempo_totale) }}" />
                            </div>
                        </div>
                        <!-- Luogo Acquisizione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="luogo_acquisizione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Luogo Acquisizione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="luogo_acquisizione" id="luogo_acquisizione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Luogo Acquisizione" value="{{ old('luogo_acquisizione', $paradata->luogo_acquisizione) }}" />
                            </div>
                        </div>
                        <!-- Temperatura -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="temperatura" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Temperatura
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="number" name="temperatura" id="temperatura" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Temperatura in °C" step="0.1" value="{{ old('temperatura', $paradata->temperatura) }}" />
                            </div>
                        </div>
                        <!-- Condizioni Iniziali Conservazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="condizioni_iniziali_conservazione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Condizioni Iniziali Conservazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea name="condizioni_iniziali_conservazione" id="condizioni_iniziali_conservazione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Condizioni Iniziali di Conservazione">{{ old('condizioni_iniziali_conservazione', $paradata->condizioni_iniziali_conservazione) }}</textarea>
                            </div>
                        </div>
                        <!-- Condizioni Finali Conservazione -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="condizioni_finali_conservazione" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Condizioni Finali Conservazione
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea name="condizioni_finali_conservazione" id="condizioni_finali_conservazione" class="bg-gray-200 border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:bg-white" placeholder="Condizioni Finali di Conservazione">{{ old('condizioni_finali_conservazione', $paradata->condizioni_finali_conservazione) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Pulsante di invio -->
                    <div class="flex justify-end mt-6">
                        <button type="submit" class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Salva
                        </button>
                    </div>
                </form>
            </section>
        </div>

        <!-- Script per il menu e gli alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script>
            // Toggle menu
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

            // ScrollSpy
            var lastId,
                topMenu = $("#menu-content"),
                topMenuHeight = topMenu.outerHeight() + 169,
                menuItems = topMenu.find("a"),
                scrollItems = menuItems.map(function() {
                    var item = $($(this).attr("href"));
                    if (item.length) {
                        return item;
                    }
                });

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
