<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/student.scss', 'resources/js/student/student.ts'])
</head>

<body class="flex justify-center">
    <div class="container">
        <div class="mt-4">
            <form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{route('customer.agreemant.store')}}" enctype="multipart/form-data">
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
                                <input type="text" class="form-control @error('name') is_invalid @enderror" required
                                    name="name" value="{{ $customer->name }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="form-group col-span-12 md:col-span-4">
                                <label for="inputpresent_address2">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option value="Male" @selected(old('gender') == 'Male')> Male </option>
                                    <option value="Female" @selected(old('gender') == 'Female')> Female </option>
                                </select>
                            </div>
    
                            <div class="form-group col-span-12 md:col-span-6">
                                <label for="inputpresent_address2">Father's/Husband Name</label>
                                <input type="text" class="form-control @error('father_name') is_invalid @enderror"
                                    required name="father_name" value="{{ old('father_name') }}" required>
                                @error('father_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-6">
                                <label for="inputpresent_address2">Mother's Name</label>
                                <input type="text" class="form-control @error('mother_name') is_invalid @enderror"
                                    name="mother_name" value="{{ old('mother_name') }}" required>
                                @error('mother_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputpresent_address2">NID</label>
                                <input type="text" class="form-control @error('mid') is_invalid @enderror" name="nid"
                                    value="{{ old('nid') }}" required>
                                @error('nid')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputpresent_address2">Passport</label>
                                <input type="text" class="form-control @error('passport') is_invalid @enderror"
                                    name="passport" value="{{ old('passport') }}" required>
                                @error('passport')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-3">
                                <label for="inputpresent_address2">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is_invalid @enderror"
                                    name="date_of_birth" value="{{ old('date_of_birth') }}">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="form-group col-span-12 md:col-span-3">
                                <label>Mobile</label>
                                <input type="number" class="form-control @error('mobile') is_invalid @enderror"
                                    name="mobile" value="{{ old('mobile') }}">
                                @error('mobile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="form-group col-span-12">
                                <label>Present Address</label>
                                <textarea class="form-control @error('present_address') is_invalid @enderror" name="present_address">{{ old('present_address') }}</textarea>
                                @error('present_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12">
                                <label>Permanent Address</label>
                                <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address">{{ old('permanent_address') }}</textarea>
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
    </div>
</body>

</html>
