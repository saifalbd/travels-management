<x-app>
    <x-b-bar o="Message" t="Send Dues SMS" 
    :add="false" ></x-b-bar>

    <x-form-box method="get" action="{{route('message.dueForm')}}">

        <div class="col-span-12 border-b border-fuchsia-900 pb-3">
            *** Click on the button below to send a mobile message informing the trainees about the dues
            fee.<br>
            *** Charges will be applicable at regular rate for each SMS.
        </div>


        <div class="form-group col-span-12 md:col-span-6 md:col-start-4">
         <label>Batch</label>
            <select name="batch" class="form-control @error('batch') is-invalid @enderror">
                <option value="">Select Batch</option>
                @foreach ($batches as $item)
                <option value="{{$item->id}}">{{$item->title}}</option> 
                @endforeach
            </select>
            @error('batch')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="input-group col-span-12 md:col-span-6 md:col-start-4">

          </div>

        

    </x-form-box>
    
    @slot('script')
    <script>

const crudeAlert = (property)=>{
  const queryString = window.location.search;
const parameters = new URLSearchParams(queryString);
const success = parameters.get(property);
if(success){
    swal({
        position: 'center',
        icon: 'success',
        title: success,
        showConfirmButton: false,
        timer: 1500
      })
      parameters.delete(property)
      const newUrl = `${window.location.origin}${window.location.pathname}?${parameters.toString()}`;
window.history.replaceState(null, null, newUrl);
}
}


crudeAlert('success');

        //JavaScript function that enables or disables a submit button depending
        //on whether a checkbox has been ticked or not.
        function terms_changed(termsCheckBox){
            //If the checkbox has been checked
            if(termsCheckBox.checked){
                //Set the disabled property to FALSE and enable the button.
                document.getElementById("submit_button").disabled = false;
            } else{
                //Otherwise, disable the submit button.
                document.getElementById("submit_button").disabled = true;
            }
        }
        </script>
    @endslot
</x-app>
