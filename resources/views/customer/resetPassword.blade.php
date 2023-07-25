<x-ins-app>
    <x-b-bar o="Instructor" t="Change Password"></x-b-bar>
    <x-form-box  method="post" action="{{route('ins.resetPassword.store')}}">
        <div class="form-group col-span-12">
            <label> New Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password') <div class="invalid-feedback">{{$message}}}</div> @enderror
        </div>

        <div class="form-group col-span-12">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation') <div class="invalid-feedback">{{$message}}}</div> @enderror
        </div>

    </x-form-box>

  
</x-ins-app>
