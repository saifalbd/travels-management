<x-app>

    <x-b-bar o="Settings" t="System Information" ></x-b-bar>

    <x-form-box  method="post" action="{{route('admin.storeSetting')}}">
        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center "> Organization </label>
            <div class="col-span-8 p-1">
                <input type="text" name="institute" class="form-control @error('institute') is-invalid @enderror" value="{{$s->institute}}">
            </div>
        </div>

        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center">Proprietor/Slogan </label>
            <div class="col-span-8 p-1">
                <input type="text" name="tagline" class="form-control @error('tagline') is-invalid @enderror" value="{{$s->tagline}}">
            </div>
        </div>

        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center">Address</label>
            <div class="col-span-8 p-1">
                <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror" value="{{$s->address}}">
            </div>
        </div>
        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center">Mobile</label>
            <div class="col-span-8 p-1">
                <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$s->mobile}}">
            </div>
        </div>

        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center">Email</label>
            <div class="col-span-8 p-1">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$s->email}}" autocomplete="off">
            </div>
        </div>

        

        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center">Rectangle Logo</label>
            <div class="col-span-8 p-1 logo-box with-avatar" id="avatarFgroup">
                
                <div class="avarar-box">
                    <img src="{{$s->rLogo->url}}" alt="" srcset="">
                </div>
                <div>
                    <input onchange="imageChange(event,'avatarFgroup')" type="file" class="form-control" name="logoRectangle" @error('logoRectangle') is-invalid @enderror>
                </div>
            </div>
        </div>

        <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
            <label for="staticEmail" class="col-span-4 flex items-center">Square Logo</label>
            <div class="col-span-8 p-1 logo-box with-avatar" id="avatarRgroup">
                
                <div class="avarar-box">
                    <img src="{{$s->sLogo->url}}" alt="" srcset="">
                </div>
<div>                <input  onchange="imageChange(event,'avatarRgroup')" type="file" class="form-control" name="logoSquare" @error('logoSquare') is-invalid @enderror></div>
                
            </div>
        </div>



      
     

    </x-form-box>

</x-app>
