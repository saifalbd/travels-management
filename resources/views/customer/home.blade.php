<x-student-app class="dashboard">
    <x-b-bar o="Dashboard" t=""></x-b-bar>

    <div class="grid grid-cols-12">
        <div class="col-span-8">
            {{-- start profile and personal information --}}
            <div class="p-5">
                <div class="border border-fuchsia-500 p-4 bg-fuchsia-50 rounded-sm">
                    <div class="grid grid-cols-12">
                        <div class="col-span-4">
                            <img src="{{ $customer->avatar->url }}" alt="" srcset="">
                        </div>
                        <div class="col-span-8 p-5">
                            <h1 class="text-4xl">{{ $customer->name }}</h1>
                            <div class="mt-4">
                                <b>Mobile:</b><span class="ml-2">{{ $customer->mobile }}</span>
                            </div>
                            <div>
                                <b>Email:</b><span class="ml-2">{{ $customer->email }}</span>
                            </div>

                            <div class="mt-10 text-center">
                                <a href="{{ route('customer.authInfo') }}"
                                    class=" border border-fuchsia-500 px-4 py-2.5">Update Profile</a>
                            </div>

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
            </div>
            {{-- end profile and personal information --}}

            {{-- <div class="p-5">
                <div class=" p-4  rounded-sm">
                    <h1 class="text-3xl mt-4 mb-4 text-cyan-900">Educational Information</h1>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ($customer->educations as $ed)
                            <div class="p-3 border border-fuchsia-600 bg-lime-100 rounded-md">
                                <div class=" text-center text-3xl font-semibold text-orange-500">{{ $ed->degree }}
                                </div>
                                <div class=" flex justify-center items-center flex-col mt-3">
                                    <div class="text-gray-700 text-xl">GPA/CGPA</div>
                                    <div class=" font-extrabold text-3xl text-gray-900">{{ $ed->gpa }}</div>
                                </div>
                                <div class="flex flex-col items-center justify-center mt-3">
                                    <div class="text-gray-700 text-xl">Passing Year</div>
                                    <div class="text-lg">{{ $ed->year_of_pass }}</div>
                                </div>
                                <div class="flex flex-col items-center justify-center mt-5">
                                    <div class="text-gray-700 text-xl">Institute</div>
                                    <div class="text-lg">{{ $ed->institute }}</div>
                                </div>
                                <div class="flex flex-col items-center justify-center mt-5">
                                    <div class="text-gray-700 text-xl">board</div>
                                    <div class="text-lg">{{ $ed->board }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="col-span-4 course-info">
            <div class="border border-rose-500 mt-5 bg-rose-50 p-3">

                <h2 class="text-2xl">
                    Course & Payment Status
                </h2>

{{-- 
                @foreach ($customer->courses as $course)
                    <div class="w-full mt-4">
                        <ul>
                            <li>Course Name</li>
                            <li>:</li>
                            <li>{{ $course->course->name }}</li>
                        </ul>
                        <ul>
                            <li>Batch Name</li>
                            <li>:</li>
                            <li>{{ $course->batch->title }}</li>
                        </ul>
                        <ul>
                            <li>Class Day</li>
                            <li>:</li>
                            <li>
                                @foreach ($course->batch->days as $day)
                                    <span
                                        class="border border-gray-500 px-2 rounded-md bg-lime-50">{{ $day }}</span>
                                @endforeach
                            </li>
                        </ul>
                        <ul>
                            <li>Class Time</li>
                            <li>:</li>
                            <li>{{ $customer->father_name }}</li>
                        </ul>
                    </div>

                    <div class="course-status-list">
                        <div class="status-item">
                            <div>Class Status</div>
                            <span>Runing</span>
                        </div>

                        <div class="status-item">
                            <div>Batch Status</div>
                            <span>Runing</span>
                        </div>

                        <div class="status-item">
                            <div>Admission Status</div>
                            <span>Runing</span>
                        </div>

                        <div class="status-item">
                            <div>Student Status</div>
                            <span>Runing</span>
                        </div>
                    </div>
                @endforeach --}}

                <div class="fee-info">
                    <div class="fee-item">
                        <div>Course Fee</div>
                        <div>334</div>
                    </div>
                    <div class="fee-item">
                        <div>Additional Fee</div>
                        <div>334</div>
                    </div>

                    <div class="fee-item">
                        <div>Add On Fee</div>
                        <div>334</div>
                    </div>

                    <div class="fee-item">
                        <div>Total Fee</div>
                        <div>334</div>
                    </div>

                    <div class="fee-item">
                        <div>Course Fee</div>
                        <div>334</div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</x-student-app>
