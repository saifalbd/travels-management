
import { Modal } from 'flowbite';
const $targetEl = document.getElementById('progress-modal');



if($targetEl){
    const closeAttachModal =  document.getElementById('close-attach-modal');

    const imageBox = document.getElementById('image-box');
    const modal = new Modal($targetEl, {backdrop:'static'});
    closeAttachModal.addEventListener('click',()=>{
        modal.hide()
    })
    const tags = document.getElementsByClassName('progress-tag') as HTMLCollectionOf<HTMLElement>;
    Array.prototype.forEach.call(tags,(tag:HTMLElement)=>{
    const input =tag.querySelector('input');
    input.addEventListener('change',function(){
        const  checked = this.checked;
        const dataTagName = this.getAttribute("data-tag-name");
        const tagId = this.getAttribute('data-tag-id');
        const dataAttachments =JSON.parse(this.getAttribute('data-attachments')) as any[];
        console.log(dataAttachments)
        const dataNote = this.getAttribute('data-note'); 
        imageBox.innerHTML = '';
        if(checked){
            modal.show();
           const form = $targetEl.querySelector('form');
           (document.getElementById('statusName') as HTMLElement).textContent =dataTagName;
           (document.getElementById('tagId') as HTMLInputElement).value = tagId;
           (document.getElementById('note') as HTMLInputElement).value = dataNote;
           
           dataAttachments.forEach((item:any)=> {
            const image = new Image;
            image.src = item.url as string;
            imageBox.append(image)
           });



        }
   
    
    })
    
    })


    const progressAttachInput = document.getElementById('progressAttachInput') as HTMLInputElement;
    progressAttachInput.addEventListener('change',function(){
        const files = this.files;
        imageBox.innerHTML = '';
        if(files.length){
           for (let index = 0; index < files.length; index++) {
            const file = files[0];
            const reader = new FileReader;
            reader.onload = ()=>{
                const image = new Image;
                image.src = reader.result as string;
                imageBox.append(image)
            }
            reader.readAsDataURL(file);
            
           }
           
        }
    });
}


