<x-student-app class="dashboard">
    <x-b-bar o="Review" t=""></x-b-bar>


    <x-form-box method="post" action="{{ route('customer.review.store') }}" >

        <div class="form-group col-span-12">
            <label for="inputEmail4">Review</label>
            <textarea rows="7" class="form-control @error('review') is-invalid @enderror"
                 name="review" placeholder="Give a Review About {{config('app.name')}}">{{$text}}</textarea>
            @error('review')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </x-form-box>
    
</x-student-app>