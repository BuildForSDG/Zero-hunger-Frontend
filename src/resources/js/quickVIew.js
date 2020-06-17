
function quickView(){
  let component='quickView';
  let quickview= document.getElementById("quckView-container");
    document.body.classList.add('quick-view-mode');

    getComponent(component,quickview);
}

function closeQuickView(){
  // let closebtn=document.getElementById('close-quick-view');
  document.body.classList.remove('quick-view-mode');//enable scrolling again

  let quickview= document.getElementById("quckView-container");
      quickview.innerHTML="";
}