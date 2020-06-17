function slide (){
setTimeout(()=>{
  let prevSlideItems=document.querySelector('.slide-item.prev');
      prevSlideItems !=null? prevSlideItems.classList.replace("prev",'next'): "";
},1000)
let activeSlideItem=document.querySelector(".slide-item.active");
    activeSlideItem.classList.add('prev')
    activeSlideItem.classList.remove('active')
let nextSlideItem=document.querySelector(".slide-item.next");
    nextSlideItem.classList.add('active');
    nextSlideItem.classList.remove('next')
}
setInterval(slide,5000)