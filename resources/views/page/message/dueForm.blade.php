<x-app>
    <main>
        <div class="container-fluid"><div class="mt-3 page-title">{{$batch->title}} SMS <i class="fas fa-angle-right"></i> Absent SMS</div>
<div class="card mb-4">
<div class="card-body">

    <div class="row">
        <div class="col-12 py-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Before Text"  style="border-top-right-radius:0;border-bottom-right-radius:0;" id="forAll">
                 <input type="text" class="form-control" placeholder="After Text" style="border-top-right-radius:0;border-bottom-right-radius:0;" id="forAll2">
                <div class="input-group-append">
                  <button class="btn btn-info" type="button" id="apply">Apply</button>
                </div>
              </div>
        </div>
        <form class="col-12" method="POST" action="{{route('message.dueFormSend')}}">
            @csrf
            <table class="table table-striped table-bordered" id="table">
                <thead>
                    <tr>
                        <th> Admission ID</th>
                        <th>Name</th>
                        <th>Fee</th>
                        <th>Paid</th>
                        <th>Before Text</th>
                        <th>Due</th>
                        <th>After Text</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index=>$student)
                    <tr>
                        <td>{{$student['id']}}</td>
                        <td>{{$student['name']}}</td>
                        <td style="text-align: right">{{$student['fee']}}</td>
                        <td style="text-align: right">{{$student['paid']}}</td>
                        <td>
                            <input type="hidden" name="items[{{$index}}][to]" value="{{$student['mobile']}}">
                            <input type="hidden" name="items[{{$index}}][due]" value="{{$student['due']}}">
                            <textarea class="textOne form-control" name="items[{{$index}}][messageBefore]"  cols="30"   required></textarea>
                        </td>
                        <td style="text-align: right">{{$student['due']}}</td>
                        <td>
                         
                            <textarea class="textTwo form-control" name="items[{{$index}}][messageAfter]"  cols="30"  required></textarea>
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
<script src="/assets/js/table-script.js"></script>
<script type="application/javascript">
const apply = document.getElementById('apply');
const forAll = document.getElementById('forAll');
const forAll2 = document.getElementById('forAll2');

apply.addEventListener('click',function(){
    const val = forAll.value;
    const table = document.getElementById('table');
   const list =  table.getElementsByClassName('textOne');
   Array.prototype.forEach.call(list,(item)=>{
    item.value = val;
   });


   const val2 = forAll2.value;
   const list2 =  table.getElementsByClassName('textTwo');
   Array.prototype.forEach.call(list2,(item)=>{
    item.value = val2;
   });
    
})
    </script>
@endslot
</x-app>
