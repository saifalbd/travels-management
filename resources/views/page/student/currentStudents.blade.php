<x-app>
    <x-b-bar o="Admission" t="Admission List" :url="route('student.create')" :add="true" >New Admission</x-b-bar>

    <div class="table-box">
        <div>
  
              <table class="y-table w-full  text-center" >
                            <thead>
                                <tr>
                                    <th class="px-6 py-3"> Admission#</th>
                                    <th class="px-6 py-3"> Date</th>
                                    <th class="px-6 py-3"> Student Name </th>
                                    <th class="px-6 py-3"> Gender </th>
                                    <th class="px-6 py-3"> Course</th>
                                    <th class="px-6 py-3"> Batch </th>
                                    <th class="px-6 py-3"> Mobile</th>
                                    <th class="px-6 py-3"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td ><samp>{{$student->id}}</samp></td>

                                    <td>{{format($student->created_at->toDateString())}}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"> <a href="{{route('student.show',['student'=>$student->id])}}">{{$student->name}}</a></td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->courses->pluck('course')->pluck('name')->join(',')}}</td>
                                    <td>{{$student->courses->pluck('batch')->pluck('title')->join(',')}}</td>
                                    <td>{{$student->mobile}}</td>


                                    <td nowrap>


                                    <td nowrap>

                                        
<button  data-dropdown-toggle="dropdown-{{$student->id}}" 
class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none 
focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2
 rounded-lg text-sm px-3 py-1.5 text-center inline-flex items-center" 
 type="button"> Options<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
<!-- Dropdown menu -->
<div id="dropdown-{{$student->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" 
        href="{{route('student.show',['student'=>$student->id])}}">Profile</a>
      </li>
      <li>
        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" 
        href="{{route('student.attendance',['student'=>$student->id])}}"> Attendance Record</a>
      </li>
      <li>
        <a  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" 
        href="{{route('fee.create',['student'=>$student->id])}}">Payment</a>
      </li>
      <li>
        <a  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" 
        href="{{route('student.certification',['student'=>$student->id])}}">Certification</a>
      </li>
      <li>
        <a  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" 
        href="{{route('student.edit',['student'=>$student->id])}}">Update Information</a>
      </li>
    </ul>
</div>



                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                            
                        </table>
        </div>
    </div>
    
                    
  
</x-app>
