<x-ins-app>
    <x-b-bar o="Student" t="Student List" ></x-b-bar>


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
                                @foreach($items as $student)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td ><samp>{{$student->id}}</samp></td>

                                    <td>{{format($student->created_at->toDateString())}}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"> <a href="{{route('student.show',['student'=>$student->id])}}">{{$student->name}}</a></td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->courses->pluck('course')->pluck('name')->join(',')}}</td>
                                    <td>{{$student->courses->pluck('batch')->pluck('title')->join(',')}}</td>
                                    <td>{{$student->mobile}}</td>
                                    <td class="pl-5 pr-5">
                                        <a  href="{{route('ins.student.show',['student'=>$student->id])}}">
                                            <svg class="w-5 h-5 text-fuchsia-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                                <path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z"/>
                                              </svg>
                                        </a>
                                    </td> 
                                </tr>
                                @endforeach


                            </tbody>
                            
                        </table>
        </div>
    </div>

</x-ins-app>