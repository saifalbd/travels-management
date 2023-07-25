<x-app>
    <x-b-bar o="User Info" t="User List" :url="route('admin.user.create')" :add="false" >User Create</x-b-bar>
    
    <div class="table-box">
    <div>
           <table class="y-table w-full  text-center" >
                            <thead  class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th  class="px-6 py-3"> #</th>
                                    <th  class="px-6 py-3"> Name </th>
                                    <th class="px-6 py-3"> Email </th>
                                    <th class="px-6 py-3">Mobile</th>
                                    <th class="px-6 py-3">Role</th>
                                    <th class="px-6 py-3"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <td width="0%" class="bn-font">{{ $item->id }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $item->name }}</td>


                                        <td> {{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->role }}</td>

                                        <td>
                                            <div class=" flex justify-center items-center">
                                                <x-edit-btn url="{{ route('user.edit', ['user' => $item->id]) }}">

                                                </x-edit-btn>

                                               
                                                <x-remove-btn :action="route('user.destroy', ['user' => $item->id])"
                                                    title="Are You Sure Delete User {{ $item->name }}">
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
