<x-student-app class="dashboard">
    <x-b-bar o="Payment" t=""></x-b-bar>

    <x-form-box  method="post" action="{{route('customer.payment.store')}}" enctype="multipart/form-data" >
	

    
		<div class="form-group col-span-12 md:col-span-4">
			<label for="inputEmail4">Pay Amount</label>
			<input type="number" class="form-control @error('amount') is-invalid @enderror" value="{{old('amount')}}" required name="amount">
			@error('amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>
		<div class="form-group col-span-12 md:col-span-4">
			<label for="inputEmail4">Payment Date</label>
			<input type="date" class="form-control @error('date') is-invalid @enderror" required name="date" value="{{old('date')}}">
			@error('date')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>

		<div class="form-group col-span-12 md:col-span-4">
			<label for="inputAddress2"> Bank Name</label>
			<select  class="form-control @error('bank_id') is-invalid @enderror" required name="bank_id">
			@foreach($banks as $bank)
			<option value="{{$bank->id}}" @selected($bank->id==old('bank_id'))>{{$bank->name}}</option>
			@endforeach

			</select>
			@error('bank_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>


		<div class="form-group col-span-12 md:col-span-6">
			<label>Branch Name</label>
			<input type="text" class="form-control @error('branch') is-invalid @enderror" name="branch">
			@error('branch')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>
        <div class="form-group col-span-12 md:col-span-6">
			<label>Check Number</label>
			<input type="text" class="form-control @error('check_no') is-invalid @enderror" name="check_no">
			@error('check_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>


        <div class="form-group col-span-12 md:col-span-12">
			<label>Attachment</label>
			<input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
			@error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>

		<div class="form-group col-span-12 md:col-span-12">
			<label for="inputAddress2">Remark</label>
			<input type="text" class="form-control" name="remark">
			@error('remark')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>

	</x-form-box>
	
</x-student-app>