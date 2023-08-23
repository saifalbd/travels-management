<x-app>
    <x-b-bar o="Customer Info" t="Customer Info" :url="route('admin.customer.create')" :add="true">Add Customer</x-b-bar>


     <!-- Main modal -->
  <div id="progress-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 
            hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center
             dark:hover:bg-gray-600 dark:hover:text-white" id="close-attach-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update <b id="statusName"></b> progress Attach</h3>
                <form class="space-y-6" method="POST" action="{{route('admin.updateProgress')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tagid" id="tagId" value="">
                    <input type="hidden"  name="customer_id" value="{{$customer->id}}">
                    <input type="hidden"  name="agreemant_id" value="{{$customer->agreemant->id}}">
                    <div class="col-span-12" id="image-box">

                    </div>
                    <div class="form-group col-span-12 md:col-span-4">
                        <label>Attachment</label>
                        <input class="form-control" name="attach[]" type="file" id="progressAttachInput" multiple>
                        @error('attach')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-span-12 md:col-span-4">
                        <label>Note</label>
                        <textarea type="number"
                            class="form-control @error('note') is_invalid @enderror"
                            name="note" id="note"></textarea>
                        @error('due')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</div> 


    <div class="table-box mb-4 dashboard">


  
 
        

        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8">
                {{-- start profile and personal information --}}
                <div class="md:p-5">
                    <div class="border border-fuchsia-500 p-4 bg-fuchsia-50 rounded-sm">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 md:col-span-4 flex items-center justify-center">
                                <img class="max-w-[200px]" src="{{ $customer->avatar->url }}" alt="" srcset="">
                            </div>
                            <div class="col-span-12 md:col-span-8 p-5">
                                <h1 class="text-4xl">{{ strtoupper($customer->name) }}</h1>
                                <h1 class="text-3xl mt-2">Package: <span>{{ $customer->agreemant->package->name }}</span></h1>
                                <h3>Package Type:{{ $customer->agreemant->package->type->name }}</h3>
                                <div class="mt-4">
                                    <b>Mobile:</b><span class="ml-2">{{ $customer->phone }}</span>
                                </div>

                                <div>

                                </div>
                            </div>
                            <div class="col-span-12">

                                <h3 class="my-2 font-semibold text-gray-900 dark:text-white">Identification</h3>
                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    @foreach ($tags as $tag)
                                        <li
                                            class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                            <div class="flex items-center pl-3 progress-tag">
                                                <input id="vue-checkbox-list" 
                                                data-tag-name="{{$tag->name}}" 
                                                data-tag-id="{{$tag->id}}"
                                                data-note="{{$tag->note}}"
                                                data-attachments='{!!json_encode($tag->attachments)!!}'
                                                 type="checkbox" @checked($tag->checked)
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="vue-checkbox-list"
                                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$tag->name}}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="personal-info">
                        <h3 class="text-3xl mb-3 text-cyan-900">Personal Information</h3>
                        <div class="w-full">
                            <ul>
                                <li>Father's Name</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->father_name }}</li>
                            </ul>
                            <ul>
                                <li>Mother's Name</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->mother_name }}</li>
                            </ul>
                            <ul>
                                <li>Guardian Phone</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->father_name }}</li>
                            </ul>
                            <ul>
                                <li>NID</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->nid }}</li>
                            </ul>
                            <ul>
                                <li>Date Of Birth</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->date_of_birth }}</li>
                            </ul>
                            <ul>
                                <li>Gender</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->gender }}</li>
                            </ul>
                            <ul>
                                <li>Present Address</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->present_address }}</li>
                            </ul>
                            <ul>
                                <li>Permanent Address</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->permanent_address }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="personal-info">
                        <h3 class="text-3xl mb-3 text-cyan-900">Package Information</h3>
                        <div class="w-full">
                            <ul>
                                <li>Package Name</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->package->name }}</li>
                            </ul>
                            <ul>
                                <li>Package Type</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->package->type->name }}</li>
                            </ul>
                            <ul>
                                <li>Amount</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->amount }} BDT</li>
                            </ul>
                            <ul>
                                <li>Advance</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->advance }} BDT</li>
                            </ul>
                            <ul>
                                <li>After Permit</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->after_permit }} BDT</li>
                            </ul>
                            <ul>
                                <li>After Visa</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->after_visa }} BDT</li>
                            </ul>
                            <ul>
                                <li>Due</li>
                                <li>:</li>
                                <li>{{ $customer->agreemant->due }}</li>
                            </ul>



                        </div>
                    </div>
                </div>


            </div>


          

            <div class="col-span-12 md:col-span-4 payment-info">
              

                <div class="border border-rose-500 mt-5 bg-rose-50 p-3">

                    <h2 class="text-2xl">
                        Payments
                    </h2>
                    <ul class="pay-box-list">
                        @foreach ($customer->payments as $payment)
                            <!-- Modal toggle -->


                            <!-- Main modal -->
                            <div id="attach-modal-{{ $payment->id }}" data-modal-backdrop="static" tabindex="-1"
                                aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Pay Slip Attachment
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="attach-modal-{{ $payment->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-1 space-y-6">
                                            <img src="{{ $payment->attach->url }}" alt="" srcset="">
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center justify-end p-2 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 text-right">
                                            <button type="button" data-modal-hide="attach-modal-{{ $payment->id }}"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <li class="pay-item">
                                <ul>
                                    <li>Date</li>
                                    <li>:</li>
                                    <li>{{ $payment->date }}</li>
                                </ul>
                                <ul>
                                    <li>Bank</li>
                                    <li>:</li>
                                    <li>{{ $payment->bank->name }}</li>
                                </ul>
                                <ul>
                                    <li>Branch</li>
                                    <li>:</li>
                                    <li>{{ $payment->branch }}</li>
                                </ul>
                                <ul>
                                    <li>Cehck NO</li>
                                    <li>:</li>
                                    <li>{{ $payment->check_no }}</li>
                                </ul>
                                <ul>
                                    <li>Amount</li>
                                    <li>:</li>
                                    <li>{{ $payment->amount }}</li>
                                </ul>
                                <ul>
                                    <li>Note</li>
                                    <li>:</li>
                                    <li>{{ $payment->remark }}</li>
                                </ul>
                                <ul>
                                    <li>Payment Status</li>
                                    <li>:</li>
                                    <li>
                                        @if ($payment->approved)
                                            <span
                                                class="bg-green-100 text-green-800 text-md font-medium mr-2 px-2.5 py-1 rounded-full dark:bg-green-900 dark:text-green-300">Received</span>
                                        @else
                                            <span
                                                class="bg-red-100 text-red-800 text-md font-medium mr-2 px-2.5 py-1 rounded-full dark:bg-red-900 dark:text-red-300">Pending</span>
                                        @endif
                                    </li>
                                </ul>

                                <ul>
                                    <li>Attachment</li>
                                    <li>:</li>
                                    <li>
                                        @if ($payment->attach)
                                            <button type="button" data-modal-target="attach-modal-{{ $payment->id }}"
                                                data-modal-toggle="attach-modal-{{ $payment->id }}"
                                                class="focus:outline-none flex text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm pr-5 pl-3 py-2   dark:focus:ring-yellow-900">
                                                <svg class="w-6 h-6 text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 16 20">
                                                    <path fill="currentColor"
                                                        d="M11.045 7.514a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm-4.572 3.072L3.857 15.92h7.949l-1.811-3.37-1.61 2.716-1.912-4.679Z" />
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 1v4a1 1 0 0 1-1 1H1m14 12a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v16ZM11.045 7.514a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM3.857 15.92l2.616-5.333 1.912 4.68 1.61-2.717 1.81 3.37H3.858Z" />
                                                </svg>
                                                <span class="ml-2">View Attachment</span></button>
                                        @else
                                            Attachment Not Inqlude
                                        @endif
                                    </li>
                                </ul>

                            </li>
                        @endforeach

                    </ul>



                </div>

                <div class="border border-rose-500 mt-5 bg-rose-50 p-3">

                    <h2 class="text-2xl">
                        Progress
                    </h2>
                    <ul class="pay-box-list">
                        @foreach ($tags as $tag)
                        <li>
                            <h3 class=" text-xl font-semibold mb-2">{{$tag->name}}</h3>
                            <div>
                                @foreach ($tag->attachments as $at)
                                    <img src="{{$at['url']}}" alt="" srcset="">
                                @endforeach
                                <p class="mt-2">{{$tag->note}}</p>
                            </div>
                        </li> 
                        @endforeach
                       
                    </ul>
                </div>
            </div>

        </div>

    </div>
</x-app>
