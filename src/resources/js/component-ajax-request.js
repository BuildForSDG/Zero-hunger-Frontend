
function getComponent(component,htmlDocNode,requestMethod="post"){
  let ajax= new XMLHttpRequest();
  
ajax.onreadystatechange=function(){
  if (this.readyState == 4 && this.status == 200) {
    htmlDocNode.innerHTML=this.responseText;
  }
}

ajax.open(requestMethod,`./resources/templates/${component}.php`,true);
ajax.responseType = "";
ajax.send()
}