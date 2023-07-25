<x-app>
    <x-b-bar o="Message" t="Send Bulk SMS" 
    :add="false" ></x-b-bar>

    <x-form-box method="post" action="{{route('message.bulkStore')}}">
        <div class="form-group col-span-12">
            <label>Batch</label>
            <select name="batch" class="form-control js-select2 @error('batch') is-invalid @enderror"  required >

                <option value="">---</option>

                @foreach($batches as $batch)
                <option value="{{$batch->id}}">{{$batch->title}}</option>
                @endforeach

            </select>
            @error('batch')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group col-span-12">
            <label> Massage </label>
            <textarea name="message" rows="3" id="field" onkeyup="countChar(this)" required class="form-control @error('message') is-invalid @enderror" maxlength="160"></textarea>
            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </x-form-box>

   
</x-app>
