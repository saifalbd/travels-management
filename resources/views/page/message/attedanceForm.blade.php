<x-app>
    <main>
        <div class="container-fluid"><div class="mt-3 page-title">{{$batch->title}} SMS <i class="fas fa-angle-right"></i> Absent SMS</div>
<div class="card mb-4">
<div class="card-body">

    <div class="row">
        <div class="col-12 py-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Global Message Here" aria-label="Recipient's username"
                 aria-describedby="button-addon2" style="border-top-right-radius:0;border-bottom-right-radius:0;" id="forAll">
                <div class="input-group-append">
                  <button class="btn btn-info" type="button" id="apply">Apply</button>
                </div>
              </div>
        </div>
        <form class="col-12" method="POST" action="{{route('message.attendanceFormStore')}}">
            @csrf
            <table class="table table-striped table-bordered" id="table">
                <thead>
                    <tr>
                        <th> Admission ID</th>
                        <th>Name</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendance->list as $index=>$item)
                    <tr>
                        <td>{{$item->student->id}}</td>
                        <td>{{$item->student->name}}</td>
                        <td>
                            <input type="hidden" name="items[{{$index}}][to]" value="{{$item->student->mobile}}">
                            <textarea name="items[{{$index}}][message]"  cols="30"  class="form-control" required></textarea>
                        </td>
                    </tr> 
                    @endforeach
                    
                </tbody>
                
            </table>
            <div class="row mt-4">
                <div class="col-12 text-right">
                    <button class="btn btn-info btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>

</main>
@slot('script')

<script type="application/javascript">
const apply = document.getElementById('apply');
const forAll = document.getElementById('forAll');

apply.addEventListener('click',function(){
   
    const val = forAll.value;
    const table = document.getElementById('table');
   const list =  table.getElementsByTagName('textarea');
   Array.prototype.forEach.call(list,(item)=>{
    item.value = val;
   });
    
})
    </script>
@endslot
</x-app>
