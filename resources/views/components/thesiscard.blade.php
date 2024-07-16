<div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8" style="grid-template-columns: repeat(4, minmax(0, 1fr)); margin:10px">
    <a href="{{ route('theses.showform',$thesis->id) }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="outline-color: #ffa3ac">
        <div>
            @if($thesis->percorso_file)
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <img src="{{ asset('storage/theses/' . $thesis->percorso_file) }}" alt="Thesis Image"/>
                </p>
            @endif

            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $thesis->titolo }}</h2>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <strong>Autore:</strong> {{ $thesis->autore }}
            </p>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <strong>Anno Accademico:</strong> {{ $thesis->anno_accademico }}
            </p>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <strong>Disciplina:</strong> {{ $thesis->disciplina }}
            </p>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <strong>Relatore:</strong> {{ $thesis->relatore }}
            </p>
        </div>
    </a>
</div>
