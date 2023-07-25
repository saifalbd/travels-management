<x-app>
  <x-b-bar o="Message" t="SMS Information" 
  :add="false" ></x-b-bar>



<div>
  <table class="w-full mt-3">
                   
    <thead>
      <tr>
        <th class="py-2 bg-gray-300">Balance</th>
        <th class="py-2 bg-gray-300">Rate</th>
        <th class="py-2 bg-gray-300">Expire At</th>
        <th class="py-2 bg-gray-300">Total SMS</th>
      
      </tr>
    </thead>
    <tbody>
    
      <tr class="text-center">
        <th scope="row">{{$balance}}</th>
        <td scope="row">{{$rate}}</td>
        <td scope="row">{{$expiry}}</td>
        <td scope="row">{{$totalsms}}</td>
        
      </tr>
     
    </tbody>
  </table>
</div>
  


   
</x-app>
