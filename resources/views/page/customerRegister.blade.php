<x-login-layout type="Customer">
    <x-error-alert></x-error-alert>
    <form class="space-y-4 md:space-y-6" method="POST" action="{{route('customer.register.store')}}">
        @csrf
        <div class="form-group" x-data="{ isError: {{$errors->has('name')?'true':'false'}} }">
            <label for="name" class="label">Your Name</label>
            <input @click="isError = false" type="text" name="name" class="form-control" :class="{'is-invalid':isError}"
             placeholder="Name Here..." value="" required="">
            @error('name')
            <div class="invalid-feedback"  x-show="isError">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group" x-data="{ isError: {{$errors->has('mobile')?'true':'false'}} }">
            <label for="mobile" class="label">Your mobile</label>
            <input @click="isError = false" type="number" name="mobile" class="form-control" :class="{'is-invalid':isError}"
             placeholder="01********" value="" required="">
            @error('mobile')
            <div class="invalid-feedback"  x-show="isError">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group" x-data="{ isError: {{$errors->has('password')?'true':'false'}} }">
            <label for="password" class="label">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="form-control" :class="{'is-invalid':isError}" required="">
            @error('password')
            <div class="invalid-feedback"  x-show="isError">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group" x-data="{ isError: {{$errors->has('password_confirmation')?'true':'false'}} }">
            <label for="password" class="label">Confirm Password</label>
            <input type="password" name="password_confirmation"  placeholder="••••••••" class="form-control" :class="{'is-invalid':isError}" required="">
            @error('password_confirmation')
            <div class="invalid-feedback"  x-show="isError">{{$message}}</div>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                </div>
            </div>
            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
        </div>
        <button type="submit" class="w-full btn-primary">Sign in</button>
    <div class="flex justify-around">
        <a class="guerd-btn" href="{{ route('admin.login') }}">Admin Login</a>
        {{-- <a class="guerd-btn" href="{{route('ins.login.page')}}">Teacher Login</a> --}}
       
    </div>
    </form>
</x-login-layout>