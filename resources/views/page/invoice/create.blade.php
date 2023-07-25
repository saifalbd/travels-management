<x-app>

<main>
               <div class="container-fluid"><SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<div class="mt-4  mb-2 page-title">
   <div class="row">
      <div class="col-span-12 md:col-span-8 my-auto"> Invoice <i class="fas fa-angle-right"></i> New Invoice   </div>
      <div class="col-span-12 md:col-span-4 text-right"> <a href="{{route('invoice.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> List Invoice </a> </div>
   </div>
</div>
<form name="frmUser" id="invoiceForm" method="post" action="{{route('invoice.store')}}" class="calculate" enctype="multipart/form-data"  >
    @csrf
   <div class="card mb-3 pb-1">

      <div class="card-body  pb-0">
         <div class="row">
            <div class="form-group col-span-12 md:col-span-2">
               <label for="inputEmail4">Date </label>
               <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{old('date')}}" >
            </div>
            <div class="form-group col-span-12 md:col-span-3">
               <label for="inputEmail4">Name </label>
               <input type="text" class="form-control  @error('customer') is-invalid @enderror"   name="customer" value="{{old('customer')}}">
                @error('customer')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group col-span-12 md:col-span-4">
               <label for="inputEmail4">Address</label>
               <input type="text" class="form-control @error('address') is-invalid @enderror"   name="address" value="{{old('address')}}">
                @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group col-span-12 md:col-span-3">
               <label for="inputEmail4">Mobile </label>
               <input type="text" class="form-control @error('mobile') is-invalid @enderror"    name="mobile"  value="{{old('mobile')}}">
                @error('mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
         </div>
      </div>
   </div>
   <div class="row">
   <div class="col-span-12 md:col-span-9">
   <div class="card mb-1 pb-1" >
      <div class="card-body  pb-1"  >
         <div class="row row-style">
            <div class="col-span-12 md:col-span-1 text-center">
               <a  class="btn btn-light btn-blcok btn-sm" name="del_item" id="deleteRow"> <i class="fas fa-trash "></i>  </a>
            </div>
            <div class="col-span-12 md:col-span-4">
               <label>Description </label>
            </div>
            <div class="col-span-12 md:col-span-2">
               <label>Quantity </label>
            </div>
            <div class="col-span-12 md:col-span-2">
               <label> Price  </label>
            </div>
            <div class="col-span-12 md:col-span-2">
               <label>Sub Total</label>
            </div>
            <div class="col-span-12 md:col-span-1"> </div>
         </div>
         <div class="all" id="inItems">

         </div>
      </div>
   </div>
   </div>
   <div class="col-span-12 md:col-span-3">
   <div class="card mb-1 pb-1">
      <div class="card-body  pb-1"  >

   <div class="col-span-12 md:col-span-12 form-group">
            <label class="sr-only" for="payable"> Total </label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Total</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold total @error('total') is-invalid @enderror"
                     type="number" id="total" name="total"  value="{{old('total')}}">
                @error('total')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
          </div>


		   <div class="col-span-12 md:col-span-12 form-group">
            <label class="sr-only" for="payable">Paid </label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Paid </div>
              </div>
              <input class="form-control text-success text-right font-weight-bold paid @error('paid') is-invalid @enderror"
                     type="number" id="paid" name="paid" autocomplete="off"  value="{{old('paid')}}">
                @error('paid')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
          </div>


		  		   <div class="col-span-12 md:col-span-12 form-group">
            <label class="sr-only" for="payable">Due</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Due</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold due @error('due') is-invalid @enderror"
                     type="number" id="due" name="due" autocomplete="off"  value="{{old('due')}}">
                @error('due')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
          </div>






<div class="form-group col-span-12 md:col-span-12">
   <label for="inputEmail4">Remark </label>
   <textarea type="text" class="form-control @error('remark') is-invalid @enderror" name="remark" >{{old('remark')}}</textarea>
    @error('due')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
</div>
   <div class="card-footer">

            <input type="hidden" readonly class="form-control" name="unique_id" value="1686323178"  >
            <input type="submit" class="btn btn-success add"  name="save" value="Save" />
            <input type="reset" class="btn btn-secondary"  value="Reset" />

   </div>

   </form>
 </main>


    @slot('script')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/redom/3.17.0/redom.min.js" integrity="sha512-6zwXZrFuZCyN61dCaR2f0ahfzce3DPAOgXYGJOdItMq/R5aUFsRP0hHYI9v68dAaZDYxP/Azqw4V2LLWdJnUnw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
            const formError = @json($errors->all());
        </script>
        <script src="/assets/js/invoice-crude.js"></script>
    @endslot

</x-app>
