<x-app>
    <x-b-bar o="User" t="Update User Information"></x-b-bar>
    <x-form-box  method="post" action="{{route('authInfo.store')}}">
        <div class="form-group col-span-4">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control @error('fullName') is-invalid @enderror" required="" value="{{$user->name}}" name="fullName" >
        </div>
        <div class="form-group col-span-4">
            <label for="inputEmail4">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" required="" value="{{$user->email}}"
                   name="email">
        </div>
        <div class="form-group col-span-4">
            <label for="inputEmail4">Mobile</label>
            <input type="number" class="form-control @error('mobile') is-invalid @enderror" required="" value="{{$user->mobile}}" name="mobile">
        </div>
        <div class="form-group col-span-6">
            <label for="inputEmail4"> Photo</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
        </div>
    </x-form-box>
  
   

</x-app>
