// Toggle sidebar su mobile

document.querySelector('.closeSidebar').addEventListener('click', () =>{

    document.querySelector('.sidebar').style.display = 'none'
  
})

document.querySelector('.showSidebar').addEventListener('click', () =>{

    document.querySelector('.sidebar').style.display = 'flex'
 

})
  
  
  

  

// // Setta bottoni zoom mappa

// L.control.scale().addTo(map);

// let clickIn = document.querySelector(".leaflet-control-zoom-in")
// let clickOut = document.querySelector(".leaflet-control-zoom-out")

  

// // altera legenda kilometrica 

// clickIn.addEventListener("click",()=>{
        
//     let widthKm = document.querySelector(".leaflet-control-scale-line").style.width
//     let Km = document.querySelector(".leaflet-control-scale-line").innerHTML
    
//     let scale = document.querySelectorAll(".scale")
//         scale.forEach(el => {
//             el.style.width = widthKm
//         });
        
//         document.querySelector("#km").innerHTML = Km
//     })
  
    
// clickOut.addEventListener("click",()=>{

//     let widthKm = document.querySelector(".leaflet-control-scale-line").style.width
//     let Km = document.querySelector(".leaflet-control-scale-line").innerHTML
    
//     let scale = document.querySelectorAll(".scale")
//         scale.forEach(el => {
//             el.style.width = widthKm
//         });

//     document.querySelector("#km").innerHTML = Km
// })
  
// clickIn.click()
// clickOut.click()




    window.dispatchEvent(new Event("resize"));