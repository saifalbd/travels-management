<x-app>
    <x-b-bar o="Payment Info" t="Customer Payment List" :url="route('admin.customer.payment.create')" :add="false" >Customer Payment Create</x-b-bar>
    
    <div class="table-box">
    <div>
           <table class="y-table w-full  text-center" >
                            <thead  class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th  class="px-6 py-3"> #</th>
                                    <th  class="px-6 py-3"> Name </th>
                                    <th class="px-6 py-3">Date</th>
                                    <th class="px-6 py-3">Method</th>
                                    <th class="px-6 py-3">Bank</th>
                                    <th class="px-6 py-3">From Branch</th>
                                    <th class="px-6 py-3">Check Number</th>
                                    <th class="px-6 py-3">Amount</th>
                                    <th class="px-6 py-3">Attachment</th>
                                    <th class="px-6 py-3">Approved</th>
                                   
                                    <th class="px-6 py-3"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $pay)
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <td width="0%" class="bn-font">{{ $pay->id }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $pay->customer->name }}</td>


                                        <td> {{ $pay->date }}</td>
                                        <td>{{ $pay->pay_method }}</td>
                                        <td>{{ $pay->bank?$pay->bank->name:'' }}</td>
                                        <td>{{ $pay->branch }}</td>
                                        <td>{{ $pay->check_no }}</td>
                                        <td>{{$pay->amount}}</td>
                                        <td>
                                            @if($pay->attach)
                                            <button class="rounded py-2 px-4 border border-fuchsia-500">View Attach</button>
                                            @endif
                                        </td>
                                        <td>
                                         
                                            <button class="rounded py-2 px-4 border border-fuchsia-500">Approved</button>
                                           
                                        </td>

                                        <td>
                                            <div class=" flex justify-center items-center">
                                                
                                                <a class=" flex items-center border border-orange-300  rounded-md bg-purple-700 text-orange-100 py-1 px-4" href="{{route('admin.customer.payment.show',['customer_payment' => $pay->id])}}">
                                                    <svg class="w-5 h-5  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2M5 5h8m-8 5h8m-8 4h8"/>
                                                      </svg>
                                                   
                                                </a>
                                               
                                                <x-remove-btn :action="route('admin.customer.payment.destroy', ['customer_payment' => $pay->id])"
                                                    title="Are You Sure Delete {{ $pay->customer->name }}">
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
