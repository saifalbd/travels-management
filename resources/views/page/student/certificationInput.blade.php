<x-app>
    <main>
        <div class="container-fluid"><div class="mt-3 page-title">Show {{$student->name}} Certificate  </div>
        <div class="card mb-4">
            <div class="card-body">
                <form method="get" action="{{route('student.certification.view',['student'=>$student->id])}}">
                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">
                            <div class="form-group">
                                <label>Course: </label>
                                <select type="text" class="form-control" name="course" required>
                                    <option value="">----</option>
                                    @foreach ($student->courses as $c)
                                    <option value="{{$c->course->id}}">{{$c->course->name}}</option>
                                    @endforeach
                                   
                                </select> 
                            </div>
                        </div>
                        <div class="col" style="padding-top: 30px">
                           
                            <button type="submit" class="btn btn-success"> View </button>
                        </div>
                    </div>
                  
                
                </form>

            </div>
        </div>
        </div>
    </main>

</x-app>