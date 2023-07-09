// Toggle sidebar su mobile

document.querySelector('.closeSidebar').addEventListener('click', () =>{

    document.querySelector('.sidebar').style.display = 'none'
  
})

document.querySelector('.showSidebar').addEventListener('click', () =>{

    document.querySelector('.sidebar').style.display = 'flex'
 

})
  
  

    window.dispatchEvent(new Event("resize"));