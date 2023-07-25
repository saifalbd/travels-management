  const rowDefaut = {
                description:null,
                qty:null,
                rate:null,
                amount:null,
            }

            document.getElementById('invoiceForm').addEventListener('submit',function (e){
                const inbox  = document.getElementById('inItems');
                const rows =inbox.querySelectorAll('.row.items');
              const list =   Array.prototype.map.call(rows,(row)=>{
                    const description  = row.getElementsByClassName('description')[0].value;
                    const qty = row.getElementsByClassName('qty')[0].value;
                    const rate = row.getElementsByClassName('rate')[0].value;
                    const amount = row.getElementsByClassName('amount')[0].value;
                    return {description,qty,rate,amount};

                });
              window.sessionStorage.setItem('invoice-form-list',JSON.stringify(list))

                // e.preventDefault();
                return true;
            });

            const getError = (key)=>{
                let has = formError.find(item=>{
                    return item.includes(key)
                })
                return has;

            }
            getError('items.0.description')
            const {el,svg,mount} = redom
            const inItems  = document.getElementById('inItems');
            const paid = document.getElementById('paid');


            const addTotal = ()=>{

                setTimeout(()=>{
                    const total = document.getElementById('total');
                    const inbox  = document.getElementById('inItems');
                    const rows =inbox.querySelectorAll('.row.items');

                    const list = Array.prototype.map.call(rows,(row)=>{
                        let qty = parseFloat(row.querySelector('input.qty').value)
                        let rate = parseFloat(row.querySelector('input.rate').value);
                        return qty*rate;
                    })

                    const totalVal = list.reduce((a, b) => a + b, 0);
                    total.value = totalVal;
                    const val = parseFloat(paid.value);

                    document.getElementById('due').value = totalVal - (val?val:0);


                },200)

            }


            paid.addEventListener('change',function (){
                const totalVal = document.getElementById('total').value;
                const val = this.value;
                document.getElementById('due').value = parseFloat(totalVal) - parseFloat(val);

            });

            document.getElementById('deleteRow').addEventListener('click',()=>{
                const inBox  = document.getElementById('inItems');
                const rows =inItems.querySelectorAll('.row.items');

                if(rows.length>1){
                    Array.prototype.map.call(rows,(item,index)=>{
                        const first = item.querySelector('input');
                        const  checked = first.checked
                        return {index,row:item,checked}
                    }).filter(e=>e.checked).forEach((item)=>{
                        console.log(item.row)
                        item.row.remove()
                    });
                    addTotal();
                }




            });


            const addList = (index,row)=>{


                const checkBox = el('input',
                    {class:'checkmark text-center add',
                    type:'checkbox',name:`items[${index}][item_index]`})

                let hasDesError = getError(`items.${index}.description`);
                let hasQtyError = getError(`items.${index}.qty`);
                let hasRateError = getError(`items.${index}.rate`);
                let cls = (has)=>has?'is-invalid':'';

                const description = el('input',{class:`form-control add description ${cls(hasDesError)}`,type:'text',name:`items[${index}][description]`,value:row.description})
                const qty = el('input',{class:`form-control add qty ${cls(hasQtyError)}`,type:'number',name:`items[${index}][qty]`,value:row.qty})
                const rate = el('input',{class:`form-control rate ${cls(hasRateError)}`,type:'number',name:`items[${index}][rate]`,value:row.qty})
                const amountDom = el('input',{class:`form-control amount`,type:'number',name:`items[${index}][amount]`,value:row.amount});

                qty.addEventListener('change',()=>{
                    if(rate.value){
                        amountDom.value = parseFloat(qty.value) * parseFloat(rate.value);
                        addTotal()
                    }
                })

                rate.addEventListener('change',()=>{
                    if(qty.value){
                        amountDom.value = parseFloat(qty.value) * parseFloat(rate.value);
                        addTotal()
                    }
                })


                const svgDom  = svg('svg',{
                        class:'svg-inline--fa fa-plus fa-w-14',
                        'aria-hidden':"true",
                        focusable:"false",
                        'data-prefix':"fas",
                        'data-icon':"plus",
                        'role':"img",
                        'xmlns':"http://www.w3.org/2000/svg",
                        viewBox:"0 0 448 512",
                        'data-fa-i2svg':''

                    },
                    [
                        svg('path',{
                            fill:"currentColor",d:"M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                        })
                    ]
                )
                const span = el('span.instl.btn.btn-outline-primary',{});
                const add = el('.form-group.col-md-1',{},[
                    span
                ])

                mount(span,svgDom)

                add.addEventListener('click',function (){
                    let rowItem = addList(index+1,rowDefaut);
                    mount(inItems,rowItem)
                })



                let rowDom = el('div',{class:'formi'},[
                    el('div',{class:'row items'},[
                        el('.form-group.col-md-1.text-center',{},[checkBox]),
                        el('.form-group.col-md-4',{},[
                            description,
                            hasDesError?el('.invalid-feedback',hasDesError):el('div')
                        ]),
                        el('.form-group.col-md-2',{},[qty,  hasQtyError?el('.invalid-feedback',hasQtyError):el('div')]),
                        el('.form-group.col-md-2',{},[rate,hasRateError?el('.invalid-feedback',hasRateError):el('div')]),
                        el('.form-group.col-md-2',{},[amountDom]),
                        el('.form-group.col-md-1',[add]),
                    ])
                ])

                return rowDom;
            }

            if(formError && formError.length){
                let hasSessions = window.sessionStorage.getItem('invoice-form-list');
                if(hasSessions){
                    let list = JSON.parse(hasSessions);
                    list.forEach((e,i)=>{
                        let rowItem = addList(i,e);
                        mount(inItems,rowItem)
                    })
                }
                console.log(hasSessions)

            }else{
                let rowItem = addList(0,rowDefaut);
                mount(inItems,rowItem)
            }






const byStudent = document.getElementById('byStudent');
byStudent.addEventListener('change',function(){
    const val = this.value;
    if(val){
        const option = byStudent.querySelector(`option[value="${val}"]`);
        if(option){
          
            document.getElementById('customerName').value = option.textContent;
        }
    }
    
})