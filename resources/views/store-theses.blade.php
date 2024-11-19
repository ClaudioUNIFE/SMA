<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="text-gray-900 tracking-wider leading-normal">
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
                                <span class="pb-1 md:pb-0 text-sm">Dettagli Tesi</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section3' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">Relatori</span>
                            </a>
                        </li>
                        <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                            <a href='#section4' class="block pl-4 align-middle text-white no-underline hover:text-yellow-600">
                                <span class="pb-1 md:pb-0 text-sm">File e Note</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Area principale -->
            <section class="w-full lg:w-4/5">
                <!-- Titolo -->
                <h1 class="flex items-center font-sans font-bold break-normal text-white px-2 text-xl mt-12 lg:mt-0 md:text-2xl">
                    Aggiungi Nuova Tesi
                </h1>

                <!-- Divider -->
                <hr class="bg-gray-300 my-12">

                <!-- Inizio del form -->
                <form action="{{ route('theses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Sezione 1: Informazioni Generali -->
                    <h2 id='section1' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Informazioni Generali
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Museo -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="id_museo" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Museo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="id_museo" id="id_museo" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                                    @foreach ($museums as $museum)
                                        <option value="{{ $museum->id }}">{{ $museum->nome_museo }}</option>
                                    @endforeach
                                </select>
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

                        <!-- Autore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="autore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Autore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="autore" id="autore" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 2: Dettagli Tesi -->
                    <h2 id='section2' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Dettagli Tesi
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
                                <input type="text" name="titolo" id="titolo" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                            </div>
                        </div>

                        <!-- Anno Accademico -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="anno_accademico" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Anno Accademico
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="anno_accademico" id="anno_accademico" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                            </div>
                        </div>

                        <!-- Disciplina -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="disciplina" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Disciplina
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="disciplina" id="disciplina" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 3: Relatori -->
                    <h2 id='section3' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        Relatori
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- Relatore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="relatore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Relatore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="relatore" id="relatore" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
                            </div>
                        </div>

                        <!-- Correlatore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="correlatore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Correlatore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="correlatore" id="correlatore" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>

                        <!-- Contro Relatore -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="contro_relatore" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    Contro Relatore
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="text" name="contro_relatore" id="contro_relatore" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white">
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Sezione 4: File e Note -->
                    <h2 id='section4' class="font-sans font-bold break-normal text-white px-2 pb-8 text-xl">
                        File e Note
                    </h2>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <!-- File Tesi -->
                        <div class="md:flex mb-6">
                            <div class="md:w-1/3">
                                <label for="percorso_file" class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">
                                    File Tesi
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="url" name="percorso_file" id="percorso_file" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white" required>
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
                                <textarea name="note" id="note" class="block w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none focus:bg-white"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="bg-gray-300 my-12">

                    <!-- Bottoni di azione -->
                    <div class="pt-8 flex justify-center">
                        <button type="submit" class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            Salva
                        </button>
                    </div>

                </form>
            </section>
            <!--/Fine area principale-->
        </div>

        <!-- Script per il menu e lo scrollspy -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script>
            // Toggle dropdown list
            var userMenuDiv = document.getElementById("userMenu");
            var userMenu = document.getElementById("userButton");

            var helpMenuDiv = document.getElementById("menu-content");
            var helpMenu = document.getElementById("menu-toggle");

            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

                // User Menu
                if (!checkParent(target, userMenuDiv)) {
                    if (checkParent(target, userMenu)) {
                        if (userMenuDiv.classList.contains("invisible")) {
                            userMenuDiv.classList.remove("invisible");
                        } else {
                            userMenuDiv.classList.add("invisible");
                        }
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                }

                // Help Menu
                if (!checkParent(target, helpMenuDiv)) {
                    if (checkParent(target, helpMenu)) {
                        if (helpMenuDiv.classList.contains("hidden")) {
                            helpMenuDiv.classList.remove("hidden");
                        } else {
                            helpMenuDiv.classList.add("hidden");
                        }
                    } else {
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
                topMenuHeight = topMenu.outerHeight() + 1,
                menuItems = topMenu.find("a"),
                // Anchors
                scrollItems = menuItems.map(function() {
                    var item = $($(this).attr("href"));
                    if (item.length) {
                        return item;
                    }
                });

            // Bind click
            menuItems.click(function(e) {
                var href = $(this).attr("href"),
                    offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 113;
                $('html, body').stop().animate({
                    scrollTop: offsetTop
                }, 300);
                if (!helpMenuDiv.classList.contains("hidden")) {
                    helpMenuDiv.classList.add("hidden");
                }
                e.preventDefault();
            });

            // Bind
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
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Successo',
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif

            // Errore
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
