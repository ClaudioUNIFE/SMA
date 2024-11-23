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
                    Visualizzazione Allegato
                </h1>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Sezione 1: Informazioni Generali -->
                <h2 id='section1' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                    Informazioni Generali
                </h2>
                <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Link
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800"><a href="{{ $attached->link }}" class="text-blue-500 hover:underline">{{ $attached->link }}</a></p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Tipo Acquisizione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $attached->tipo_acquisizione }}</p>
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
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Titolo
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->titolo }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Autore
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->autore }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Soggetto
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->soggetto }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Descrizione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->descrizione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Editore
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->editore }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Autore di Contributo
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->autore_di_contributo }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Data
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->data }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Tipo
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->tipo }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Formato
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->formato }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Identificatore
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->identificatore }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Fonte
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->fonte }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Lingua
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->lingua }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Relazione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->relazione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Copertura
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->copertura }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Gestione dei Diritti
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $metadata->gestione_dei_diritti }}</p>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr class="bg-gray-300 my-12"></tr>

                <!-- Sezione 3: Paradati -->
                <h2 id='section3' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                    Paradati
                </h2>
                <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Stato Corrente
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->stato_corrente }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Responsabile Scelta Reperto
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->responsabile_scelta_reperto }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Scheda Validata
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->scheda_validata ? 'Sì' : 'No' }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Validatore Scheda
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->validatore_scheda }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Note
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->note }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Responsabile Acquisizione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->responsabile_acquisizione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Operatore
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->operatore }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Tipo Superfice
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->tipo_superfice }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Descrizione Complessità
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->descrizione_complessita }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Fotocamera
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->fotocamera }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Impostazioni
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->impostazioni }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Obiettivo
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->obiettivo }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Illuminazione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->illuminazione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Light Box
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->light_box ? 'Sì' : 'No' }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Tipo Supporto
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->tipo_supporto }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Numero Scatti
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->numero_scatti }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Software
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->software }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Output
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->output }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Strumentazione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->strumentazione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Risoluzione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->risoluzione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Modalità Scansione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->modalita_scansione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Ingrandimento
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->ingrandimento }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Luminosità
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->luminosita }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Fibra Ottica
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->fibra_ottica ? 'Sì' : 'No' }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Tiling
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->tiling ? 'Sì' : 'No' }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Scala
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->scala }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Data Inizio
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->data_inizio }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Data Fine
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->data_fine }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Tempo Totale
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->tempo_totale }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Luogo Acquisizione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->luogo_acquisizione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Temperatura
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->temperatura }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Condizioni Iniziali Conservazione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->condizioni_iniziali_conservazione }}</p>
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                Condizioni Finali Conservazione
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-gray-800">{{ $paradata->condizioni_finali_conservazione }}</p>
                        </div>
                    </div>
                    <!-- Altri campi dei paradati qui -->
                </div>
            </section>
        </div>

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