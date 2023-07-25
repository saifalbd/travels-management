import { el, mount, svg, unmount } from "redom";

interface Item {
    product: null | number;
    quantity: null | number;
    rate: null | number;
    total: null | number;
}

interface Info {
    saleType: "customer" | "teacher" | "student";
    typeId: null | number;
    date: string;
    name: string;
    mobile: string;
    address: string;
    total: number;
    discount: number;
    paid: number;
    due: number;
    items: Item[];
}

export class SaleCreate {
    public info: Info = {
        saleType: "customer",
        typeId: null,
        date: "",
        name: "",
        mobile: "",
        address: "",
        total: 0,
        discount: 0,
        paid: 0,
        due: 0,
        items: [
            {
                product: null,
                quantity: null,
                rate: null,
                total: null,
            },
        ],
    };

    public root:HTMLElement;

    public topBoxDom:HTMLElement;

    public listParent:HTMLElement;

    public totalDom:HTMLInputElement;
    public dueDom:HTMLInputElement;
    public paidDom:HTMLInputElement;
    public discountDom:HTMLInputElement;

    constructor(root:HTMLElement){
        this.root = root;
        this.listParent =   el('div',{});


    }
    



    setEr(key:string,ers:string[]){
      const dom =   document.querySelector(`[eKey="${key}"]`);
      const e = ers[0];
      dom.classList.add('is-invalid');
      const feed = el('div',{},e);
      dom.appendChild(feed)
    }


    public async submit(){

     
    
       

        try {
            const {name,address,mobile,total,due,paid,date,saleType,items} = this.info;

            const d = {
                name,
                mobile,
                total,
                address,
                due,
                paid:paid?paid:0,
                date,
                saleType,
                items
            }

            
            await window.axios.post(window.orderStoreUrl,d);
            
        } catch (error) {
          console.error(error);

        const {response} = error;
        if(response.status == 422){
            const {data} = response;
            const ers = data.errors;

            const list = ['name','date','mobile','date','paid','due','total'];
            list.forEach(name=>{
                if(ers.hasOwnProperty(name)){ this.setEr(name,ers[name])}
            })
        
            console.log(data)
        }
        }

    }
   

    public itemsRender(){
       const listBoxDom =  el('div',{class:'list-parent',id:'list-box'},[]);

       const exists = document.getElementById('list-box');
       if(exists){
        exists.remove();
       }

       this.info.items.forEach((item:Item,i:number)=>{mount(listBoxDom,this.listBox(item,i)); });

       mount(this.listParent,listBoxDom);
       this.doTotal()

    }

    public doTotal(){
        const total = this.info.items.map(e=>e.total).reduce((a,b)=>a+b,0);
        this.totalDom.value = String(total);
        const discount = this.info.discount;
        const paid =this.info.paid;

        this.dueDom.value = String(total-discount-paid);
    }
    public typeBox() {
        const inCls = `w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600`;

        const customer = el("input", {
            type: "radio",
            name: "saleType",
            value: "customer",
            class: inCls,
        });

     

        const teacher = el("input", {
            type: "radio",
            name: "saleType",
            value: "teacher",
            class: inCls,
        });
        const student = el("input", {
            type: "radio",
            name: "saleType",
            value: "student",
            class: inCls,
        });

        customer.addEventListener('change',()=>{
            this.info.saleType = 'customer';
            this.info.typeId = null;
            this.info.address = '';
            this.info.mobile = '';
            unmount(this.root,this.topBoxDom);
            this.topBoxDom = this.topBox(false);
            mount(this.root,this.topBoxDom)
        })
        teacher.addEventListener('change',()=>{
            this.info.saleType = 'teacher';
            this.info.typeId = null;
            this.info.address = '';
            this.info.mobile = '';
            unmount(this.root,this.topBoxDom);
            this.topBoxDom = this.topBox(true);
            mount(this.root,this.topBoxDom)
        })

        student.addEventListener('change',()=>{
            this.info.saleType = 'student';
            this.info.typeId = null;
            this.info.address = '';
            this.info.mobile = '';
            unmount(this.root,this.topBoxDom);
            this.topBoxDom = this.topBox(true);
            mount(this.root,this.topBoxDom)
        })

        if (this.info.saleType == "customer") {
            customer.checked = true;
        } else if (this.info.saleType == "teacher") {
            teacher.checked = true;
        } else if (this.info.saleType == "student") {
            student.checked = true;
        }

        const dom = el("div", { class: "type-box" }, [
            el("div", { class: "type-box-item" }, [
                customer,
                el("label", {}, "Sale On Customer"),
            ]),
            el("div", { class: "type-box-item" }, [
                teacher,
                el("label", {}, "Sale On Teacher"),
            ]),
            el("div", { class: "type-box-item" }, [
                student,
                el("label", {}, "Sale On Student"),
            ]),
        ]);
        return dom;
    }

    public topBox(readonly:boolean) {
        const date = el("input", {type: "date" });
        var name:HTMLInputElement | HTMLSelectElement = el("input", {  type: "text" });
        const mobile = el("input", { type: "number" });
        const address = el("input", {  type: "text" });

        if(readonly){
            mobile.readOnly = true;
            address.readOnly = true;
        }

        const studentsOptions = window.studentDropdowns.map(e=>el('option',{value:e.id},e.name))
        const student = el('select',{class:'form-control'},[el('option',{value:''},'Select Student'),...studentsOptions]);

        const setMobileAddres = (value:string)=>{
            let val = value;
            this.info.typeId = val?parseInt(val):null;
            if(val){
              const model =  window.studentDropdowns.find(e=>e.id==val);
              this.info.address = model.present_address;
              this.info.mobile = model.mobile;
            
            }else{
                this.info.address = '';
                this.info.mobile = ''

            }

            mobile.value = this.info.mobile;
            address.value = this.info.address;
        }

        student.addEventListener('change',()=>{setMobileAddres(student.value) });

        const teacherOptions = window.studentDropdowns.map(e=>el('option',{value:e.id},e.name))
        const teacher = el('select',{class:'form-control'},[el('option',{value:''},'Select Teacher'),...teacherOptions]);
        teacher.addEventListener('change',()=>{setMobileAddres(teacher.value) });
        if(this.info.saleType=='student'){
            name = student;
        }else if(this.info.saleType=='teacher'){
            name = teacher;
        }


        const dom = el("div", {class:`top-input-box ${this.info.saleType}`,id:'topBox'}, [
            el("div", { class: "form-group col-span-4", eKey:'date' }, [
                el("label", "Date"),
                date,
            ]),
           

            el("div", { class: "form-group col-span-4", eKey:'name' }, [
                el("label", this.info.saleType=='student'?'Studen Name':this.info.saleType=='teacher'?'Teacher Name':'Name'),
                name,
            ]),
            el("div", { class: "form-group col-span-4" }, [
                el("label", "Mobile"),
                mobile,
            ]),
            el("div", { class: "form-group col-span-12" }, [
                el("label", "Address"),
                address,
            ]),
        ]);

        return dom;
    }

    public listBox(item: Item,i:number) {
        var button = el("button", {}, [
            el("span", "Remove"),
            svg(
                "svg",
                {
                    "aria-hidden": "true",
                    xmlns: "http://www.w3.org/2000/svg",
                    fill: "none",
                    viewBox: "0 0 20 20",
                },
                [
                    svg("path", {
                        stroke: "currentColor",
                        "stroke-linecap": "round",
                        "stroke-linejoin": "round",
                        "stroke-width": "2",
                        d: "m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z",
                    }),
                ]
            ),
        ]);
        

        button.addEventListener('click',()=>{
            this.info.items.splice(i,1);
            this.itemsRender();

            console.log(this.info.items)
        });

        if(!i){
            button.disabled = true;;
        }

        const options = window.productDropdowns.map((e) =>
            el("option", { value: e.id }, e.title)
        );

        const product = el("select", { class: "form-control" }, options);
        const quantity = el("input", {
            value: item.quantity,
            class: "form-control",
            type: "number",
          
        });
        const rate = el("input", {
            value: item.rate,
            class: "form-control",
            type: "number",
        });
        const total = el("input", {
            value: item.total,
            class: "form-control",
            type: "number",
            readonly:true,
        });

        quantity.addEventListener('change',()=>{
            const val = parseInt(quantity.value);
            if(item.rate && val){
                item.total = item.rate * val;
            }else{
                item.total = 0;
            }
            item.quantity = val;
            total.value = String(item.total);
            this.doTotal()
        })

        
        rate.addEventListener('change',()=>{
            const val = parseInt(rate.value);
            if(item.quantity && val){
                item.total = item.quantity * val;
            }else{
                item.total = 0;
            }
            item.rate = val;
            total.value = String(item.total);
            this.doTotal()
        })




        

        const dom = el("div", { class: "list-box" }, [
            el("div", { class: "form-group" }, [
                el("label", "Product"),
                product,
            ]),
            el("div", { class: "form-group" }, [
                el("label", "Quantity"),
                quantity,
            ]),
            el("div", { class: "form-group" }, [el("label", "Rate"), rate]),
            el("div", { class: "form-group" }, [
                el("label", "SubTotal"),
                total,
            ]),
            el("div", { class: "form-group remove-box" }, [button]),
        ]);

        return dom;
    }

    public totalBox() {
        const total = el("input", { type: "number" ,value:this.info.total,readonly:true});
        const discount = el("input", { type: "number",value:this.info.discount });
        const paid = el("input", { type: "number" ,value:this.info.paid});
        const due = el("input", { type: "number",value:this.info.due,readonly:true });
        discount.addEventListener('change',()=>{
            this.info.discount = parseInt(discount.value);
            this.doTotal();
        });

        paid.addEventListener('change',()=>{
            this.info.paid= parseInt(paid.value);
            this.doTotal();
        });



        this.totalDom = total;
        this.discountDom = discount;
        this.paidDom = paid;
        this.dueDom = due;
        const save = el("div", { class: "order-submit" }, "SAVE");
        save.addEventListener('click',()=>{
            this.submit();
        })
        const dom = el("div", { class: "total-box" }, [
            el("div", { class: "total-box-item" }, [
                el("div", {}, [el("span", "Total"), total]),
            ]),
            el("div", { class: "total-box-item" }, [
                el("div", {}, [el("span", "Discount"), discount]),
            ]),
            el("div", { class: "total-box-item" }, [
                el("div", {}, [el("span", "Paid"), paid]),
            ]),
            el("div", { class: "total-box-item" }, [
                el("div", {}, [el("span", "Due"), due]),
            ]),
            save,
        ]);

        return dom;
    }


    render(){
        const typeBox = this.typeBox();
        mount(this.root,typeBox)
        const topbox = this.topBox(this.info.saleType!='customer');
        this.topBoxDom = topbox;
        mount(this.root,topbox);


        const moreBtn = el('button','more');

        moreBtn.addEventListener('click',()=>{
            const item:Item = {
                product: null,
                quantity: null,
                rate: null,
                total: null,
            };

            this.info.items.push(item);
            this.itemsRender();
        });

        const listLayout = el('div',{class:'grid grid-cols-12 order-3'},[
            el('div',{class:'col-span-12 md:col-span-8'},[
                el('div',{class:'list-parent-box'},[
                    this.listParent,
                    el('div',{class:'more-box'},[moreBtn])
                ])
               
            ]),
            el('div',{class:'col-span-12 md:col-span-4'},[
               this.totalBox() 
            ])
        ])


        mount(this.root,listLayout);
        this.itemsRender();

    }
}
