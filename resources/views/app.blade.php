<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

       <!-- PWA  -->
        <meta name="theme-color" content="white"/>
        <link rel="apple-touch-icon" href="{{ asset('/assets/habitare/H.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/app.css">


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
        <script src="leaflet/leaflet-providers.js"></script>

        <link rel="stylesheet"  href="/leaflet/leaflet-gps.css"/>

        <script src="/leaflet/leaflet-gps.js"></script>

        <style>

            :root{
                --blue: rgb(41,172,228);
                --green:rgb(36,192,68);
                --orange: rgb(236,108,0);
            }


            a{
                color: black !important
            }
            .marker-cluster-small div {
                background-color: black !important;
                border: solid grey 1px !important;
            }    

            img{
                max-width: unset;
                width: 100%;
                height: auto;
            }

            figcaption{
                display: none !important
            }


         
        </style>
</head>
    <body>

        <div id="loading">
            <img id="loading-image" src="path/to/ajax-loader.gif" alt="Loading..." />
          </div>




        <button id="star-five"><a id="cretina" href="/info">INFO!</a></button>
        <button id="heart"><a href="/programma">PROGRAMMA!</a></button>
    <div class="buttons">
        <button id="changeMap"><a href="/piadagram">PIADAGRAM</a></button>
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
        <label for="14">14 Luglio | Tredozio  (Welcoming)</label><br>
        <input checked type="checkbox" name="chk" onclick="toggleCluster(uno)">
        <label for="15">15 Luglio | Rocca S. Casciano</label><br>
        <input checked type="checkbox" name="chk" onclick="toggleCluster(due)">
        <label for="16">16 Luglio | Rocca S. Casciano</label><br>
        <input  checked type="checkbox" name="chk" onclick="toggleCluster(tre)">
        <label for="22">22 Luglio | Tredozio</label><br>
        <input  checked type="checkbox" name="chk" onclick="toggleCluster(quattro)">
        <label for="23">23 Luglio | Tredozio</label><br>
        <input checked  type="checkbox" name="chk" onclick="toggleCluster(cinque)">
        <label for="29">29 Luglio | Portico di Romagna</label><br>
        <input checked  type="checkbox" name="chk" onclick="toggleCluster(sei)">
        <label for="30">30 Luglio | Portico di Romagna</label><br>

    </div>


    <div class="flex sidebar">
      <div class="top">
        <div class="flex" style="margin-bottom: 3rem"><span><a href="/programma#uno">15-16</a></span><span><a href="/programma#tre">22-23</a></span><span><a href="/programma#cinque">29-30</a></span><span>Luglio 2023</span></div>
        <a href="/info" id="infoPlus" style="text-align: center; width: inherit; display: inline-block;">INFO UTILI QUA!</a>

        <img id="title" src="/assets/title.png">

        <div class="text">
          <h2>Nuove Prospettive Cult(r)urali</h2>
          <p>
            Habitare è un Festival nomade che si svolgerà a Luglio 2023 tra Rocca S. Casciano, Tredozio, Portico e S. Benedetto (FC).<br><br>
            Ogni sabato e domenica, dalle 10 alle 00, il Festival popolerà un differente borgo, delineando un percorso collettivo fatto di laboratori, presentazioni, tavole rotonde, musica, mostre, installazioni ed escursioni.<br><br>
            Il filo conduttore é la rilettura critica ed immaginativa della vita nelle aree interne d'Italia, attraverso pratiche cult(r)urali che possano definire il rapporto tra l'immaginabile, il possibile e l'esistente.<br>
            Nello sviluppo condiviso di tale dimensione, comunità e territori possono diventare vettori di sostenibilità sociale e di attivazione partecipata di nuove dinamiche dell'abitare, espresse e vissute tramite linguaggi creativi contemporanei.
            <br><br>
            Zaini in spalla!
        </p>

        <div class="links">
            <a href="/call">OPEN CALL - MERCATO</a>
            <BR>
            <a href="/programma">PROGRAMMA</a>
            
        </div>

            <p>
                Per navigare nei luoghi ed eventi del festival e del territorio, ti invitiamo ad utilizzare questa piattaforma, la Piattaforma Habitare: una mappa interattiva e condivisa, ma anche strumento di orientamento che permetterà di conoscere e scoprire i luoghi, gli eventi, e tutte le possibilità che circondano il festival.                
            </p>

            <h2  class="exp">ISTRUZIONI:</h2>

            <p>Con la lista colorata, puoi filtrare gli eventi in base alla tipologia.
                Puoi inoltre filtrare gli eventi spuntando le caselle in base ai giorni in cui vorrai venire.
                
                Nel caso qualcosa andasse storto, puoi sempre deselezionare tutto e ricominciare da capo con la distillazione.                
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
          <button>VAI ALLA MAPPA</button>
        </div>
    </div>
   </div>




    <div id="map"></div>
    <script src="/app.js" async defer></script>

    <script async defer type="text/javascript">
    $( document ).ready(function() {
    // Dichiarazioni globali

    var markers




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
            maxZoom: 20,
        }).fitWorld();
            map.panTo(new L.LatLng( 44.022944686536185 , 11.773438401287423))
        
    } else {

        var map = L.map('map',{ 
            minZoom: 12,
            maxZoom: 20,
        }).fitWorld();
            map.panTo(new L.LatLng(  44.03009912078176 , 11.828155517578125))
    }


    // GPS

    var gpsMarker = L.icon({
                    iconUrl: '/gps.png',
                    iconSize:     [20,20], // size of the icon
                });
                


        var gps = new L.Control.Gps({
            autoActive:true,
            autoCenter:true,
            setView:true,
            accuracy: true,
            marker: new L.Marker([0,0],{radius: 8, icon: gpsMarker}),
        
        });//inizialize control

        gps
        .on('gps:located', function(e) {
            //	e.marker.bindPopup(e.latlng.toString()).openPopup()
            console.log(e.latlng, map.getCenter())
        })
        .on('gps:disabled', function(e) {
            e.marker.closePopup()
        });

        gps.addTo(map);

    // Popola la mappa con tiles + copyright open street map

    let tilesBW= L.tileLayer('https://tile.thunderforest.com/mobile-atlas/{z}/{x}/{y}.png?apikey=d93d6b0ff1934fefb1df41ceacb4614d', {
	attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
	maxZoom: 20
}).addTo(map);
    
    let tiles= L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributor',    
    });



    // Opzioni per i popup

    var popupOptions =
        {  closeButton: false,
            autoClose: false,
            'maxWidth': '300',
            'maxHeight': '400',
            'className' : 'another-popup' // classname for another popup
        }

    // SCustom clusters per i comuni

    let clusterOptionsRocca = {polygonOptions: {
                        fillColor: 'rgb(236,108,0)',
                        color: 'rgba(236,108,0,0.52)',
                        weight: 0.5,
                        opacity: 1,
                        fillOpacity: 0.5
                    }}

    let clusterOptionsTredozio = {polygonOptions: {
                        fillColor: 'rgb(41,172,228)',
                        color: 'rgba(41,172,228,0.5)',
                        weight: 0.5,
                        opacity: 1,
                        fillOpacity: 0.5
                    }}

    let clusterOptionsPortico = {polygonOptions: {
                        fillColor: '#1b2557',
                        color: '#1b2557',
                        weight: 0.5,
                        opacity: 1,
                        fillOpacity: 0.5
                    }}

    @if ($posts ?? '')

        // posta tutti i post
        let categoriesPost 
        let categoriesPostArray
        let colors
        
        var zero = L.markerClusterGroup(clusterOptionsTredozio);
        var uno = L.markerClusterGroup(clusterOptionsRocca);
        var due = L.markerClusterGroup(clusterOptionsRocca);
        var tre = L.markerClusterGroup(clusterOptionsTredozio);
        var quattro = L.markerClusterGroup(clusterOptionsTredozio);
        var cinque = L.markerClusterGroup(clusterOptionsPortico);
        var sei = L.markerClusterGroup(clusterOptionsPortico);

        @foreach ($posts as $key => $post)
        
           categoriesPost = ''
           categoriesPostArray = []
           colors = ''
            // crea l'icona per il marker  
            // e aggiungi categorie come classe (per filtraggio)

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
            marker = L.marker([{{ $post['coordinate'] }}], {radius: 7, icon: myIcon}).bindPopup(`<a target="_blank" class="linkMaps" href='http://maps.google.com/maps?q=${"{{$post['coordinate']}}"}'>Clicca per aprire il navigatore!</a><br><div class="postContent">{!! $post["testo"] !!}</div>`,popupOptions);
            

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


    // Toggle mappa geo / vuota

    map.addLayer(zero);
    map.addLayer(uno);
    map.addLayer(due);
    map.addLayer(tre);
    map.addLayer(quattro);
    map.addLayer(cinque);
    map.addLayer(sei);

    var toggle = 0

    function toggleCluster(cluster){
        if (map.hasLayer(cluster)){
            map.removeLayer(cluster)
        } else {
        map.addLayer(cluster)
        }
    }

        // crea gruppi cluster per ogni weekend
    
        var cluster = L.markerClusterGroup({zoomToBoundsOnClick: false});
    

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
            map.removeLayer(sei)
        }      

      

        L.marker([  44.042933431708875, 11.676750183105469],{icon: L.icon({
              iconUrl: "assets/disegnini/1.png",
              iconSize: [100]
          })}).addTo(map);

          L.marker([43.98219273809204, 11.78764343261719],{icon: L.icon({
              iconUrl: "assets/disegnini/9.png",
              iconSize: [100]
          })}).addTo(map);


        L.marker([44.04614157509527, 11.773223876953127],{icon: L.icon({
              iconUrl: "assets/disegnini/7.png",
              iconSize: [60]
          })}).addTo(map);


        L.marker([43.9349893800415, 11.891670227050781],{icon: L.icon({
              iconUrl: "assets/disegnini/4.png",
              iconSize: [60]
          })}).addTo(map);


        L.marker([44.09202367722237, 11.794166564941408 ],{icon: L.icon({
              iconUrl: "assets/disegnini/6.png",
              iconSize: [60]
          })}).addTo(map);


        L.marker([44.13910215406817, 11.608772277832033 ],{icon: L.icon({
              iconUrl: "assets/disegnini/2.png",
              iconSize: [60]
          })}).addTo(map);

        });
    </script>

    <!-- PWA -->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        // if (!navigator.serviceWorker.controller) {
        //     navigator.serviceWorker.register("/sw.js").then(function (reg) {
        //         console.log("Service worker has been registered for scope: " + reg.scope);
        //     });
        // }
    </script>

    </body>
</html>