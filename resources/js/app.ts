import './bootstrap';
import 'flowbite';

import {SaleCreate} from './modules/saleCreate';


import './modules/mode';

import './modules/methods';

import './modules/multi-select';

import './modules/attend-form.js';




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




