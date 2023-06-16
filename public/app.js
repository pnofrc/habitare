// Dichiarazioni globali

var markers



// Toggle mappa geo / vuota

var toggle = 0

function toggleMap(bool) {
    let markers = document.querySelectorAll(".leaflet-marker-icon.leaflet-interactive")
    let lines = document.querySelectorAll(".leaflet-pane > svg path.leaflet-interactive")
    if (bool === 0){
        tiles.addTo(map);
        
        markers.forEach(marker => {
            marker.style.display = 'none'
        });

        network()


        toggle = 1
    } else {
        tiles.removeFrom(map)
        markers.forEach(marker => {
            marker.style.display = 'block'
        });

        lines.forEach(line => {
            line.style.display = 'none'
        });
        
        // QUI
        toggle = 0
    }
    }


// evento per cambiare la mappa

document.getElementById("changeMap").addEventListener("click", () => {
    toggleMap(toggle)
})


// In base alla dimensione dello schermo, centra in modo differente la mappa

var x = window.matchMedia("(max-width: 450px)")
      
if (x.matches) {
    var map = L.map('map',{
        minZoom: 11,
        maxZoom: 16,
    }).fitWorld();
        map.panTo(new L.LatLng( 44.022944686536185 , 11.773438401287423))
      
} else {

    var map = L.map('map',{ 
        minZoom: 12,
        maxZoom: 16,
    }).fitWorld();
        map.panTo(new L.LatLng(  44.03009912078176 , 11.828155517578125))
}




// Popola la mappa con tiles + copyright open street map

let tiles= L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributor',    
}).addTo(map);



// Dichiara due markers differenti da utilizzare per popolare la mappa

var dot = L.icon({
        iconUrl: 'https://images.vexels.com/media/users/3/139158/isolated/preview/c862a3c9ef219140fb365301f9ebbd50-black-dot-by-vexels.png',
        iconSize:     [25], // size of the icon
    });
var dotSmall = L.icon({
        iconUrl: 'https://images.vexels.com/media/users/3/139158/isolated/preview/c862a3c9ef219140fb365301f9ebbd50-black-dot-by-vexels.png',
        iconSize:     [15,15], // size of the icon
    });



// Opzioni per i popup

var popupOptions =
    {  closeButton: false,
        autoClose: false,
        'maxWidth': '500',
        'className' : 'another-popup' // classname for another popup
    }




// Toggle sidebar su mobile

document.querySelector('.closeSidebar').addEventListener('click', () =>{

    document.querySelector('.sidebar').style.display = 'none'
    document.getElementById("map").style.opacity = 1
    document.getElementById("changeMap").style.opacity = 1
    document.getElementById("scaleKm").style.opacity = 1
    document.querySelector(".showSidebar").style.opacity = 1
})

document.querySelector('.showSidebar').addEventListener('click', () =>{

    document.querySelector(".showSidebar").style.opacity = .2
    document.querySelector('.sidebar').style.display = 'flex'
    document.getElementById("map").style.opacity = .2
    document.getElementById("changeMap").style.opacity = .2
    document.getElementById("scaleKm").style.opacity = .2
})
  
  
  

  

// Setta bottoni zoom mappa

L.control.scale().addTo(map);

let clickIn = document.querySelector(".leaflet-control-zoom-in")
let clickOut = document.querySelector(".leaflet-control-zoom-out")

  

// altera legenda kilometrica 

clickIn.addEventListener("click",()=>{
        
    let widthKm = document.querySelector(".leaflet-control-scale-line").style.width
    let Km = document.querySelector(".leaflet-control-scale-line").innerHTML
    
    let scale = document.querySelectorAll(".scale")
        scale.forEach(el => {
            el.style.width = widthKm
        });
        
        document.querySelector("#km").innerHTML = Km
    })
  
    
clickOut.addEventListener("click",()=>{

    let widthKm = document.querySelector(".leaflet-control-scale-line").style.width
    let Km = document.querySelector(".leaflet-control-scale-line").innerHTML
    
    let scale = document.querySelectorAll(".scale")
        scale.forEach(el => {
            el.style.width = widthKm
        });

    document.querySelector("#km").innerHTML = Km
})
  
clickIn.click()
clickOut.click()




    window.dispatchEvent(new Event("resize"));