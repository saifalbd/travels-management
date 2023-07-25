<x-app>
   <x-b-bar o="Customer Info" t="Edit Customer Account" :url="route('admin.customer.index')" 
   :add="false" >
   @slot('icon')<x-icon.instructor></x-icon.instructor>@endslot
   Instructor List</x-b-bar>


   <x-form-box  method="post" action="{{route('customer.update',['customer'=>$customer->id])}}"  enctype="multipart/form-data" >
      @method('PUT')

      <div class="form-group col-span-12 md:col-span-3">
         <label for="inputEmail4">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{$instructor->name}}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-3">
         <label for="inputEmail4"> Specialty</label>
         <select name="specialty" class="form-control @error('specialty') is-invalid @enderror">
            <option value="">---</option>
            @foreach (["Diploma In Graphic Design","Professional Web Design",
            "Office Application [Basic]","Computer Hardware",
            "Computer Hardware",
            "Digital Marketing",
            "Motion Graphics & VFX",
            "Spoken English"] as $item)
               <option value="{{$item}}" @selected($item==$instructor->specialty)>{{$item}}</option> 
            @endforeach
            
         </select>
         @error('specialty')<div class="invalid-feedback">{{ $message }}</div>@enderror

      </div>

      <div class="form-group col-span-12 md:col-span-2">
         <label for="inputEmail4">NID</label>
         <input type="text" class="form-control  @error('nid') is-invalid @enderror" name="nid" value="{{$instructor->nid}}">
         @error('nid')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label for="inputEmail4">Designation</label>
         <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{$instructor->designation}}">
         @error('designation')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-3">
         <label for="inputAddress2">Father's Name</label>
         <input type="text" class="form-control @error('father_name') is-invalid @enderror" required name="father_name" value="{{$instructor->father_name}}">
         @error('father_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-3">
         <label for="inputAddress2">Mother's Name</label>
         <input type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name"  value="{{$instructor->mother_name}}">
         @error('mother_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-2">
         <label >Mobile</label>
         <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{$instructor->mobile}}">
         @error('mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-4">
         <label >E-mail</label>
         <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{$instructor->email}}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-8">
         <label >Address</label>
         <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$instructor->address}}">
         @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-2">
         <label >Joining Date</label>
         <input type="date" class="form-control @error('join_date') is-invalid @enderror" name="join_date" value="{{$instructor->join_date}}">
         @error('join_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-2">
         <label >Monthly Salary</label>
         <input type="number" class="form-control  @error('salary') is-invalid @enderror" name="salary"  value="{{$instructor->salary}}">
         @error('salary')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group col-span-12 md:col-span-4">
         <label >Facebook</label>
         <input type="text" class="form-control  @error('facebook') is-invalid @enderror" name="facebook"  value="{{$instructor->facebook}}">
         @error('facebook')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-4">
         <label >Twitter</label>
         <input type="text" class="form-control  @error('twitter') is-invalid @enderror" name="twitter"  value="{{$instructor->twitter}}">
         @error('twitter')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group col-span-12 md:col-span-4">
         <label >Linkedin</label>
         <input type="text" class="form-control  @error('linkedin') is-invalid @enderror" name="linkedin"  value="{{$instructor->linkedin}}">
         @error('linkedin')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group with-avatar col-span-12 md:col-span-6" id="avatarFgroup">
         <div class="avarar-box">
             <img src="{{$instructor->avatar->url}}" alt="" srcset="">
         </div>
        <div>
         <label for="inputEmail4">Photo (Maximum 50 KB) </label>
         <input type="file" class="form-control @error('photo') is_invalid @enderror" name="photo"
                value="{{ old('photo') }}" onchange="imageChange(event,'avatarFgroup')">
                @error('photo') <div class="invalid-feedback">{{$message}}}</div> @enderror
        </div>
     </div>



   </x-form-box>

</x-app>
