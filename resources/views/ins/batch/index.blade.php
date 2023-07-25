<x-ins-app>
    <x-b-bar o="Batch" t="Batch List" ></x-b-bar>

    <div class="table-box">
        <div>

            <table class="y-table w-full  text-center">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>

                        <th class="px-6 py-3"> #</th>
                        <th class="px-6 py-3">Batch Title</th>
                        <th class="px-6 py-3">Student Count</th>
                       
                        <th class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $batch)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td>{{ $batch->id }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $batch->title }}</td>
                            <td>{{ $batch->students_count }}</td>
                           
                           
                      
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

</x-ins-app>