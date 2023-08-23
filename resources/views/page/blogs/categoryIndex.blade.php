<x-app>
    <x-b-bar o="Categoy" t="Category List" :url="route('admin.blog.category.create')" :add="false" >Category Create</x-b-bar>
    <div class="table-box">
        <div>
               <table class="y-table w-full  text-center" >
                                <thead  class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                    <tr>
                                        <th  class="px-6 py-3"> #</th>
                                        <th  class="px-6 py-3"> Title </th>
                                 
                                        
                                        <th class="px-6 py-3"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td  class="bn-font">{{ $item->id }}</td>
                                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $item->title }}</td>
                                           
                                           
                                            <td>
                                                <div class=" flex justify-center items-center">
                                                    <x-edit-btn url="{{ route('admin.blog.category.edit', ['post_category' => $item->id]) }}">
    
                                                    </x-edit-btn>
    
                                                   
                                                    <x-remove-btn :action="route('admin.blog.category.destroy', ['post_category' => $item->id])"
                                                        title="Are You Sure Delete Category {{ $item->name }}">
                                                    </x-remove-btn>
                                                </div>
    
    
                                            </td>
                                        </tr>
                                    @endforeach
    
    
                                </tbody>
                                
                            </table>
        </div>
        </div>
</x-app>