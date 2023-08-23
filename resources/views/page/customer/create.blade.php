
<x-app>
    <x-b-bar o="Customer Info" t="Create Customer Account" :url="route('admin.customer.index')" 
    :add="false" >
    </x-b-bar>

<form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{route('admin.customer.store')}}"
enctype="multipart/form-data">
@csrf

{{-- Start Card --}}
<div
    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <div class="space-y-6">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">General
            Information
        </h5>

        <x-error-alert></x-error-alert>

        <div class="grid gap-1 grid-cols-12">
            <div class="form-group col-span-12 md:col-span-8">
                <label for="inputEmail4">Name</label>
                <input type="text"
                    class="form-control @error('name') is_invalid @enderror" required
                    name="name" value="{{ old('name') }}">
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
                <input type="text"
                    class="form-control @error('father_name') is_invalid @enderror"
                    required name="father_name" value="{{ old('father_name') }}" required>
                @error('father_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-span-12 md:col-span-6">
                <label for="inputpresent_address2">Mother's Name</label>
                <input type="text"
                    class="form-control @error('mother_name') is_invalid @enderror"
                    name="mother_name" value="{{ old('mother_name') }}" required>
                @error('mother_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-span-12 md:col-span-3">
                <label for="inputpresent_address2">NID</label>
                <input type="text"
                    class="form-control @error('mid') is_invalid @enderror" name="nid"
                    value="{{ old('nid') }}" required>
                @error('nid')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-span-12 md:col-span-3">
                <label for="inputpresent_address2">Passport</label>
                <input type="text"
                    class="form-control @error('passport') is_invalid @enderror" name="passport"
                    value="{{ old('passport') }}" required>
                @error('passport')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-span-12 md:col-span-3">
                <label for="inputpresent_address2">Date of Birth</label>
                <input type="date"
                    class="form-control @error('date_of_birth') is_invalid @enderror"
                    name="date_of_birth" value="{{ old('date_of_birth') }}">
                @error('date_of_birth')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-span-12 md:col-span-3">
                <label>Mobile</label>
                <input type="number"
                    class="form-control @error('mobile') is_invalid @enderror"
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
                <textarea class="form-control @error('permanent_address') is_invalid @enderror" name="permanent_address"
                    >{{ old('permanent_address') }}</textarea>
                @error('permanent_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>

{{-- END Card --}}

<div
    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
    <div class="space-y-6">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Package
            Information
        </h5>

        <div class="grid gap-1 grid-cols-12">
            <div class="form-group col-span-12 md:col-span-4">
                <label for="inputpresent_address2">Package</label>
                <select class="form-control" name="package_id" required id="selectPackage">
                    <option value="">Select Package</option>   
                    @foreach ($packages as $p)
                    <option value="{{$p->id}}" @selected(old('package_id') == $p->id)>{{$p->name}}</option>   
                    @endforeach
                </select>
                @error('package_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group col-span-12 md:col-span-4">
                <label>Amount</label>
                <input type="number"
                    class="form-control @error('amount') is_invalid @enderror"
                    name="amount" value="{{ old('amount') }}">
                @error('amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-span-12 md:col-span-4">
                <label>Advance</label>
                <input type="number"
                    class="form-control @error('advance') is_invalid @enderror"
                    name="advance" value="{{ old('advance') }}">
                @error('advance')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-span-12 md:col-span-4">
                <label>After Permit</label>
                <input type="number"
                    class="form-control @error('after_permit') is_invalid @enderror"
                    name="after_permit" value="{{ old('after_permit') }}">
                @error('after_permit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-span-12 md:col-span-4">
                <label id="afterVisa">After Visa</label>
                <input type="number"
                    class="form-control @error('after_visa') is_invalid @enderror"
                    name="after_visa" value="{{ old('after_visa') }}">
                @error('after_visa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            
            <div class="form-group col-span-12 md:col-span-4">
                <label id="due">Due</label>
                <input type="number"
                    class="form-control @error('due') is_invalid @enderror"
                    name="due" value="{{ old('due') }}">
                @error('due')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </div>
</div>


{{-- Start Card --}}
<div class="col-span-12 md:col-span-6 flex justify-center">
    <x-submit-btn></x-submit-btn>
</div>
</form>


    </x-b-bar>