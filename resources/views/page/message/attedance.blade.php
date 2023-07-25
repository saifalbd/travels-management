<x-app>
    <x-b-bar o="Message" t="Attendence Message" 
    :add="false" ></x-b-bar>

    <x-form-box method="get" action="{{route('message.attendanceForm')}}">
        <div class="form-group col-span-12 md:col-span-8">
            <label for="inputthird2">Batch</label>
           <select name="batch" class="form-control"  required >
           
               <option value="">---</option>
               @foreach ($batches as $item)
               <option value="{{$item->id}}">{{$item->title}}</option> 
               @endforeach
                    </select>
           </div>
           
            <div class="form-group col-span-12 md:col-span-4">
              <label for="inputthird2">Date</label>
              <input type="date" class="form-control" name="date" required>
           </div>

    </x-form-box>

</x-app>
