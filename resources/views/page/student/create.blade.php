<x-app>
    <x-b-bar o="Student" t="Addmitions" :url="route('student.index')" :add="false">Admission List</x-b-bar>
    <div class="form-box p-4 bg-yellow-50 dark:bg-slate-800 mt-3">
        <div>
            <form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{ route('student.store') }}"
                enctype="multipart/form-data">
                @csrf



                {{-- Start Card --}}
                <div
                    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Student Information</h5>

                        <div class="grid gap-1 sm:grid-cols-6">
                            <div class="form-group col-span-12 md:col-span-2">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control @error('name') is_invalid @enderror" required
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label for="inputpresent_address2">Father's/Husband Name</label>
                                <input type="text" class="form-control @error('father_name') is_invalid @enderror"
                                    required name="father_name" value="{{ old('father_name') }}">
                                @error('father_name')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label for="inputpresent_address2">Mother's Name</label>
                                <input type="text" class="form-control @error('mother_name') is_invalid @enderror"
                                    name="mother_name" value="{{ old('mother_name') }}">
                                @error('mother_name')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label for="inputpresent_address2">Gender</label>
                                <select class="form-control" name="gender" value="{{ old('gender') }}">
                                    <option value="Male"> Male </option>
                                    <option value="Female"> Female </option>
                                </select>
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label for="inputpresent_address2">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is_invalid @enderror"
                                    name="date_of_birth" value="{{ old('date_of_birth') }}">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-span-12 md:col-span-2">
                                <label >Highest Educational Qualification</label>
                                <input type="text" class="form-control @error('education') is_invalid @enderror"
                                    name="education" value="{{ old('education') }}"
                                    placeholder="Ex: HSC with GPA 4.50">
                                @error('education')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-span-12 md:col-span-2">
                                <label >Occupation </label>
                                <select class="form-control @error('occupation') is_invalid @enderror" name="occupation"
                                    value="{{ old('occupation') }}">
                                    <option value="Student"> Student </option>
                                    <option value="Job"> Job </option>
                                    <option value="Bussiness"> Bussiness </option>
                                </select>
                                @error('occupation')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-span-12 md:col-span-2">
                                <label >Mobile</label>
                                <input type="number" class="form-control @error('mobile') is_invalid @enderror"
                                    name="mobile" value="{{ old('mobile') }}">
                                @error('mobile')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >Guardian's Mobile</label>
                                <input type="number"
                                    class="form-control @error('guardian_mobile') is_invalid @enderror"
                                    name="guardian_mobile" value="{{ old('guardian_mobile') }}">
                                @error('guardian_mobile')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label >E-mail</label>
                                <input type="email" class="form-control @error('email') is_invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-span-12 md:col-span-3" id="avatarFgroup">
                                <div class="avarar-box">
                                    <img src="{{ asset('assets/img/avatar.png') }}" alt="" srcset="">
                                </div>
                                <div>
                                    <label for="inputEmail4">Photo (Maximum 50 KB) </label>
                                    <input type="file" class="form-control @error('photo') is_invalid @enderror"
                                        name="photo" value="{{ old('photo') }}"
                                        onchange="imageChange(event,'avatarFgroup')">
                                    @error('photo')
                                        <div class="invalid-feedback">{{ $message }}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-span-12 md:col-span-3">
                                <label >Present Address</label>
                                <textarea class="form-control @error('present_address') is_invalid @enderror" name="present_address"
                                    value="{{ old('present_address') }}"> </textarea>
                                @error('present_address')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label >Permanent Address</label>
                                <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address"
                                    value="{{ old('permanent_address') }}"> </textarea>
                                @error('permanent_address')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                        </div>



                    </div>
                </div>

                {{-- END Card --}}


                {{-- Start Card --}}
                <div
                    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Course Information</h5>

                        <div class="grid gap-x-1 gap-y-4 sm:grid-cols-12">

                            <div class="form-group col-span-12 md:col-span-4">
                                <label for="inputEmail4"> Type </label>
                                <select name="type" id="type" value="{{ old('type') }}" required
                                    class="js-select2 form-control @error('type') is_invalid @enderror" occupation>
                                    <option>---</option>
                                    <option value="Certificate"> Certificate </option>
                                    <option value="Non-Certificate"> Non-Certificate </option>
                                    <option value="Others"> Others </option>

                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-4">
                                <label for="inputEmail4">Course</label>
                                <select name="course_id" value="{{ old('course_id') }}"
                                    class="form-control js-select2 @error('course_id') is_invalid @enderror">
                                    <option value="">---</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach


                                </select>
                                @error('course_id')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-4">
                                <label for="inputthird2">Batch</label>
                                <select name="batch_id" value="{{ old('batch_id') }}"
                                    class="form-control js-select2 @error('batch_id') is_invalid @enderror">
                                    <option value="">----</option>
                                    @foreach ($batches as $batch)
                                        <option value="{{ $batch->id }}">{{ $batch->title }}</option>
                                    @endforeach
                                </select>
                                @error('batch_id')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputEmail4">Roll No.</label>
                                <input type="number" class="form-control @error('roll') is_invalid @enderror"
                                    name="roll" value="{{ old('roll') }}">
                                @error('roll')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputEmail4">Registration No.</label>
                                <input type="number"
                                    class="form-control @error('registration_no') is_invalid @enderror"
                                    name="registration_no" value="{{ old('registration_no') }}">
                                @error('registration_no')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputthird2">Academic Year</label>
                                <input type="text"
                                    class="form-control @error('academic_year') is_invalid @enderror"
                                    name="academic_year" value="{{ old('academic_year') }}">
                                @error('academic_year')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputthird2">Session</label>
                                <input type="text" class="form-control @error('session') is_invalid @enderror"
                                    name="session" value="{{ old('session') }}">
                                @error('session')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END Card --}}

                {{-- Start Card --}}
                <div
                    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Fees Information</h5>

                        <div class="grid gap-x-1 gap-y-4 sm:grid-cols-12">

                            <div class="form-group col-span-12 md:col-span-4">
                                <label for="inputthird2">Fee</label>
                                <input type="number" class="form-control @error('fee') is_invalid @enderror"
                                    id="fee" name="fee" value="{{ old('fee') }}">
                                @error('fee')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-span-12 md:col-span-4">
                                <label >Discount</label>
                                <input type="number" class="form-control @error('discount') is_invalid @enderror"
                                    id="discount" name="discount" value="{{ old('discount') }}">
                                @error('discount')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-span-12 md:col-span-4">
                                <label >Payable</label>
                                <input type="number" class="form-control @error('payable') is_invalid @enderror"
                                    id="payable" name="payable" value="{{ old('payable') }}">
                                @error('payable')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >1st Installment</label>
                                <input type="number" class="form-control @error('first') is_invalid @enderror"
                                    name="first" value="{{ old('first') }}">
                                @error('first')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >1st Installment Date</label>
                                <input type="date" class="form-control @error('first_date') is_invalid @enderror"
                                    name="first_date" value="{{ old('first_date') }}">
                                @error('first_date')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >2nd Installment</label>
                                <input type="number" class="form-control @error('second') is_invalid @enderror"
                                    name="second" value="{{ old('second') }}">
                                @error('second')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >2nd Installment Date </label>
                                <input type="date" class="form-control @error('second_date') is_invalid @enderror"
                                    name="second_date" value="{{ old('second_date') }}">
                                @error('second_date')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >3rd Installment</label>
                                <input type="text" class="form-control @error('third') is_invalid @enderror"
                                    name="third" value="{{ old('third') }}">
                                @error('third')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >3rd Installment Date </label>
                                <input type="date" class="form-control @error('third_date') is_invalid @enderror"
                                    name="third_date" value="{{ old('third_date') }}">
                                @error('third_date')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Start Card --}}
                <div
                    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Reference</h5>

                        <div class="grid gap-x-1 gap-y-4 sm:grid-cols-12">
                            <div class="form-group col-span-12 md:col-span-4">
                                <label >Reference</label>
                                <input type="text" class="form-control @error('ref') is_invalid @enderror"
                                    name="ref" value="{{ old('ref') }}">
                                @error('reference')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-6">
                                <label >Ref. Address</label>
                                <input type="text" class="form-control @error('ref_address') is_invalid @enderror"
                                    name="ref_address" value="{{ old('ref_address') }}">
                                @error('ref_address')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-2">
                                <label >Ref. Mobile</label>
                                <input type="number" class="form-control @error('ref_mobile') is_invalid @enderror"
                                    name="ref_mobile" value="{{ old('ref_mobile') }}">
                                @error('ref_mobile')
                                    <div class="invalid-feedback">{{ $message }}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>






                <div class="col-span-12 md:col-span-6 flex justify-center">
                    <x-submit-btn></x-submit-btn>
                </div>





            </form>
        </div>

</x-app>
