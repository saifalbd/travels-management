



window.iq = {
    toggleBatch:(input:HTMLInputElement)=>{
   
        
    const url = input.getAttribute('data-url');
    console.log(url)
    window.axios.get(url);

},
showList(start:number,end:number){
    const table = document.getElementById('table');
    const rows = table.getElementsByTagName('tr');
    Array.prototype.forEach.call(rows,(row,i)=>{
      const tds =  row.getElementsByClassName('table-col');
      Array.prototype.forEach.call(tds,(td,index)=>{
        let s = start-1;
        let e = end-1;
        if(index>=s && index<=e){
            td.style.display = '';
        }else{
            td.style.display = 'none'; 
           
        }
      })

    })
}
}