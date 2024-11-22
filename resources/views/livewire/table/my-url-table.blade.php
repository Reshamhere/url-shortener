<div class="overflow-x-auto bg-gray-800 dark:bg-gray-900 rounded-lg shadow-lg">
    <table class="min-w-full text-sm text-gray-200 dark:text-gray-400">
        <thead>
            <tr class="bg-gray-700 dark:bg-gray-800">
                <th class="px-4 py-2 text-left">{{ __('Column 1') }}</th>
                <th class="px-4 py-2 text-left">{{ __('Column 2') }}</th>
                <th class="px-4 py-2 text-left">{{ __('Column 3') }}</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr class="hover:bg-gray-700 dark:hover:bg-gray-800">
                    <td class="px-4 py-2">{{ $item->column1 }}</td>
                    <td class="px-4 py-2">{{ $item->column2 }}</td>
                    <td class="px-4 py-2">{{ $item->column3 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
