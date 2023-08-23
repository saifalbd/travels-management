<x-app>
    <x-b-bar o="Bank Info" t="Edit Bank Account" :url="route('admin.bank.index')" :add="false" >Bank List</x-b-bar>
 
    <x-form-box  method="post" action="{{route('admin.bank.update',['bank'=>$bank->id])}}">
        @method('PUT')
       <div class="form-group col-span-12 md:col-span-4">
          <label for="inputEmail4">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{$bank->name}}">
          @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
       </div>
 
       <div class="form-group col-span-12 md:col-span-4">
          <label >Branch</label>
          <input type="text" class="form-control @error('branch') is-invalid @enderror" name="branch"  value="{{$bank->branch}}">
          @error('branch')<div class="invalid-feedback">{{ $message }}</div>@enderror
       </div>
 
       <div class="form-group col-span-12 md:col-span-4">
          <label >Account Number</label>
          <input type="number" class="form-control @error('number') is-invalid @enderror"  name="number"  value="{{$bank->number}}">
          @error('number')<div class="invalid-feedback">{{ $message }}</div>@enderror
       </div>
 
       
 
   
       
    
    </x-form-box>
    
  </x-app>