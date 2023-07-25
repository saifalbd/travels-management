<x-ins-app>
    <x-b-bar o="Course" t="Course List" ></x-b-bar>

    <div class="table-box">
        <div>
               <table class="y-table w-full  text-center" >
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                <th class="px-6 py-3"> #</th>
                                <th class="px-6 py-3 "> Name  </th>
                                <th class="px-6 py-3 "> Duration </th> 
                                <th class="px-6 py-3 "> Fee</th>
                                <th class="px-6 py-3 "> Instructors </th>
                                
                               
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td>{{$item->id}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$item->name}}</td>
                                
                                
                                <td> {{$item->duration}} Months</td>
                                <td  >{{$item->fee}}</td>
                                <td >{{$item->instructors->pluck('name')->join(',')}}</td>
                                
                               
                                </tr>
                                @endforeach
                                            
                                       
                                </tbody>
                 
              </table>
    
           
        </div>
    </div>
              

</x-ins-app>