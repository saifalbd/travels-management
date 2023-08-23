import axios from "axios";
import { el,svg,mount, unmount } from "redom";
import { Drawer, Modal } from 'flowbite'



export const changeAvatar = ()=>{
    const avatarInput = document.getElementById('avatar-input')as HTMLInputElement;
    const avatarMain = document.getElementById('avatar-main') as HTMLImageElement;
    const avatarTemp = document.getElementById('avatar-temp') as HTMLImageElement;
    const avatarSave = document.getElementById('avatar-save');

    avatarInput.addEventListener('change',(event:Event)=>{
        console.log('changes')
        let target = event.target as HTMLInputElement;
        const files = target.files;
        if(files.length){
            const reader = new FileReader;
            reader.onload = ()=>{
                avatarTemp.src = reader.result as string;
            }
            reader.readAsDataURL(files[0])
        }
    });

    avatarSave.addEventListener('click',async ()=>{
     try {
        
        if(avatarInput.files.length){
            const image = avatarInput.files[0];
            const formData = new FormData();
           
            formData.append('image',image);
          const {data} =  await window.axios.post(window.postAvatar,formData);
          avatarMain.src = data.url;


         
          const drawer = new Drawer(document.getElementById('drawer-avatar'),{});
          drawer.hide();
        }
     } catch (error) {
        console.error(error)
     }
    
    })



}