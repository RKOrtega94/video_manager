<div class="w-full bg-white dark:bg-gray-900 shadow rounded-md p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="w-full h-auto">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Reporte de visualizaciones</h2>
            <p class="text-gray-400 dark:text-gray-300">Visualizaciones por video</p>
            @foreach ($viewsReport as $item => $value)
                <x-video.report-item :item="$item" :value="$value" />
            @endforeach
        </div>

        <div class="w-full h-auto">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Reporte de búsquedas</h2>
            <p class="text-gray-400 dark:text-gray-300">Busquedas por video</p>
            @foreach ($searchReport as $item => $value)
                <x-video.report-item :item="$item" :value="$value" />
            @endforeach
        </div>
    </div>
</div>
