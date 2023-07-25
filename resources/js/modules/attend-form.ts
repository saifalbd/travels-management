const tb = document.getElementById('tableBody');

if(tb){



const attendPost = async (attendance_student,obj)=>{

    
    const rawResponse = await fetch(`/api/attendance-update/${attendance_student}`, {
    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(obj)
  });
  const content = await rawResponse.json();

}

const closeIcon = ()=>{
  return `<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="24px" height="24px"><linearGradient id="hbE9Evnj3wAjjA2RX0We2a" x1="7.534" x2="27.557" y1="7.534" y2="27.557" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"/><stop offset=".443" stop-color="#ee3d4a"/><stop offset="1" stop-color="#e52030"/></linearGradient><path fill="url(#hbE9Evnj3wAjjA2RX0We2a)" d="M42.42,12.401c0.774-0.774,0.774-2.028,0-2.802L38.401,5.58c-0.774-0.774-2.028-0.774-2.802,0	L24,17.179L12.401,5.58c-0.774-0.774-2.028-0.774-2.802,0L5.58,9.599c-0.774,0.774-0.774,2.028,0,2.802L17.179,24L5.58,35.599	c-0.774,0.774-0.774,2.028,0,2.802l4.019,4.019c0.774,0.774,2.028,0.774,2.802,0L42.42,12.401z"/><linearGradient id="hbE9Evnj3wAjjA2RX0We2b" x1="27.373" x2="40.507" y1="27.373" y2="40.507" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#a8142e"/><stop offset=".179" stop-color="#ba1632"/><stop offset=".243" stop-color="#c21734"/></linearGradient><path fill="url(#hbE9Evnj3wAjjA2RX0We2b)" d="M24,30.821L35.599,42.42c0.774,0.774,2.028,0.774,2.802,0l4.019-4.019	c0.774-0.774,0.774-2.028,0-2.802L30.821,24L24,30.821z"/></svg>`;
}

const remarkModal = (studentName,d,rBtn)=>{
  const modal = document.createElement('div');
  modal.classList.add('remark-modal');

  const content = document.createElement('div');
  content.classList.add('content');
  modal.appendChild(content);
  const close = document.createElement('button');
  close.textContent = 'X';
  close.classList.add('remark-close-btn');
  content.appendChild(close)
  const header = document.createElement('div');
  content.appendChild(header)
  header.classList.add('remark-header');
  const name = document.createElement('div');
  name.textContent = studentName;
  const date = document.createElement('small');
  date.textContent = `Date:${d.date}`;
  header.appendChild(name);
  header.appendChild(date);



  const remarkBody = document.createElement('div');
  remarkBody.classList.add('remark-body');
  content.appendChild(remarkBody)

  const input = document.createElement('input');
  input.value = d.remark;
  input.classList.add('form-control');
  input.setAttribute('type','text');
  const save = document.createElement('button');
  save.classList.add('remark-add-btn');
  save.textContent = 'SAVE';
  remarkBody.appendChild(input);
  remarkBody.appendChild(save);

  close.addEventListener('click',()=>{
    modal.remove();
  });

  save.addEventListener('click',async()=>{
   let val = input.value;
    d.remark = input.value;
    let attend = d.attend;
        const remark = val;
        const entry = d.entry;
        const leave = d.leave;
        attendPost(d.id,{attend,remark,entry,leave});

        if(val){
          rBtn.classList.add('active')
        }else{
          rBtn.classList.remove('active')
        }

        modal.remove();
 

  })

  document.body.prepend(modal)



}

const remarkBtn = (studentName,d)=>{
    const dom = document.createElement('span');
    dom.textContent = 'R';
    dom.classList.add('re-btn');
    if(d.remark){
      dom.classList.add('active');
    }
    dom.addEventListener('click',()=>{
      console.log(studentName,d)
      remarkModal(studentName,d,dom)
    })
    return dom;
}

(window.students as Array<{name:string,student_id:number,attends:Attend[]}>).forEach((student,i) => {

let row =  document.createElement('tr');
let id = document.createElement('td');
let name = document.createElement('td');
name.style.whiteSpace = 'nowrap';
name.classList.add('name');
id.textContent  = String(student.student_id);
name.textContent = student.name;
row.appendChild(id);
row.appendChild(name);

student.attends.filter(item=>!item.isAfter).forEach(d=>{
  let td = document.createElement('td');
  td.classList.add('table-col');
  td.style.padding ='0 0';
    let dom = document.createElement('div'); 
    dom.classList.add('td-child');
    dom.style.padding ='20px 20px';

    dom.appendChild(remarkBtn(student.name,d))
  
    td.appendChild(dom);
    row.appendChild(td);

    if(d.off_day){
      dom.innerHTML = closeIcon();
    }else{

      let cBox  = document.createElement('input');
    cBox.setAttribute('type','checkbox');
   
    if(d.attend){
        cBox.setAttribute('checked','')
    }
   
    dom.appendChild(cBox);
    cBox.addEventListener('change',function(){
        let attend = this.checked?1:0;
        d.attend = attend;
        const remark = d.remark;
        const entry = d.entry;
        const leave = d.leave;
        attendPost(d.id,{attend,remark,entry,leave});
    })

    }
   
})


tb.append(row)
});

}