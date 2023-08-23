
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/report-print.scss'])
</head>
<body>

    <div class="layout relative">
    <div class="b-box absolute top-2 right-2 grid grid-cols-2 gap-1 print:hidden">
        <button onclick="print()" type="button" class=" border border-fuchsia-600 py-2 px-3 flex items-center">
            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z"/>
                <path d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"/>
              </svg>
              <span class="ml-2">Print</span>
        </button>
        <button onclick="goBack()" type="button" class=" border border-fuchsia-600 py-2 px-3 flex items-center">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 12 16">
                <path d="M10.819.4a1.974 1.974 0 0 0-2.147.33l-6.5 5.773A2.014 2.014 0 0 0 2 6.7V1a1 1 0 0 0-2 0v14a1 1 0 1 0 2 0V9.3c.055.068.114.133.177.194l6.5 5.773a1.982 1.982 0 0 0 2.147.33A1.977 1.977 0 0 0 12 13.773V2.227A1.977 1.977 0 0 0 10.819.4Z"/>
              </svg>
              <span class="ml-2">Back</span>
        </button>
    </div>
      <div class="payment-invoice bg-white pb-4">
        <header class=" bg-white">
            <div class=" border-b border-b-purple-800 py-3">
                <h2 class=" font-bold text-3xl mb-2 text-center">{{comInfo('institute')}}</h2>
                <h4 class="text-xl text-center">{{comInfo('address')}}</h4>
            </div>
            <div class=" border-b border-b-purple-800 py-3">
                <div class="grid grid-cols-2">
                    <div class="p-4">
                        <h1 class=" text-fuchsia-900 text-2xl font-semibold">Paid By</h1>
                        <div class="text-gray-600">{{$payment->agreemant->name}}</div>
                        <div class="text-gray-600">{{$payment->agreemant->phone}}</div>
                    </div>

                    <div class="p-4 flex flex-col justify-end items-end">
                        <div>
                        <h1 class="text-fuchsia-900 text-2xl font-semibold">Reciept</h1>
                       <ul class="grid grid-cols-[150px_auto]"><li class=" font-semibold text-gray-600">Reciept Number</li><li>{{$payment->id}}</li></ul>
                       <ul class="grid grid-cols-[150px_auto]"><li class=" font-semibold text-gray-600">Invoice Number</li><li>{{$payment->id+300}}</li></ul>
                       <ul class="grid grid-cols-[150px_auto]"><li class=" font-semibold text-gray-600">Date Paid</li><li>{{format($payment->date)}}</li></ul>
                       <ul class="grid grid-cols-[150px_auto]"><li class=" font-semibold text-gray-600">Payment Method</li><li>{{$payment->pay_method}}</li></ul>
                        </div>
                      
                    </div>

                </div>
            </div>

            
        </header>
        <main  class=" bg-white">
           
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Method</th>
                        @if($payment->pay_method=='check' || $payment->pay_method=='bank' )
                        <th>Bank</th>
                        <th>Branch</th>
                        @endif
                        @if($payment->pay_method=='check')
                        <th>Check Number</th>
                        @endif
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$payment->agreemant->package->name}}</td>
                        <td>{{$payment->pay_method}}</td>
                        @if($payment->pay_method=='check' || $payment->pay_method=='bank' )
                        <td>{{$payment->bank->name}}</td>
                        <td>{{$payment->branch}}</td>
                        @endif
                        <td class=" text-right">{{$payment->amount}}</td>
                    </tr>
                    
                </tbody>
                <tfoot>

                    <tr>
                        <td class="py-2"></td>
                        <td class="py-2"></td>
                        <td class="py-2"></td>
                    </tr>
                   
                    <tr class="pt-2">
                        <td colspan="{{$payment->pay_method=='check'?4:($payment->pay_method=='bank'?3:1)}}"></td>
                        <th class="border-t border-l border-b border-gray-500 text-right">Total</th>
                        <td class="border-t border-r border-b border-gray-500 text-right px-2">{{$payment->amount}}</td>
                    </tr>

                    <tr>
                        <td colspan="{{$payment->pay_method=='check'?4:($payment->pay_method=='bank'?3:1)}}"></td>
                        <th  class="border-t border-l border-b border-gray-500 text-right">Agreemant Amount</th>
                        <td  class="border-t border-r border-b border-gray-500 text-right px-2">{{$payment->agreemant->amount}}</td>
                    </tr>
                    <tr>

                    
                    <tr>
                        <td colspan="{{$payment->pay_method=='check'?4:($payment->pay_method=='bank'?3:1)}}"></td>
                        <th  class="border-t border-l border-b border-gray-500 text-right">Total Paid</th>
                        <td  class="border-t border-r border-b border-gray-500 text-right px-2">{{$totalPayment}}</td>
                    </tr>
                    <tr>
                        <td colspan="{{$payment->pay_method=='check'?4:($payment->pay_method=='bank'?3:1)}}"></td>
                        <th  class="border-t border-l border-b border-gray-500 text-right">Due</th>
                        <td  class="border-t border-r border-b border-gray-500 text-right px-2">{{$payment->agreemant->amount-$totalPayment}}</td>
                    </tr>
                </tfoot>
            </table>


            <div>
                
                <ul class="mt-[100px] flex justify-between">
                    <li class="border-t-2 border-fuchsia-950 px-4 font-semibold">Customer Signature</li>
                    <li  class="border-t-2 border-fuchsia-950 px-4 font-semibold">Authorized by</li>
                </ul>
            </div>
            
        </main>
      </div>
    </div>



   

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
