
<x-app>
   <x-b-bar o="Vustomer Info" t="Customer Info List" :url="route('admin.customer.create')" :add="true" >Add Customer</x-b-bar>

   <div class="table-box mb-4">
      <div class="grid sm:grid-cols-2 md:grid-cols-3 sm:gap-2">
         @foreach ($customers as $c )

         <div class="customer-card">
            <div class="grid grid-cols-[70px_auto] h-[65px]">
               <div class="flex justify-center items-center">
                  <a href=""><img src="{{$c->avatar->url}}" alt="" class="rounded-full w-[60px] h-[60px]"></a>
               </div>
               <div class="">
                  <h5 class=" font-medium text-lg">{{$c->name}}</h5>
                  @if($c->agreemant)
                  <p class="m-0 text-gray-500">{{$c->agreemant->package->name}}</p>
                  @endif
               </div>
            </div>
            <hr>
            <ul>
               <li><x-icon.done></x-icon.done>
                   <span>NID:</span>  <span>{{$c->agreemant->nid}}</span>
               </li>
               <li><x-icon.done></x-icon.done> <span>Father:</span> <span>{{$c->agreemant->father_name}} </span>  </li>
               <li><x-icon.done></x-icon.done> <span>Mother:</span> <span>{{$c->agreemant->mother_name}}</span>   </li>
               <li><x-icon.done></x-icon.done> <span>Passport:</span> <span>{{$c->agreemant->passport}}</span>   </li>
               <li><x-icon.done></x-icon.done> <span>NID:</span> <span>{{$c->agreemant->passport}} </span>  </li>
               <li><x-icon.done></x-icon.done> <span>DateOfBirth:</span> <span>{{$c->agreemant->date_of_birth}}</span>   </li>
               <li><x-icon.done></x-icon.done> <span>Phone:</span> <span>{{$c->agreemant->phone}}</span> </li>
               <li><x-icon.done></x-icon.done> <span>Gender:</span> <span>{{$c->agreemant->gender}}</span> </li>
            </ul>


            <ul>
                
                <li><x-icon.done></x-icon.done> <span>Total Amount:</span> <span>{{$c->agreemant->amount}} /TK</span>  </li>
                <li><x-icon.done></x-icon.done> <span>Advance:</span> <span>{{$c->agreemant->advance}} /TK</span>   </li>
                <li><x-icon.done></x-icon.done> <span>After Permit:</span> <span>{{$c->agreemant->after_permit}} /TK</span>   </li>
                <li><x-icon.done></x-icon.done> <span>After Visa:</span> <span>{{$c->agreemant->after_visa}}  /TK</span>  </li>
                <li><x-icon.done></x-icon.done> <span>Due:</span> <span>{{$c->agreemant->due}}  /TK</span>   </li>
               
             </ul>

          


          <div class="flex justify-end items-center mt-4">


            

            <a data-tooltip-target="tooltip-edit"
            href="{{route('admin.customer.edit',['customer'=>$c->id])}}"
             class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
              focus:ring-blue-300 font-medium rounded-none text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700
               dark:focus:ring-blue-800">
               <svg class="h-4 w-4 text-orange-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 18">
                  <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                  <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                </svg>
            </a>
            <form action="{{route('admin.customer.destroy',$c->id)}}" method="post" style="margin: 0px;">
            <button data-tooltip-target="tooltip-remove"
             type="submit" class="text-white border-red-700 bg-red-800 focus:ring-4 focus:outline-none
              focus:ring-blue-300 font-medium rounded-none text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700
               dark:focus:ring-blue-800">
               <svg class="h-4 w-4 text-orange-300 dark:text-white" 
               aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                   <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                 </svg>
               </button>

          
               @csrf
               @method('delete')
              
            </form>

         
          


             <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
               Edit Instructor
               <div class="tooltip-arrow" data-popper-arrow></div>
           </div>
           <div id="tooltip-remove" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Remove Instructor
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
           
          </div>
             
      
         </div>

         @endforeach

      </div>
   </div>


</x-app>


