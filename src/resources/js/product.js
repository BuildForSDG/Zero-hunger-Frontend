
function quantity(e){
  let target=e.currentTarget;
  let quantity=target.parentNode.querySelector('input');
  let Oldval=Number(quantity.value);

  if(target.classList.contains('minus-btn')  && (Oldval-1)>0 ){
    
      quantity.value=Oldval-1;
  }

  if(target.classList.contains('plus-btn')){
      quantity.value=Oldval+1
  }
}

let control= document.querySelectorAll(".change-quantity");
    control.forEach(elm=>{
      elm.addEventListener('click',quantity,false)
    })