
function showPassword(e){
  let target= e.currentTarget;
  let passInput = target.parentNode.querySelector('input');
  let value="text";
  let type = passInput.getAttribute("type").toLowerCase();

      if(target.classList.contains('active')){
        value="password";
      }

      target.classList.toggle("active");
      passInput.setAttribute("type",value);
}

let showPass= document.querySelectorAll('.show-password');

showPass.forEach(elm=>{
  elm.addEventListener('click',showPassword,false);
})