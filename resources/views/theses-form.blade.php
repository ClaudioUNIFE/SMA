{{-- resources/views/thesis-show.blade.php --}}
<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <div class="text-gray-900 tracking-wider leading-normal">
        <!-- Container principale -->
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-4 lg:pt-8 mt-8">
            <!-- Menu laterale -->
            <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
                <div class="block lg:hidden sticky inset-0">
                    <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 lg:bg-transparent border rounded border-gray-600 hover:border-yellow-600 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                </div>
                <div class="w-full sticky inset-0 hidden max-h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:6em;" id="menu-content">
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
                    Dettagli Tesi
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
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Museo</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->museum->nome_museo }}</span>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Deposito</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->deposit->collocazione }}, {{ $thesis->deposit->deposito }}, stanza numero: {{ $thesis->deposit->codice_stanza }}</span>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Autore</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->autore }}</span>
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
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Titolo</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->titolo }}</span>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Anno Accademico</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->anno_accademico }}</span>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Disciplina</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->disciplina }}</span>
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
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Relatore</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->relatore }}</span>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Correlatore</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->correlatore }}</span>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Contro Relatore</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->contro_relatore }}</span>
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
                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">File Tesi</span>
                        </div>
                        <div class="md:w-2/3">
                            <a href="{{ $thesis->percorso_file }}" class="text-blue-600 hover:text-blue-800 underline">{{ $thesis->percorso_file }}</a>
                        </div>
                    </div>

                    <div class="md:flex mb-6">
                        <div class="md:w-1/3">
                            <span class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4">Note</span>
                        </div>
                        <div class="md:w-2/3">
                            <span class="block text-gray-800">{{ $thesis->note }}</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Script per il menu e lo scrollspy -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
            /* Menu Toggle Script */
            var helpMenuDiv = document.getElementById("menu-content");
            var helpMenu = document.getElementById("menu-toggle");

            document.onclick = check;

            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);

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
                scrollItems = menuItems.map(function() {
                    var item = $($(this).attr("href"));
                    if (item.length) {
                        return item;
                    }
                });

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
        </script>
    </div>
</x-app-layout>