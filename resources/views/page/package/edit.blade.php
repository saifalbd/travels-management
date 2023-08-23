<x-app>
   <x-b-bar o="Package Info" t="Edit Package" :url="route('admin.package.index')" :add="false" >Package List</x-b-bar>

   <x-form-box  method="post" action="{{route('admin.package.update',['package'=>$package->id])}}">
      @method('PUT')
      <div class="form-group col-span-12">
         <label for="inputEmail4">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{$package->name}}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Package Type</label>
         <select  class="form-control @error('type_id') is-invalid @enderror" required name="type_id"  id="pakTypeSelect">
            <option value="">Select Type</option>
            @foreach ($types as $type)
            <option value="{{$type->id}}" @selected($package->type_id == $type->id)>{{$type->name}}</option> 
            @endforeach
         </select>
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Agreement Amount</label>
         <input type="number" class="form-control @error('amount') is-invalid @enderror" required name="amount" 
         value="{{$package->amount}}">
         @error('amount')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Advance</label>
         <input type="number" class="form-control @error('advance') is-invalid @enderror" required 
         name="advance" value="{{$package->advance}}">
         @error('advance')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

     
      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">After Permit</label>
         <input type="number" class="form-control @error('after_permit') is-invalid @enderror" 
         required name="after_permit" value="{{$package->after_permit}}">
         @error('after_permit')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4"  id="afterVisa">After Visa</label>
         <input type="number" class="form-control @error('after_visa') is-invalid @enderror" 
         required name="after_visa" value="{{$package->after_visa}}">
         @error('after_visa')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4"  id="due">Due</label>
         <input type="number" class="form-control @error('due') is-invalid @enderror" required name="due"
          value="{{$package->due}}">
         @error('due')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>



      <div class="form-group col-span-12">
         <label for="inputEmail4">Note</label>
         <x-trix-field id="bio" name="note" value="{!! $package->body->toTrixHtml() !!}"/>
         @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
     

   
      
      <div class="form-group col-span-12">
         <label for="inputEmail4">Photo (Maximum 50 KB) </label>
         <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
         @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>


   </x-form-box>
   
 </x-app>