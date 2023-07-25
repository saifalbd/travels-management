<x-student-app>
    <x-b-bar o="Profile" t="Update My Information"></x-b-bar>



    @slot('head')
        <script>
            window.eduUrl = "{{ route('student.educationUpdate') }}";
            window.socialUrl = "{{ route('student.addSocials') }}";
            window.postAvatar = "{{ route('student.changeAvatar') }}";
            window.socialError = {{ $errors->has('socials.*') ? 'true' : 'false' }}
            @if (!$isPassword)
                window.educations = @json($student->educations)
            @endif
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
                        <a href="{{ route('student.authInfo') }}"
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
                        <a href="{{ route('student.authInfo', ['password' => 1]) }}"
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
                        action="{{ route('student.passwordUpdate') }}" method="POST">
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
                                    <img id="avatar-temp" src="{{ $student->avatar->url }}" alt=""
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

                    {{--  START SOCIAL MODAL --}}
                    <div id="socialModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-3xl max-h-full ">
                            <!-- Modal content -->
                            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                                action="{{ route('student.addSocials') }}" method="POST">
                                @csrf
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-3 bg-slate-100 dark:bg-slate-700 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Add Social Links
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm 
                               w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="socialModal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-12 gap-1">
                                        <div class="col-span-12 flex justify-center items-center">

                                            @if ($errors->any('socials.*'))
                                                <ul class="border border-fuchsia-700 p-3 rounded-lg">
                                                    @foreach ($errors->get('socials.*') as $item)
                                                        <li class="text-orange-600 text-center">{{ $item[0] }}
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            @endif

                                        </div>
                                        @foreach ($socials as $index => $s)
                                            <div class="form-group col-span-12 md:col-span-3">
                                                <label>Flatfrom</label>
                                                <input type="text"
                                                    class="form-control @error('socials[{{ $index }}][prop]') is_invalid @enderror"
                                                    required name="socials[{{ $index }}][prop]"
                                                    value="{{ $s->prop }}" readonly>
                                                @error('socials[{{ $index }}][prop]')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-span-12 md:col-span-4">
                                                <label>Profile Name {{ $index }}
                                                    @error('socials.{{ $index }}.name')
                                                        is_invalid
                                                    @enderror
                                                </label>
                                                <input type="text"
                                                    class="form-control @error('socials.{{ $index }}.name') is_invalid @enderror"
                                                    name="socials[{{ $index }}][name]"
                                                    value="{{ $s->name }}">
                                                @error('socials.{{ $index }}].name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-span-12 md:col-span-5">
                                                <label>Profile Link</label>
                                                <input type="text"
                                                    class="form-control @error('socials[{{ $index }}][link]') is_invalid @enderror"
                                                    name="socials[{{ $index }}][link]"
                                                    value="{{ $s->link }}">
                                                @error('socials[{{ $index }}][link]')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="p-2 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 w-full bg-slate-100 dark:bg-slate-700 flex justify-center items-center">
                                    <button
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                                focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600
                                 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SAVE</button>

                                </div>
                            </form>
                        </div>
                    </div>
                    {{--  END SOCIAL MODAL --}}


                    {{-- START PROFILE INFORMATION --}}

                    <div class="p-4 border border-gray-300 flex flex-wrap justify-start items-center">
                        <div class="image-box">
                            <img id="avatar-main" class="max-w-[150px] rounded-full"
                                src="{{ $student->avatar->url }}" alt="" srcset="">
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
                            <h3 class="text-lg  mb-2">{{ $student->name }}</h3>
                            <div class="flex items-center dark:text-lime-50">
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
                            <div class="inline-flex rounded-md shadow-sm mt-2" role="group">
                                @if ($socials->where('prop', 'facebook')->where('has', true)->count())
                                    <a href="{{ $socials->where('prop', 'facebook')->first()->link }}"
                                        target="_blank"
                                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 8 19">
                                            <path fill-rule="evenodd"
                                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($socials->where('prop', 'twitter')->where('has', true)->count())
                                    <a href="{{ $socials->where('prop', 'twitter')->first()->link }}" target="_blank"
                                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 17">
                                            <path fill-rule="evenodd"
                                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($socials->where('prop', 'linkedin')->where('has', true)->count())
                                    <a href="{{ $socials->where('prop', 'linkedin')->first()->link }}"
                                        target="_blank"
                                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 15 15">
                                            <path fill-rule="evenodd"
                                                d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                                                clip-rule="evenodd" />
                                            <path d="M3 5.012H0V15h3V5.012Z" />
                                        </svg>
                                    </a>
                                @endif
                                <button data-modal-target="socialModal" data-modal-toggle="socialModal"
                                    title="Add Social Links" type="button"
                                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                    <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- END PROFILE INFORMATION --}}


                    {{-- START PROFILE INFORMATION UPDATE FORM BOX --}}
                    <div class="mt-4">
                        <form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{ route('student.store') }}"
                            enctype="multipart/form-data">
                            @csrf



                            {{-- Start Card --}}
                            <div
                                class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                                <div class="space-y-6">
                                    <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">General
                                        Information
                                    </h5>

                                    <div class="grid gap-1 sm:grid-cols-6">
                                        <div class="form-group col-span-12 md:col-span-2">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text"
                                                class="form-control @error('name') is_invalid @enderror" required
                                                name="name" value="{{ $student->name }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-span-12 md:col-span-2">
                                            <label for="inputpresent_address2">Father's/Husband Name</label>
                                            <input type="text"
                                                class="form-control @error('father_name') is_invalid @enderror"
                                                required name="father_name" value="{{ $student->father_name }}">
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
                                            <input type="text"
                                                class="form-control @error('mid') is_invalid @enderror"
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
                                            <select class="form-control" name="religion"
                                                value="{{ old('religion') }}">
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
                                                class="form-control @error('mobile') is_invalid @enderror"
                                                name="mobile" value="{{ old('mobile') }}">
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
                    {{-- END PROFILE INFORMATION UPDATE FORM BOX --}}

                    {{-- START EDUCATION UPDATE FORM BOX IMPLIMENT BY JAVASCRIPT --}}
                    <div class="mt-4" action="{{ route('student.educationUpdate') }}" id="eduformBox">

                    </div>
                    {{-- START EDUCATION UPDATE FORM BOX --}}
                </div>
                {{-- END PROFILE CONTENT --}}
            @endif
        </div>
    </div>





</x-student-app>
