<x-student-app>
    <x-b-bar o="Profile" t="Update My Information"></x-b-bar>



    @slot('head')
        <script>
          
            window.postAvatar = "{{ route('customer.changeAvatar') }}";
            
           
        </script>
    @endslot








    {{-- START SOCIAL MODAL --}}


    <!-- Modal toggle -->


    <!-- Main modal -->


    {{-- END SOCIAL MODAL --}}


    <div class="table-box">
        <div>
            {{-- START TAB LINE --}}
            <div class="border-b border-gray-200 dark:border-gray-700">
                <ul
                    class="flex flex-wrap -mb-px text-sm font-medium text-center bg-red-100 dark:bg-gray-700 text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="{{ route('customer.authInfo') }}"
                            class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg  @if (!$isPassword) text-blue-600  border-blue-600   dark:text-blue-500 dark:border-blue-500 @else hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 @endif">
                            <svg class="w-4 h-4 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>Profile
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('customer.authInfo', ['password' => 1]) }}"
                            class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg  @if ($isPassword) text-blue-600  border-blue-600   dark:text-blue-500 dark:border-blue-500 @else hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 @endif"
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
{{-- END TAB LINE --}}




            @if ($isPassword)
                {{-- START PASSWORD CONTENT --}}
                <div class="mt-5 p-5 flex justify-center items-center">

                    <form class="grid grid-cols-12 rounded border border-fuchsia-600 p-5 min-w-[500px]"
                        action="{{ route('customer.passwordUpdate') }}" method="POST">
                        @csrf

                        <div class="form-group col-span-12">
                            <label>Old Password</label>
                            <input type="text" class="form-control @error('old_password') is_invalid @enderror"
                                required name="old_password">
                            @error('old_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-span-12">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is_invalid @enderror" required
                                name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-span-12">
                            <label>Confirm Password</label>
                            <input type="password"
                                class="form-control @error('password_confirmation') is_invalid @enderror" required
                                name="password_confirmation">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-12 flex justify-center">
                            <x-submit-btn></x-submit-btn>
                        </div>


                    </form>
                </div>
                {{-- END PASSWORD CONTENT --}}
            @else
                {{-- START PROFILE CONTENT --}}
                <div class="profile mt-5 p-3">

                    {{--  START DRAWER AVATAR  --}}
                    <div id="drawer-avatar"
                        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
                        tabindex="-1" placement="right" aria-labelledby="drawer-label">
                        <h5 id="drawer-label"
                            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>Change Profile Avatar
                        </h5>
                        <button type="button" data-drawer-hide="drawer-avatar" aria-controls="drawer-avatar"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>

                        <div class="p-5">
                            <div class=" flex justify-center items-center">
                                <div
                                    class="border-2 border-fuchsia-600 ring-2 ring-fuchsia-100 rounded-full overflow-hidden">
                                    <img id="avatar-temp" src="{{ $customer->avatar->url }}" alt=""
                                        srcset="">
                                </div>
                            </div>
                        </div>

                        <div class=" border border-fuchsia-500 mb-3">
                            <input type="file" id="avatar-input">
                        </div>

                        <div class="flex justify-center">
                            <button id="avatar-save"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center
                        text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                         dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Change
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg></button>
                        </div>
                    </div>
                    {{--  END DRAWER AVATAR  --}}

                  


                    {{-- START PROFILE INFORMATION --}}

                    <div class="p-4 border border-gray-300 flex flex-wrap justify-start items-center">
                        <div class="image-box">
                            <img id="avatar-main" class="max-w-[150px] rounded-full"
                                src="{{ $customer->avatar->url }}" alt="" srcset="">
                            <div class="upload" data-drawer-target="drawer-avatar" data-drawer-show="drawer-avatar"
                                aria-controls="drawer-avatar">
                                <svg class="w-8 h-8 text-fuchsia-100 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17 3h-2l-.447-.894A2 2 0 0 0 12.764 1H7.236a2 2 0 0 0-1.789 1.106L5 3H3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V5a2 2 0 0 0-2-2Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="sm:pl-3 font-semibold">
                            <h3 class="text-lg  mb-2">{{ $customer->name }}</h3>
                            <div class="flex items-center dark:text-lime-50">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 14h12M1 4h12M6.5 16.5h1M2 1h10a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                                </svg>
                                <span class="ml-3">{{ $customer->phone }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z"/>
                                    <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z"/>
                                  </svg>
                                <span class="ml-3">{{ $customer->agreemant->package->name}}</span>
                            </div>
                           
                        </div>
                    </div>

                    {{-- END PROFILE INFORMATION --}}


                    {{-- START PROFILE INFORMATION UPDATE FORM BOX --}}
                    <div class="mt-4">
                        <form class="grid gap-1 sm:grid-cols-6" method="POST" action=""
                            enctype="multipart/form-data">
                            @csrf

                            {{-- Start Card --}}
                            <div
                                class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                                <div class="space-y-6">
                                    <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">General
                                        Information
                                    </h5>

                                    <div class="grid gap-1 grid-cols-12">
                                        <div class="form-group col-span-12 md:col-span-8">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text"
                                                class="form-control @error('name') is_invalid @enderror" required
                                                name="name" value="{{ $customer->agreemant->name }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                             
                                        <div class="form-group col-span-12 md:col-span-4">
                                            <label for="inputpresent_address2">Gender</label>
                                            <select class="form-control" name="gender" required>
                                                <option value="Male" @selected($customer->agreemant->gender == 'Male')> Male </option>
                                                <option value="Female" @selected($customer->agreemant->gender== 'Female')> Female </option>
                                            </select>
                                        </div>
                             
                                        <div class="form-group col-span-12 md:col-span-6">
                                            <label for="inputpresent_address2">Father's/Husband Name</label>
                                            <input type="text"
                                                class="form-control @error('father_name') is_invalid @enderror"
                                                required name="father_name" value="{{ $customer->agreemant->father_name }}" required>
                                            @error('father_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-span-12 md:col-span-6">
                                            <label for="inputpresent_address2">Mother's Name</label>
                                            <input type="text"
                                                class="form-control @error('mother_name') is_invalid @enderror"
                                                name="mother_name" value="{{ $customer->agreemant->mother_name }}" required>
                                            @error('mother_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                             
                                        <div class="form-group col-span-12 md:col-span-3">
                                            <label for="inputpresent_address2">NID</label>
                                            <input type="text"
                                                class="form-control @error('mid') is_invalid @enderror" name="nid"
                                                value="{{ $customer->agreemant->nid }}" required>
                                            @error('nid')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-span-12 md:col-span-3">
                                            <label for="inputpresent_address2">Passport</label>
                                            <input type="text"
                                                class="form-control @error('passport') is_invalid @enderror" name="passport"
                                                value="{{ $customer->agreemant->passport }}" required>
                                            @error('passport')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-span-12 md:col-span-3">
                                            <label for="inputpresent_address2">Date of Birth</label>
                                            <input type="date"
                                                class="form-control @error('date_of_birth') is_invalid @enderror"
                                                name="date_of_birth" value="{{ $customer->agreemant->date_of_birth }}">
                                            @error('date_of_birth')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                             
                                        <div class="form-group col-span-12 md:col-span-3">
                                            <label>Mobile</label>
                                            <input type="number"
                                                class="form-control @error('mobile') is_invalid @enderror"
                                                name="mobile" value="{{$customer->agreemant->phone}}">
                                            @error('mobile')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                       
                                        <div class="form-group col-span-12">
                                            <label>Present Address</label>
                                            <textarea class="form-control @error('present_address') is_invalid @enderror" name="present_address">{{ $customer->agreemant->present_address }}</textarea>
                                            @error('present_address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-span-12">
                                            <label>Permanent Address</label>
                                            <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address"
                                                >{{ $customer->agreemant->permanent_address }}</textarea>
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
                    {{-- END PROFILE INFORMATION UPDATE FORM BOX --}}

                    {{-- START EDUCATION UPDATE FORM BOX IMPLIMENT BY JAVASCRIPT --}}
                   
                    {{-- START EDUCATION UPDATE FORM BOX --}}
                </div>
                {{-- END PROFILE CONTENT --}}
            @endif
        </div>
    </div>





</x-student-app>
