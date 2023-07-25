<x-app>
   <x-b-bar o="User Info" t="Create User Account" :url="route('admin.user.index')" :add="false" >User List</x-b-bar>

   <x-form-box  method="post" action="{{route('admin.user.store')}}">
      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{old('name')}}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label >Mobile</label>
         <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{old('mobile')}}">
         @error('mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label >E-mail</label>
         <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{old('email')}}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-3">
         <label >Role</label>
         <select type="email" class="form-control @error('role') is-invalid @enderror"  name="role">
             <option value="">Select Role</option>
             <option value="admin" @selected(old('role')=='admin')>Admin</option>
             <option value="hr" @selected(old('role')=='hr')>Human Resources (HR)</option>
         </select>
         @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-3">
         <label >Password</label>
         <input type="text" class="form-control @error('password') is-invalid @enderror"  name="password"  value="{{old('password')}}">
         @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      
      
      <div class="form-group col-span-12 md:col-span-6">
         <label for="inputEmail4">Photo (Maximum 50 KB) </label>
         <input type="file" class="form-control" name="photo"   value="{{old('photo')}}">
         @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>


   </x-form-box>
   
 </x-app>