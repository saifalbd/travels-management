<x-app>
<main>
               <div class="container-fluid"><div class="mt-4 mb-2 page-title">
   <div class="row">
  <div class="col-md-8 my-auto">
   Invoice <i class="fas fa-angle-right"></i> Invoice list
      </div>
      <div class="col-md-4 text-right">
		  <a class="btn btn-outline-primary "  href="{{route('invoice.create')}}" > <i class="fas fa-plus-square"></i> New Invoice </a>
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
				<th width="0%"> Invoice #</th>
                   <th> Date </th>
                  <th> Name </th>
                  <th> Mobile</th>
                  <th> Total</th>
                  <th> Paid </th>
                  <th> Due</th>

				<th  > </th>
               </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                              <tr>
				  <td width="0%" class="bn-font">{{$item->id}}</td>
					<td>{{format($item->date)}}</td>
					<td>{{$item->customer_name}}</td>
					<td>{{$item->mobile}}</td>
					<td>{{$item->total}}</td>
					<td>{{$item->paid}}</td>
					<td>{{$item->due}}</td>
                  <td nowrap align="right">
					<a href="{{route('invoice.show',['invoice'=>$item->id])}}" class="btn btn-primary btn-sm"> <i class="fa fa-print "></i></a>
					<a data-appd="6" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash-alt "> </i>  </a>
                  </td>
               </tr>
            @endforeach


                </tbody>
            
         </table>
         <x-page-info :items="$items"></x-page-info>
      </div>
   </div>
</div>

 </main>

</x-app>
