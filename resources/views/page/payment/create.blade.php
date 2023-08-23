<x-app>
	<x-b-bar o="Fees Collectio" t="Payment Receive" :url="route('admin.customer.payment.index')" :add="false" >
		@slot('icon')<x-icon.fee></x-icon.fee>@endslot
		Received Record</x-b-bar>

	<x-form-box  method="post" action="{{route('admin.customer.payment.store')}}" enctype="multipart/form-data" >
		<div class="form-group col-span-12 md:col-span-6">
			<label for="inputAddress2">Customer</label>
			@if($byCustomer_id)
			<input type="hidden" name="customer_id" value="{{$byCustomer_id}}">
			@endif
			<select name="customer_id" class="form-control js-select2 @error('customer_id') is-invalid @enderror" @disabled(!!$byCustomer_id) value="{{$byCustomer_id}}">
				<option value="">---</option>
			
				@foreach($customers as $customer)
				<option value="{{$customer->id}}" @selected($customer->id == $byCustomer_id?$byCustomer_id: old('customer_id'))> {{$customer->id}}/ {{$customer->name}}</option>
				@endforeach
			</select>
			@error('customer_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>
		

		<div class="form-group col-span-12 md:col-span-3">
			<label for="inputEmail4">Amount</label>
			<input type="number" class="form-control @error('amount') is-invalid @enderror" value="{{old('amount')}}" required name="amount">
			@error('amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>
		<div class="form-group col-span-12 md:col-span-3">
			<label for="inputEmail4"> Date</label>
			<input type="date" class="form-control @error('date') is-invalid @enderror" required name="date" value="{{old('date')}}">
			@error('date')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>

		<div class="form-group col-span-12 md:col-span-4">
			<label for="inputAddress2">Payment Method</label>
			<select id="payMethod" class="form-control @error('payment_method') is-invalid @enderror" required name="payment_method">
				
				<option value="bank" @selected('bank'==old('method'))>Bank Disposit</option>
				<option value="check" @selected('check'==old('method'))>Provide Check</option>
				<option value="cash" @selected('cash'==old('method'))>Cash In Hand</option>

			</select>
			@error('payment_method')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>

		<div class="form-group col-span-12 md:col-span-4" id="bank">
			<label for="inputAddress2"> Bank </label>
			<select  class="form-control @error('bank_id') is-invalid @enderror"  name="bank_id">
				<option value="">Select Bank</option>
			@foreach($banks as $bank)
			<option value="{{$bank->id}}" @selected($bank->id==old('bank_id'))>{{$bank->name}}</option>
			@endforeach

			</select>
			@error('bank_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>


		<div class="form-group col-span-12 md:col-span-4" id="branchName">
			<label>Branch Name</label>
			<input type="text" class="form-control @error('branch') is-invalid @enderror" name="branch">
			@error('branch')<div class="invalid-feedback">{{ $message }}</div>@enderror
		</div>
        <div class="form-group col-span-12 md:col-span-4" id="checkNumber">
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
	
</x-app>
