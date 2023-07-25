<div class="form-box p-4 bg-yellow-50 dark:bg-slate-800 mt-3">

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div>
       <form class="grid grid-cols-12 gap-x-1 gap-y-2" method="{{$method}}" action="{{$action}}" enctype="multipart/form-data" >
          @csrf

          {{$slot}}



          @if(isset($btn))
          {{$btn}}
          @else
          <div class="col-span-12 flex justify-center">
            <x-submit-btn></x-submit-btn>
           </div>
          @endif
       

         
 
       </form>
    </div>
</div>