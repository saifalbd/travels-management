<x-app>
   <x-b-bar o="Package Info" t="Create Package" :url="route('admin.package.index')" :add="false" >Package List</x-b-bar>

   <x-form-box  method="post" action="{{route('admin.package.store')}}">
      <div class="form-group col-span-12 md:col-span-12">
         <label for="inputEmail4">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{old('name')}}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Package Type</label>
         <select  class="form-control @error('type_id') is-invalid @enderror" required name="type_id" value="{{old('type_id')}}" id="pakTypeSelect">
            <option value="">Select Type</option>
            @foreach ($types as $type)
            <option value="{{$type->id}}" @selected(old('type_id') == $type->id)>{{$type->name}}</option> 
            @endforeach
         </select>
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Agreement Amount</label>
         <input type="number" class="form-control @error('amount') is-invalid @enderror" required name="amount" value="{{old('amount')}}">
         @error('amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Advance</label>
         <input type="number" class="form-control @error('advance') is-invalid @enderror" required name="advance" value="{{old('advance')}}">
         @error('advance')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

     
      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4" id="afterPermit">After Permit</label>
         <input type="number" class="form-control @error('after_permit') is-invalid @enderror" required name="after_permit" value="{{old('after_permit')}}">
         @error('after_permit')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4" id="afterVisa">After Visa</label>
         <input type="number" class="form-control @error('after_visa') is-invalid @enderror" required name="after_visa" value="{{old('after_visa')}}">
         @error('after_visa')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4" id="due">Due</label>
         <input type="number" class="form-control @error('due') is-invalid @enderror" required name="due" value="{{old('due')}}">
         @error('due')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>



      <div class="form-group col-span-12 bg-white">
         <label for="inputEmail4">Note</label>
         <x-trix-field id="bio" name="note" />
         
         @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
     


      
      <div class="form-group col-span-12">
         <label for="inputEmail4">Photo (Maximum 50 KB) </label>
         <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
         @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>


   </x-form-box>
   
 </x-app>