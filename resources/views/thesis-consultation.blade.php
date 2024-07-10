<x-app-layout>
    <div style="margin: 5%">
        <div class="flex justify-center mb-6 text-gray-700 dark:text-gray-400">
            <p class="font-semibold" style="font-size: 1.5rem;">Total Searched Theses: <span id="total_records"></span></p>
        </div>

        <input style="width: 100%" type="text" name="search" id="search" class="form-control" placeholder="Search Theses..." />

        <div id="results">
            @foreach ($theses as $thesis)
                <x-thesiscard :thesis="$thesis" />
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetch_thesis_data(query = '') {
                $.ajax({
                    url: "{{ route('theses.action') }}",
                    method: 'GET',
                    data: { query: query },
                    dataType: 'json',
                    success: function(data) {
                        $('#results').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                });
            }

            $('#search').on('keyup', function() {
                var query = $(this).val();
                fetch_thesis_data(query);
            });
        });
    </script>
</x-app-layout>
