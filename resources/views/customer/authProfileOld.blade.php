<x-student-app>
    <x-b-bar o="Profile" t="Update My Information"></x-b-bar>





    <div class="table-box">
        <div>
            <div class="border-b border-gray-200 dark:border-gray-700">
                <ul
                    class="flex flex-wrap -mb-px text-sm font-medium text-center bg-red-100 text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="#"
                            class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                            <svg class="w-4 h-4 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>Profile
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group"
                            aria-current="page">
                            <svg class="w-4 h-4 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 16 20">
                                <path
                                    d="M14 7h-1.5V4.5a4.5 4.5 0 1 0-9 0V7H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-5 8a1 1 0 1 1-2 0v-3a1 1 0 1 1 2 0v3Zm1.5-8h-5V4.5a2.5 2.5 0 1 1 5 0V7Z" />
                            </svg>Password
                        </a>
                    </li>

                </ul>

            </div>


            <div class="profile mt-5 p-3">
                <div class="p-4 border border-gray-300 flex flex-wrap justify-start items-center">
                    <div>
                        <img src="https://demo.tailadmin.com/src/images/user/user-01.png" alt="" srcset="">
                    </div>
                    <div class="sm:pl-3 font-semibold">
                        <h3 class="text-lg  mb-2">{{ $student->name }}</h3>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 14h12M1 4h12M6.5 16.5h1M2 1h10a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                            </svg>
                            <span class="ml-3">{{ $student->mobile }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                            </svg>
                            <span class="ml-3">{{ $student->email }}</span>
                        </div>
                    </div>
                </div>


                <div class="mt-4">
                    <form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{ route('student.store') }}"
                        enctype="multipart/form-data">
                        @csrf



                        {{-- Start Card --}}
                        <div
                            class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                            <div class="space-y-6">
                                <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">General Information
                                </h5>

                                <div class="grid gap-1 sm:grid-cols-6">
                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label for="inputEmail4">Name</label>
                                        <input type="text" class="form-control @error('name') is_invalid @enderror"
                                            required name="name" value="{{ $student->name }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label for="inputpresent_address2">Father's/Husband Name</label>
                                        <input type="text"
                                            class="form-control @error('father_name') is_invalid @enderror" required
                                            name="father_name" value="{{ $student->father_name }}">
                                        @error('father_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label for="inputpresent_address2">Mother's Name</label>
                                        <input type="text"
                                            class="form-control @error('mother_name') is_invalid @enderror"
                                            name="mother_name" value="{{ $student->mother_name }}">
                                        @error('mother_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label for="inputpresent_address2">Nid</label>
                                        <input type="text" class="form-control @error('mid') is_invalid @enderror"
                                            name="nid" value="{{ $student->nid }}">
                                        @error('nid')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label for="inputpresent_address2">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="Male" @selected($student->gender == 'Male')> Male </option>
                                            <option value="Female" @selected($student->gender == 'Female')> Female </option>
                                        </select>
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label>Blood group</label>
                                        <select class="form-control" name="blood_group"
                                            value="{{ old('blood_group') }}">
                                            <option value="">_____</option>
                                            @foreach (['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB'] as $v)
                                                <option value="{{ $v }}" @selected($student->blood_group == $v)>
                                                    {{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label>Religion</label>
                                        <select class="form-control" name="religion" value="{{ old('religion') }}">
                                            @foreach (['Islam', 'Hindu', 'Christian', 'Buddhist'] as $v)
                                                <option value="{{ $v }}" @selected($student->blood_group == $v)>
                                                    {{ $v }}</option>
                                            @endforeach


                                        </select>
                                    </div>


                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label for="inputpresent_address2">Date of Birth</label>
                                        <input type="date"
                                            class="form-control @error('date_of_birth') is_invalid @enderror"
                                            name="date_of_birth" value="{{ old('date_of_birth') }}">
                                        @error('date_of_birth')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label>Highest Educational Qualification</label>
                                        <input type="text"
                                            class="form-control @error('education') is_invalid @enderror"
                                            name="education" value="{{ old('education') }}"
                                            placeholder="Ex: HSC with GPA 4.50">
                                        @error('education')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label>Occupation </label>
                                        <select class="form-control @error('occupation') is_invalid @enderror"
                                            name="occupation" value="{{ old('occupation') }}">
                                            <option value="Student"> Student </option>
                                            <option value="Job"> Job </option>
                                            <option value="Bussiness"> Bussiness </option>
                                        </select>
                                        @error('occupation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label>Mobile</label>
                                        <input type="number"
                                            class="form-control @error('mobile') is_invalid @enderror" name="mobile"
                                            value="{{ old('mobile') }}">
                                        @error('mobile')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-span-12 md:col-span-2">
                                        <label>Guardian's Mobile</label>
                                        <input type="number"
                                            class="form-control @error('guardian_mobile') is_invalid @enderror"
                                            name="guardian_mobile" value="{{ old('guardian_mobile') }}">
                                        @error('guardian_mobile')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-span-12 md:col-span-3">
                                        <label>Present Address</label>
                                        <textarea class="form-control @error('present_address') is_invalid @enderror" name="present_address"
                                            value="{{ old('present_address') }}"> </textarea>
                                        @error('present_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-span-12 md:col-span-3">
                                        <label>Permanent Address</label>
                                        <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address"
                                            value="{{ old('permanent_address') }}"> </textarea>
                                        @error('permanent_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                            </div>
                        </div>

                        {{-- END Card --}}


                        {{-- Start Card --}}
                        <div class="col-span-12 md:col-span-6 flex justify-center">
                            <x-submit-btn></x-submit-btn>
                        </div>
                    </form>
                </div>
                <div class="mt-4">
                    <form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{ route('student.educationUpdate') }}"
                        enctype="multipart/form-data">
                        @csrf

                        {{-- Start Card --}}
                        <div
                            class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                            <div class="space-y-6">
                                <div class="flex justify-between items-center">
                                    <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Education
                                        Background
                                    </h5>
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                                        Degree</button>
                                </div>

                                <div class=" w-full overflow-auto pb-4">
                                    <div class="grid gap-1 grid-cols-[auto_auto_auto_150px_120px_100px_100px_auto]">
                                        <div clsss="font-bold">Select Degree</div>
                                            <div clsss="text-bold">Select Board</div>
                                            <div clsss="text-bold">Institute Name</div>
                                            <div clsss="text-bold">Group Name</div>
                                            <div clsss="text-bold">YearOfPassing</div>
                                            <div clsss="text-bold">Select Status</div>
                                            <div clsss="text-bold">GPA/CGPA</div>
                                            <div clsss="text-bold"></div>
                                            @foreach ($student->educations as $i=>$ed)
                                            <div>
                                                <select
                                                    class="edu-control @error('degree') is_invalid @enderror"
                                                    name="items[{{$i}}][degree]">
                                                    <option value="">_____</option>
                                                    @foreach (['SSC', 'O LEVEL', 'HSC', 'A LEVEL', 'DIPLOMA', 'GRADUATION', 'POST GRADUATION'] as $v)
                                                        <option value="{{ $v }}"
                                                            @selected($ed->degree == $v)>{{ $v }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>

                                                <select
                                                    class="edu-control @error('items[{{$i}}][board]') is_invalid @enderror"
                                                    name="items[{{$i}}][board]">
                                                    <option value="">_____</option>
                                                    @foreach (['Barisal', 'Chittagong', 'Comilla', 'Dhaka', 'Dinajpur', 'Jessore', 'Mymensingh', 'Rajshahi', 'Sylhet', 'Madrasah', 'Technical', 'DIBS(Dhaka)', 'Edexcel', 'Cambridge', 'Public University', 'Private University', 'National University'] as $v)
                                                        <option value="{{ $v }}"
                                                            @selected($ed->board == $v)>{{ $v }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <input type="text"
                                                    class="edu-control @error('items[{{$i}}][institute]') is_invalid @enderror"
                                                    name="items[{{$i}}][institute]" value="{{ $ed->institute }}">
                                                @error('items[{{$i}}][institute]')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="text"
                                                class="edu-control @error('items[{{$i}}][group]') is_invalid @enderror"
                                                name="items[{{$i}}][group]" value="{{ $ed->group }}">
                                            @error('items[{{$i}}][group]')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            </div>
                                            <div>
                                                <input type="number"
                                                class="edu-control @error('items[{{$i}}][year_of_pass]') is_invalid @enderror"
                                                name="items[{{$i}}][year_of_pass]" value="{{ $ed->year_of_pass }}">
                                            @error('items[{{$i}}][year_of_pass]')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <div>
                                              
                                                <select
                                                class="edu-control @error('items[{{$i}}][status]') is_invalid @enderror"
                                                name="items[{{$i}}][status]">
                                                <option value="">_____</option>
                                                @foreach ([ 'Running', 'Complete'] as $v)
                                                    <option value="{{ $v }}"
                                                        @selected($ed->status == $v)>{{ $v }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div>
                                               
                                                <input type="number"
                                                class="edu-control @error('items[{{$i}}][gpa]') is_invalid @enderror"
                                                name="items[{{$i}}][gpa]" value="{{ $ed->gpa }}">
                                            @error('items[{{$i}}][gpa]')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <div>
                                                <button type="button" class="inline-flex items-center justify-center w-7 h-7 bg-purple-500 rounded-full">
                                                  
                                                    <svg class="w-4 h-4 text-lime-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                                      </svg>
                                                    </button>
                                                  
                                            </div>
                                            @endforeach

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 flex justify-center">
                            <x-update-btn></x-update-btn>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>





</x-student-app>
