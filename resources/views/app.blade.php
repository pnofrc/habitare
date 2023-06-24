<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- PWA  -->
        <meta name="theme-color" content="white"/>
        <link rel="apple-touch-icon" href="{{ asset('/assets/habitare/H.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">

        <link rel="stylesheet" href="/app.css">

        {{-- <script src="/leaflet/leaflet-data-markers.js"></script> --}}

        <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""
        />
        <script
        src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
        crossorigin=""
        ></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.3/leaflet.markercluster.js" integrity="sha512-OFs3W4DIZ5ZkrDhBFtsCP6JXtMEDGmhl0QPlmWYBJay40TT1n3gt2Xuw8Pf/iezgW9CdabjkNChRqozl/YADmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.3/MarkerCluster.Default.min.css" integrity="sha512-fYyZwU1wU0QWB4Yutd/Pvhy5J1oWAwFXun1pt+Bps04WSe4Aq6tyHlT4+MHSJhD8JlLfgLuC4CbCnX5KHSjyCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.3/MarkerCluster.min.css" integrity="sha512-ENrTWqddXrLJsQS2A86QmvA17PkJ0GVm1bqj5aTgpeMAfDKN2+SIOLpKG8R/6KkimnhTb+VW5qqUHB/r1zaRgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet.markercluster.layersupport@2.0.1/dist/leaflet.markercluster.layersupport.js"></script>
    </head>
    <body>

    <div class="buttons">
        <button id="changeMap">🌍</button>
        <button class="showSidebar">info</button>
        <button id="categorieToggle">Categorie</button>
        <button id="giornateToggle">Giornate</button>
    </div>

    <div id="categories">
        @if ($categories ?? '')
            
            @foreach ($categories as $category)
                <li  style="color:{{$category['color']}}"  id="{{str_replace(' ', '_',$category['title'])}}">{{$category['title']}}
            @endforeach

        @endif
    </div>


    <div id="calendario">

        <button onclick="selects()">Seleziona tutto</button><br>
        <button onclick="deSelect()">Deseleziona tutto</button>

        <br>    

        <input checked type="checkbox" name="chk" onclick="toggleCluster(zero)" >
        <label for="14">14 Luglio | Tredozio</label><br>
        <input checked type="checkbox" name="chk" onclick="toggleCluster(uno)">
        <label for="15">15 Luglio | Rocca</label><br>
        <input checked type="checkbox" name="chk" onclick="toggleCluster(due)">
        <label for="16">16 Luglio | Rocca</label><br>
        <input type="checkbox" name="chk" onclick="toggleCluster(tre)">
        <label for="22">22 Luglio | Tredozio</label><br>
        <input type="checkbox" name="chk" onclick="toggleCluster(quattro'">
        <label for="23">23 Luglio | Tredozio</label><br>
        <input type="checkbox" name="chk" onclick="toggleCluster(cinque)">
        <label for="30">30 Luglio | Portico San Benedetto</label><br>
        <input type="checkbox" name="chk" onclick="toggleCluster(sei)">
        <label for="31">31 Luglio | Portico San Benedetto</label><br>

    </div>


    <div class="flex sidebar">
      <div class="top">
        <div class="flex"><span>14-15-16</span><span>20-23</span><span>29-30</span><span>Luglio</span><span>2023</span></div>

        <img id="title" src="/assets/title.png">

        <div class="text">
          <h2>Nuove Prospettive Cult(r)urali</h2>
          <p>
            Il festival Habitare è un festival nomade che si muove adattandosi e abitando ogni weekend un borgo differente.
            Le attività sono state concentrate dedicando un weekend specifico ad ognuno dei tre comuni coinvolti nel festival, che diventeranno ogni volta epicentro delle attività. In ognuno dei comuni potrete trovare un punto di ritrovo e info, sempre attivo per accogliervi.
            
            
            Ogni giorno, dalle 10:00 fino alle 00:00 Il festival si diffonde nei tre comuni proponendo durante questi weekend, laboratori, concerti, performance, talks e tavoli rotondi, in vari luoghi disseminati lungo strade, parchi e sentieri. Il festival intende inserirsi nella dinamica culturale, sociale e produttiva di ognuno di questi borghi. Ci immaginiamo infatti il borgo come festival stesso, in cui siete invitati a muovervi liberamente in quanto abitanti.

        </p>

        <div class="links">
            <a href="">OPEN CALL</a>
            <BR>
            <a href="/info">TUTTE LE INFO!</a>
        </div>

            <p>
                Per navigare nei luoghi ed eventi del festival e del territorio, ti invitiamo ad utilizzare questa piattaforma, la Piattaforma Habitare: una mappa interattiva e condivisa, ma anche strumento di orientamento che permetterà di conoscere e scoprire i luoghi, gli eventi, e tutte le possibilità che circondano il festival.                
            </p>

            <h2>ISTRUZIONI:</h2>

            <p>Ci sono due liste: 
                <li>una colorata, dove ogni colore indica la categoria corrisposta sui pin dei singoli eventi</li>
                <li>una interagibile dove puoi filtrare gli eventi per giornata</li>

                <br>

                Si può interagire con la mappa navigandola in diversi modi: "ingrandendo" lo schermo con il pollice e l'indice (se da cellulare!), cliccando sui pulsanti + e - in alto a sinistra, cliccando sui pin.

                <br>
                Avrai notato un bottone con un globo: puoi cambiare la mappa con una pura distesa bianca.
            </p>

            <p>
        </div>  
    </div>  

      <div class="bottom flex">
        <span>
          Progetto co-finanziato dal Ministero per la Transizione Ecologica nell'ambito del processo di attuazione della Strategia Nazionale per lo Sviluppo Sostenibile
        </span>
      
        <div id="loghi">
            <img src="/assets/loghi/habitat.png">
            <img src="/assets/loghi/distrettoA.png">
            <img id="ministero" src="/assets/loghi/mase.png">
            <img src="/assets/loghi/sns.png">
        </div>

        <div class="closeSidebar">
          <button>Chiudi</button>
        </div>
    </div>
   </div>




    <div id="map"></div>
    <script src="/app.js" async defer></script>

    <script async defer type="text/javascript">

    // Dichiarazioni globali

    var markers



    // Toggle mappa geo / vuota


    var toggle = 1

    function toggleMap(bool) {
        let markers = document.querySelectorAll(".leaflet-marker-icon.leaflet-interactive")
        let lines = document.querySelectorAll(".leaflet-pane > svg path.leaflet-interactive")
        if (bool === 0){
            tiles.addTo(map);
            
            // markers.forEach(marker => {
            //     marker.style.display = 'none'
            // });

            // document.getElementById("categories").style.display = 'none'

            toggle = 1
        } else {
            tiles.removeFrom(map)
            // markers.forEach(marker => {
            //     marker.style.display = 'flex'
            // });

            // lines.forEach(line => {
            //     line.style.display = 'none'
            // });

            // document.getElementById("categories").style.display = 'block'
            
            // QUI
            toggle = 0
        }
    }


    var togCat = 0

    function toggleCat(bool) {
        let categories = document.querySelector("#categories")
        if (bool === 0){
          categories.style.display = 'block'
            togCat = 1
            toggleGior(1)
        } else {
           categories.style.display = 'none'
            // QUI
            togCat = 0
            
        }
        
    }


    var togGior = 0

    function toggleGior(bool) {
        let giornate = document.querySelector("#calendario")
        if (bool === 0){
            giornate.style.display = 'block'
            togGior = 1
            toggleCat(1)
        } else {
           giornate.style.display = 'none'
            // QUI
            togGior = 0
        }
        

    }
    



    // evento per cambiare la mappa
    document.getElementById("changeMap").addEventListener("click", () => {
        toggleMap(toggle)
    })

    // evento per categorie su mobile
    document.getElementById("categorieToggle").addEventListener("click", () => {
        toggleCat(togCat)
    })

    // evento per giornate su mobile
    document.getElementById("giornateToggle").addEventListener("click", () => {
        toggleGior(togGior)
    })


    // In base alla dimensione dello schermo, centra in modo differente la mappa

    var x = window.matchMedia("(max-width: 450px)")
        
    if (x.matches) {
        var map = L.map('map',{
            minZoom: 11,
            maxZoom: 18,
        }).fitWorld();
            map.panTo(new L.LatLng( 44.022944686536185 , 11.773438401287423))
        
    } else {

        var map = L.map('map',{ 
            minZoom: 12,
            maxZoom: 18,
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


    // Se esistono post..

    @if ($posts ?? '')

        // posta tutti i post
        let categoriesPost 
        let categoriesPostArray
        let colors
        
        var zero = L.markerClusterGroup();
        var uno = L.markerClusterGroup();
        var due = L.markerClusterGroup();
        var tre = L.markerClusterGroup();
        var quattro = L.markerClusterGroup();
        var cinque = L.markerClusterGroup();
        var sei = L.markerClusterGroup();

        @foreach ($posts as $key => $post)
        
           categoriesPost = ''
           categoriesPostArray = []
           colors = ''
            // crea l'icona per il marker  
            // e aggiungi categorie come classe (per filtraggio)

            console.log("{{$post['calendario']}}")
            

            // Colora il marker in base alla categoria
            @foreach ($post['categories'] as $key => $category)
                @foreach ($categories as $categoryListed)
                    @if ($category == $categoryListed['title']) 
                        categoriesPostArray.push("{{$categoryListed['color']}}")
                    @endif

                @endforeach

   
                if (categoriesPostArray.length == 1){
                    colors = categoriesPostArray[0] 
                } else if (categoriesPostArray.length == 2) {
                    colors = "conic-gradient("+ categoriesPostArray[0] + " 0% 50%, " + categoriesPostArray[1] + " 50% 100%)"
                } else if (categoriesPostArray.length == 3) {
                    colors = "conic-gradient("+ categoriesPostArray[0] + " 0% 33%, " + categoriesPostArray[1] + " 33% 66%, "  + categoriesPostArray[2] + " 67% 100%)"
                } else if  (categoriesPostArray.length == 4) {
                    colors = "conic-gradient("+ categoriesPostArray[0] + " 0% 25%, " + categoriesPostArray[1] + " 25% 50%, "  + categoriesPostArray[2] + " 50% 75%, " + categoriesPostArray[3] + " 75% 100%)"
                }

                categoriesPost = categoriesPost + ' ' + "{{$category}}".replaceAll(" ", "_") 
            @endforeach
            


            var myIcon = L.divIcon({html: "<b>{{$post['quando']}}</b>"+`<div class='holder' style='width: 25px; height: 25px; border-radius: 20px; background:${colors};'></div>`+"<span class='titlePost' style='background: rgba(255,255,255,0.6);    padding: 3px;border-radius: 10px;'>{{$post['titolo'] }}</span>"});


            // Crea il marker
            marker = L.marker([{{ $post['coordinate'] }}], {radius: 7, icon: myIcon}).bindPopup(`<a target="_blank" href='http://maps.google.com/maps?q=${"{{$post['coordinate']}}"}'>Clicca per aprire il navigatore!</a><br>{!! $post["testo"] !!}`,popupOptions);
            

            // Controlla in che giorno è e mettilo nel cluster
            if ("{{$post['calendario']}}" == 'zero') {
                zero.addLayer(marker)
            } else if ("{{$post['calendario']}}" == 'uno') {
                uno.addLayer(marker)
            } else if ("{{$post['calendario']}}" == 'due') {
                due.addLayer(marker)
            } else if ("{{$post['calendario']}}" == 'tre') {
                tre.addLayer(marker)
            } else if ("{{$post['calendario']}}" == 'quattro') {
                quattro.addLayer(marker)
            } else if ("{{$post['calendario']}}" == 'cinque') {
                cinque.addLayer(marker)
            } else  {
                sei.addLayer(marker)
            } 
            

            
         @endforeach
    @endif

    // aggiungi all mappa i clusters
    map.addLayer(zero);
    map.addLayer(uno);
    map.addLayer(due);
    map.addLayer(tre);
    map.addLayer(quattro);
    map.addLayer(cinque);
    map.addLayer(sei);

    function toggleCluster(cluster){
        if (map.hasLayer(cluster)){
            map.removeLayer(cluster)
        } else {
        map.addLayer(cluster)
        }
    }



    // // addEventListener per ogni categoria per filtrare
    // function filtering(){

    //     let selectedCategories = []
    //     document.querySelectorAll("#categories input").forEach(element => {
    //         if (element.checked){
    //             selectedCategories.push(element.id)
    //         }
    //     });
    //     // console.log(selectedCategories)

    //     document.querySelectorAll(".leaflet-marker-icon").forEach(post => {
    //         post.style.display = 'none'
    //     });

    //     selectedCategories.forEach(category => {
    //         document.querySelectorAll(`.${category}`).forEach(post =>{
    //             post.parentNode.style.display = 'flex'
    //         })
    //     });
    // }



    //     // quando una categoria viene selezionata/deselezionata, filtra

    //     document.querySelectorAll("#categories input").forEach(element => {
    //             element.addEventListener("click", ()=>{
    //                 filtering()
    //             })
    //         });




        // crea gruppi cluster per ogni weekend
    
        var cluster = L.markerClusterGroup({zoomToBoundsOnClick: false});
        


        // controlla quale mappa deve andare

        // toggleMap(toggle)




        // seleziona tutti i checkbox

        function selects(){  
                var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
                map.addLayer(zero)
                map.addLayer(uno)
                map.addLayer(due)
                map.addLayer(tre)
                map.addLayer(quattro)
                map.addLayer(cinque)
                map.addLayer(sei)
            }  


        // deselezionali

        function deSelect(){  
            var ele=document.getElementsByName('chk');  
            for(var i=0; i<ele.length; i++){  
                if(ele[i].type=='checkbox')  
                    ele[i].checked=false;  
            }  
            map.removeLayer(zero)
            map.removeLayer(uno)
            map.removeLayer(due)
            map.removeLayer(tre)
            map.removeLayer(quattro)
            map.removeLayer(cinque)
            
        }      




        // posta nuovi contenuti

        // var lat, lng, postContent;

        // let postPopup = `<div id="postDiv">
        //                 <form  id="postData">
        //                     <input checked id="postContent"  type="text">
        //                     <button id="submit">Post</button>
        //                 </form>
        //                 </div>`

        // map.addEventListener('dblclick', function(ev) {
        //     lat = ev.latlng.lat;
        //     lng = ev.latlng.lng;
        //     console.log('"lat": ',lat,',', '"lng":',lng)
        //     let newPost = L.circleMarker([lat,lng],{draggable:true,radius: 3}).addTo(map).bindPopup(postPopup).openPopup();

        //     form = document.getElementById("submit")
        //     form.addEventListener('click', function(event) {

        //     var r = new XMLHttpRequest();
        //     r.open("POST", "/post", true);

        //     post2send = {}
        //     post2send["lng"] = lng
        //     post2send["lat"] = lat
        //     post2send["post"] = document.getElementById("postContent").value

        //     r.send(JSON.stringify(post2send));
            
        // }) 
        // })
    </script>

    <!-- PWA -->
    <script src="{{ asset('/sw.js') }}"></script>
    {{-- <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script> --}}

    </body>
</html>