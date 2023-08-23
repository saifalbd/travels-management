import './bootstrap';
import 'flowbite';
import './libs/trix';


import {SaleCreate} from './modules/saleCreate';


import './modules/mode';

import './modules/methods';

import './modules/multi-select';
import './modules/customerShow';

import Swal from 'sweetalert2';






const orderCreate = document.getElementById('orderCreate');

if(orderCreate){
    (new SaleCreate(orderCreate)).render()
}


window.imageChange = (event,parentID)=>{
  
    let p = document.getElementById(parentID);
    let img = p.getElementsByTagName('img')[0] as HTMLImageElement;

    const files = event.target.files;

    if(files.length){

        const fileRead = new FileReader;

        fileRead.onload = ()=>{
            img.src = fileRead.result as string;
            p.classList.add('with-avatar');
        }

        fileRead.readAsDataURL(files[0])

    }else{
       p.classList.remove('with-avatar');
    }
    

}




const payMethod = document.getElementById('payMethod') as HTMLInputElement;
if(payMethod){
    const paymentChange = ()=>{
    const value = payMethod.value as 'bank'|'check'|'cash';
    const bank = document.getElementById('bank') as HTMLElement;
   const bankInput = bank.querySelector('input') as HTMLInputElement;
    const branchName = document.getElementById('branchName') as HTMLElement;
    const branchInput = branchName.querySelector('input');
    const checkNumber = document.getElementById('checkNumber') as HTMLElement;
    const checkInput = checkNumber.querySelector('input');
    console.log({bank,branchName,checkNumber})
    if(value=='cash'){
        bank.style.display ='none';
        branchName.style.display ='none';
        checkNumber.style.display = 'none';
        bankInput.value = ''
        branchInput.value ='';
        checkInput.value ='';
        
    }else if(value=='bank'){
        bank.style.display ='block';
        branchName.style.display ='block';
        checkNumber.style.display = 'none';
    }else{
        bank.style.display ='block';
        branchName.style.display ='block';
        checkNumber.style.display = 'block';
    }
    

    
    }
    payMethod.addEventListener('change',paymentChange)

    
}




const pakType = document.getElementById('pakTypeSelect') as HTMLInputElement;
const selectPackage  = document.getElementById('selectPackage') as HTMLInputElement;

const changePackType = (dom:HTMLInputElement,is:number)=>{
    const val = parseInt(dom.value);
    const afterVisa = document.getElementById('afterVisa');
    const due = document.getElementById('due');

    if(val==is){
        afterVisa.textContent = 'After Approved';
        due.textContent = 'After Card';

    }else{
        afterVisa.textContent = 'After Visa';
        due.textContent = 'Due';  
    }
}

if(selectPackage){
    changePackType(selectPackage,3);
    selectPackage.addEventListener('change',()=>{
        changePackType(selectPackage,3);
    }) 
}

if(pakType){
    changePackType(pakType,4);
    pakType.addEventListener('change',()=>{
        changePackType(pakType,4);
    })
}



const removeBtns = document.getElementsByClassName('remove-btn');
Array.prototype.forEach.call(removeBtns,(btn:HTMLElement)=>{
btn.addEventListener('click',async()=>{
  const form =   btn.parentElement as HTMLFormElement;
  const title = form.getAttribute('title');
 const {isConfirmed} = await Swal.fire({
    title: 'Are you sure?',
    text:title,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
  })

  if(isConfirmed){
    form.submit()
  }

})
})





