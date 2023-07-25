<x-app>
   <x-b-bar o="Package Info" t="Create Package" :url="route('admin.package.index')" :add="false" >Package List</x-b-bar>

   <x-form-box  method="post" action="{{route('admin.package.store')}}">
      <div class="form-group col-span-12">
         <label for="inputEmail4">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{old('name')}}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

     


      
      <div class="form-group col-span-12">
         <label for="inputEmail4">Photo (Maximum 50 KB) </label>
         <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
         @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>


   </x-form-box>
   
 </x-app>