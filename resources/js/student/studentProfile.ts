import axios from "axios";
import { el,svg,mount, unmount } from "redom";
import { Drawer, Modal } from 'flowbite'


export class EducationFrom {



    public tbody:HTMLElement;

    public objList:Education[] = window.educations;
    public domList:HTMLElement[] = [];

    public overly:HTMLElement;

    public degreeList = ['SSC', 'O LEVEL', 'HSC', 'A LEVEL', 'DIPLOMA', 'GRADUATION', 'POST GRADUATION']

    public boardList = ['Barisal', 'Chittagong', 'Comilla', 'Dhaka', 'Dinajpur', 'Jessore', 'Mymensingh', 'Rajshahi', 'Sylhet', 'Madrasah', 'Technical', 'DIBS(Dhaka)', 'Edexcel', 'Cambridge', 'Public University', 'Private University', 'National University'];

    public statusList = ['Complete','Running'];

    




    constructor(parent:HTMLElement){

    const box = this.box();
      mount(parent,box)

    }


    byD(dom:HTMLElement,index:number,prop:string,label:string):HTMLElement{
        return el('li',{'e-key':`items.${index}.${prop}`},[
            el('label',label),
            dom
        ])
    }

    public addEmpty(){
        const o:Education = {
            degree:null,
            board:null,
            institute:null,
            group:null,
            year_of_pass:null,
            status:null,
            gpa:null
        };

        this.objList.push(o)
        this.row(this.objList.length-1,o);


    }


    options(items:any[],first:string,value){
        let result =  [el('option',{value:''},first)];

        items.forEach(e=>{
           let ela = el('option',{value:e},e);
           if(value == e){
            ela.setAttribute('selected','selected')
           }

           result.push(ela)
        })


        return result;
    }


    
    degree(index:number,o:Education){
        const value = o.degree;
       const dom = el('select',{class:'form-control',value,name:'degree'},this.options(this.degreeList,'Select',value));

       dom.addEventListener('change',function(){o.degree = this.value;})

       return this.byD(dom,index,'degree','Degree Name');
    }

    board(index:number,o:Education){
        const value = o.board;
        const dom = el('select',{class:'form-control',value,name:'board'},this.options(this.boardList,'Select',value));
        dom.addEventListener('change',function(){o.board = this.value;})
        return this.byD(dom,index,'board','Board Name');
    }

    institute(index:number,o:Education){
       const dom = el('input',{type:'text',class:'form-control',value:o.institute});
       dom.addEventListener('change',function(){o.institute = this.value;})
       return this.byD(dom,index,'institute', 'Institute Name');
    }

    group(index:number,o:Education){
        const dom = el('input',{type:'text',class:'form-control',value:o.group});

        dom.addEventListener('change',function(){o.group = this.value;})

        return this.byD(dom,index,'group','Group Name');
    }

    year_of_pass(index:number,o:Education){
        const dom = el('input',{type:'number',class:'form-control',value:o.year_of_pass});
        dom.addEventListener('change',function(){o.year_of_pass = this.value;})
        return this.byD(dom,index,'year_of_pass','YearOfPassing');
    }

    status(index:number,o:Education){
        const dom = el('select',{class:'form-control',value:o.status},this.statusList.map((e,i)=>{
           let ela = el('option',{value:e,selected:true},e);
           if(o.status==e){
            ela.setAttribute('selected','selected');
           }else if(!i){
            ela.setAttribute('selected','selected');
           }
           return ela;
        }));
        dom.addEventListener('change',function(){o.status = this.value;})
        return this.byD(dom,index,'status','Status');
    }

    gpa(index:number,o:Education){
        const dom = el('input',{type:'number',class:'form-control',value:o.gpa});
        dom.addEventListener('change',function(){o.gpa = this.value;})
        return this.byD(dom,index,'gpa','GPA');
    }

    btn(index:number,o:Education){
        if(index){
        const dom = el('button',{
            type:'button'},
         [
            svg('svg',{
                'aria-hidden':"true",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 18 18"
            },svg('path',{stroke:"currentColor",'stroke-linecap':"round" ,'stroke-linejoin':"round",'stroke-width':"2",d:"m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"}))
        
           , el('span','Remove')
         ]
        );

        dom.addEventListener('click',()=>{
         

            if(o.id){
                axios.delete(`/student/edu-remove/${o.id}`)
            }
           
          
          
            this.objList.splice(index,1);


           
            this.render();

        
        })
        return el('li',{},[dom])

      
           

        }else{
            return el('li');
        }
        
     
    }

    public row(index:number, item:Education){
        const degree = this.degree(index,item);
        const board = this.board(index,item);
        const institute = this.institute(index,item);
        const group = this.group(index,item);
        const year_of_pass = this.year_of_pass(index,item);
        const status  = this.status(index,item);
        const gpa = this.gpa(index,item);
        const btn = this.btn(index,item);
        const rowSingle  = {degree,board,institute,group,year_of_pass,status,gpa,btn}

       const result = [];
        for (const key in rowSingle) {
           result.push(rowSingle[key])
        }

        let row = el('ul',{tabIndex:index},result);
        this.tbody.appendChild(row);

        this.domList.push(row);

       

    }


    public async submit(){
        this.overly.classList.toggle('show');
        this.render()

        try {
            const url = window.eduUrl;
            const items = this.objList;
          
           await window.axios.post(url,{items});
            
        } catch (error) {
            const errors = error.response;
            if(errors.status == 422){
                const ers = errors.data.errors;
                for (const key in ers) {
                   const dom = document.querySelector(`[e-key="${key}"]`);
                   dom.classList.add('is-invalid')
                   let edom = el('div',{class:'invalid-feedback'},ers[key][0]);
                 
                   dom.appendChild(edom);
                }
            }
            console.log(errors)
        }

        this.overly.classList.toggle('show');
    }


    public box(){

         

        const moreBtn  =  el('button',
        {class:'bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded'},'More');
        const more = el('div',{class:'text-center mt-3'},[
           moreBtn
        ]);

        moreBtn.addEventListener('click',()=>{
            this.addEmpty();
        })

        this.tbody = el('div',{class:'sub-board'});

        const rowParent =  el('div',{class:'edu-row-parent'},[
            this.tbody,
          
        
            more
        ]);


        let addBtn = el('button',{class:'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'},'Add Degree');

        let submitBtn = el('button',{class:`px-4 py-2  my-4 font-semibold text-sm
        text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 dark:from-teal-950 dark:to-teal-900
        hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 
       rounded-md shadow-sm outline outline-2 outline-offset-2
        outline-indigo-500 dark:bg-slate-700 dark:text-slate-200 dark:border-transparent 
        flex items-center`},[
            svg('svg',{class:"w-6 h-6 text-gray-500", fill:"currentColor",viewBox:"0 0 20 20"},svg('path',{d:"M10 3.6c1.63 0 3.05.64 4.14 1.71s1.71 2.51 1.71 4.14c0 1.63-.64 3.05-1.71 4.14s-2.51 1.71-4.14 1.71c-1.63 0-3.05-.64-4.14-1.71S3.6 11.63 3.6 10c0-1.63.64-3.05 1.71-4.14S6.37 3.6 8 3.6zm0-1.6C4.38 2 1 5.38 1 10s3.38 8 8 8 8-3.38 8-8-3.38-8-8-8zm0 14.4c-3.66 0-6.6-2.94-6.6-6.6S6.34 3.8 10 3.8s6.6 2.94 6.6 6.6-2.94 6.6-6.6 6.6z"})),
            el('span',{class:'ml-1'},'UPDATE')
        ]);

        submitBtn.addEventListener('click',()=>{
            this.submit()
        })

        this.overly = el('div',{
            class:'overly'
        },[
            el('b','Wait... Please')
        ]);

        return el('div',{class:'edu-form'},[
            this.overly,
            el('div',{class:'edu-card'},[
                el('div',{class:'space-y-6'},[
                    el('div',{class:'header'},[
                        el('h5',{class:'text-xl font-medium text-gray-900 dark:text-white mb-3'},'Education Background'),
                        addBtn
                    ]),
                    rowParent,
                ])
            ]),
            el('div',{class:'text-center mt-3 flex justify-center items-center w-full bg-gray-300'},submitBtn)
        ])


     
    }

    

    public render() {
        
        this.domList.forEach(e=>{
                   
            e.remove()
        });

        this.domList = [];
         this.objList.forEach((row,index) => {
            this.row(index,row)
        });

    }


}



export const socialModal = ()=>{
    if( window.socialError){
        const modal = new Modal(document.getElementById('socialModal'),{});
        modal.show()
    }
}

export const changeAvatar = ()=>{
    const avatarInput = document.getElementById('avatar-input')as HTMLInputElement;
    const avatarMain = document.getElementById('avatar-main') as HTMLImageElement;
    const avatarTemp = document.getElementById('avatar-temp') as HTMLImageElement;
    const avatarSave = document.getElementById('avatar-save');

    avatarInput.addEventListener('change',(event:Event)=>{
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
        if(avatarInput.files.length){
            const image = avatarInput.files[0];
            const formData = new FormData();
            formData.append('image',image);
          const {data} =  await window.axios.post(window.postAvatar,formData);
          avatarMain.src = data.url;

         
          const drawer = new Drawer(document.getElementById('drawer-avatar'),{});
          drawer.hide();
        }
    
    })



}