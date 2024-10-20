<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Messaggio di login -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Sezione con i tre pulsanti sotto il messaggio "You're logged in!" -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-10 lg:px-12">
            <div class="flex justify-center">
                <div style="margin: 0 10px;"> <!-- Margine per distanziare i pulsanti -->
                    <a href="{{ route('find.showlist') }}" class="bg-gray-800 hover:bg-white text-white font-bold py-4 px-8 rounded-lg shadow-md transition duration-200 ease-in-out text-center inline-block">
                        Consulta i reperti
                    </a>
                </div>
                <div style="margin: 0 10px;"> <!-- Margine per distanziare i pulsanti -->
                    <a href="{{ route('finds.showadvancedSearch') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-8 rounded-lg shadow-md transition duration-200 ease-in-out text-center inline-block">
                        Ricerca avanzata
                    </a>
                </div>
                <div style="margin: 0 10px;"> <!-- Margine per distanziare i pulsanti -->
                    <a href="{{ route('find.showstore') }}" class="bg-gray-800 hover:bg-white text-white font-bold py-4 px-8 rounded-lg shadow-md transition duration-200 ease-in-out text-center inline-block">
                        Inserisci i reperti
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script per i grafici -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between">

                    <!-- Contenitore per il primo grafico (Validati) -->
                    <div class="text-center" style="width: 50%;">
                        <h2 class="text-lg font-bold mb-4 text-gray-700 dark:text-gray-300">Grafico Reperti Validati</h2>
                        <div style="width: 100%; max-width: 300px; margin: 0 auto;">
                            <canvas id="validatedChart"></canvas>
                        </div>
                    </div>

                    <!-- Contenitore per il secondo grafico (Molteplicità) -->
                    <div class="text-center" style="width: 50%;">
                        <h2 class="text-lg font-bold mb-4 text-gray-700 dark:text-gray-300">Grafico Molteplicità Reperti</h2>
                        <div style="width: 100%; max-width: 500px; margin: 0 auto;">
                            <canvas id="multiplicityChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Script per aggiornare i grafici -->
                <script>
                    async function updateCharts() {
                        const response = await fetch('dashboard/data');
                        const data = await response.json();

                        validatedChart.data.datasets[0].data = [data.validatedFinds, data.totalFinds - data.validatedFinds];
                        validatedChart.update();

                        multiplicityChart.data.datasets[0].data = [data.totalReperti, data.totalMolteplicita];
                        multiplicityChart.update();
                    }

                    var validatedCtx = document.getElementById('validatedChart').getContext('2d');
                    var validatedChart = new Chart(validatedCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Validati', 'Non Validati'],
                            datasets: [{
                                label: 'Reperti Validati',
                                data: [0, 0],
                                backgroundColor: ['#36A2EB', '#FF6384'],
                            }]
                        }
                    });

                    var multiplicityCtx = document.getElementById('multiplicityChart').getContext('2d');
                    var multiplicityChart = new Chart(multiplicityCtx, {
                        type: 'bar',
                        data: {
                            labels: ['Numero Reperti', 'Molteplicità'],
                            datasets: [{
                                label: 'Conteggio Reperti',
                                data: [0, 0],
                                backgroundColor: ['#FFCE56', '#4BC0C0'],
                            }]
                        }
                    });

                    setInterval(updateCharts, 3000000);
                    updateCharts();
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
