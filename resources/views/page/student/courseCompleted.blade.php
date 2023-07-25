<x-app>
    <main>
        <div class="container-fluid"><div class="mt-4 mb-3 page-title">
                <div class="row">
                    <div class="col-sm-8 my-auto">
                        Admission <i class="fas fa-angle-right"></i> New Application
                    </div>
                    <div class="col-sm-4">
                        <a href="{{route('student.create')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-plus-square"></i> Add Admission </a>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <br>
                        <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th width="0%"> Admission#</th>
                               
                                <th> Student Name </th>
                                <th> Course</th>
                                <th>  Session  </th>
                                <th> Mobile</th>
                                <th width="10%"> </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                            <tr>
                                <td width="0%" ><samp >{{$student->id}}</samp></td>
                            
                                <td> <a href="{{route('student.show',['student'=>$student->id])}}" >{{$student->name}} </a></td>
                                <td>{{$student->courseNames}}</td>
                                <td>{{$student->courses->pluck('sesstion')->join(',')}}</td>
                                <td>{{$student->mobile}}</td>


                                <td nowrap>
                                    <a href="{{route('student.certification',['student'=>$student->id])}}"  class="btn btn-primary btn-sm" ><i class="fas fa-certificate"></i>  </a>
                                    <a class="btn btn-info btn-sm" href="{{route('student.show',['student'=>$student->id])}}"><i class="far fa-address-card"></i>  </a>
                                    <a class="btn btn-success btn-sm" href="{{route('student.edit',['student'=>$student->id])}}"  ><i class="fa fa-edit">  </i>  </a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
            <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            <script>
                $(document).on('click','.delete',function(){
                    var element = $(this);
                    var del_id = element.attr("data-appd");
                    var info = 'deladmission=' + del_id;
                    if(confirm("Are you sure you want to delete this?"))
                    {
                        $.ajax({
                            type: "POST",
                            url: "ajaxdelete.php",
                            data: info,
                            success: function(){
                            }
                        });
                        $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
                            .animate({ opacity: "hide" }, "slow");
                    }
                    return false;
                });
            </script>
    </main>>
</x-app>
