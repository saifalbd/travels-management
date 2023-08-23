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
            <form class="grid gap-1 sm:grid-cols-6" method="POST" action="{{ route('customer.agreementPackage.store') }}"
                enctype="multipart/form-data">
                @csrf

                {{-- Start Card --}}
                <div
                    class="col-span-12 md:col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Package Information
                        </h5>

                        <div class="grid gap-1 grid-cols-12">
                            <div class=" col-span-3"></div>
                            
                            <div class="form-group col-span-12  md:col-span-6">
                                <label for="inputpresent_address2">Package</label>
                                <select class="form-control" name="package_id" id="package" required>
                                    <option value="">Select Package</option>   
                                    @foreach ($packages as $p)
                                    <option value="{{$p->id}}" @selected(old('package_id') == $p->id)>{{$p->name}}</option>   
                                    @endforeach
                                </select>
                                @error('package_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                
                            <div class="form-group col-span-12 md:col-span-4 hidden">
                                <label>Amount</label>
                                <input type="number"
                                    class="form-control @error('amount') is_invalid @enderror"
                                    name="amount" value="{{ old('amount') }}" id="amount" readonly>
                                @error('amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <div class="form-group col-span-12 md:col-span-4 hidden">
                                <label>Advance</label>
                                <input type="number"
                                    class="form-control @error('advance') is_invalid @enderror"
                                    name="advance" value="{{ old('advance') }}" id="advance" readonly>
                                @error('advance')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-span-12 md:col-span-4 hidden">
                                <label>After Permit</label>
                                <input type="number"
                                    class="form-control @error('after_permit') is_invalid @enderror"
                                    name="after_permit" value="{{ old('after_permit') }}" id="after_permit" readonly>
                                @error('after_permit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <div class="form-group col-span-12 md:col-span-4 hidden">
                                <label>After Visa</label>
                                <input type="number"
                                    class="form-control @error('after_visa') is_invalid @enderror"
                                    name="after_visa" value="{{ old('after_visa') }}" id="after_visa" readonly>
                                @error('after_visa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            
                            <div class="form-group col-span-12 md:col-span-4 hidden">
                                <label>Due</label>
                                <input type="number"
                                    class="form-control @error('due') is_invalid @enderror"
                                    name="due" value="{{ old('due') }}" id="due" readonly>
                                @error('due')
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

    <script>
        window.packages = {!!$packages->toJson()!!};

        const pack = document.getElementById('package');
const amount = document.getElementById('amount');
const advance = document.getElementById('advance');
const after_permit = document.getElementById('after_permit');
const after_visa = document.getElementById('after_visa');
const due = document.getElementById('due');

pack.addEventListener('change',function(){
  const val =   this.value;
  if(val){
    const model  = window.packages.find(item=>item.id==parseInt(val));
    amount.value = model.amount;
    advance.value = model.advance;
    after_permit.value = model.after_permit;
    after_visa.value = model.after_visa;
    due.value = model.due;
  }else{
    amount.value ='';
    advance.value = '';
    after_permit.value = '';
    after_visa.value = '';
    due.value = '';
  }
})

       
    </script>
</body>

</html>
