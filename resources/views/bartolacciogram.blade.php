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

        <style>
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

    <div class="buttons">
        <button id="changeMap"><a href="/">HABITARE</a></button>
        <button class="showSidebar">info</button>
    </div>

    


    <div class="flex sidebar">
      <div class="top">
        <div class="flex"><span><a href="/programma#uno">15-16</a></span><span><a href="/programma#tre">22-23</a></span><span><a href="/programma#cinque">29-30</a></span><span>Luglio 2023</span></div>

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
            <a href="/info">TUTTE LE INFO!</a>
            <BR>
            <a href="/programma">PROGRAMMA</a>
            
        </div>

            <p>
                Per navigare nei luoghi ed eventi del festival e del territorio, ti invitiamo ad utilizzare questa piattaforma, la Piattaforma Habitare: una mappa interattiva e condivisa, ma anche strumento di orientamento che permetterà di conoscere e scoprire i luoghi, gli eventi, e tutte le possibilità che circondano il festival.                
            </p>

            <h2 class="exp">ISTRUZIONI:</h2>

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

    // Dichiarazioni globali

    var markers


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




    // Popola la mappa con tiles + copyright open street map

//     let tilesBW= L.tileLayer('https://tile.thunderforest.com/mobile-atlas/{z}/{x}/{y}.png?apikey=d93d6b0ff1934fefb1df41ceacb4614d', {
// 	attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
// 	maxZoom: 20
// })
    
    let tiles= L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributor',    
    })


//     var tiles = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/toner/{z}/{x}/{y}{r}.{ext}', {
// 	attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
// 	subdomains: 'abcd',
// 	minZoom: 0,
// 	maxZoom: 20,
// 	ext: 'png'
// });

tiles.addTo(map)


    // Opzioni per i popup

    var popupOptions =
        {  closeButton: false,
            autoClose: false,
            'maxWidth': '500',
            'className' : 'another-popup' // classname for another popup
        }

    var dotSmall = L.icon({
            iconUrl: 'https://images.vexels.com/media/users/3/139158/isolated/preview/c862a3c9ef219140fb365301f9ebbd50-black-dot-by-vexels.png',
            iconSize:     [15,15], // size of the icon
        });


        @foreach ($postsFromUsers as $key => $post)

        marker = L.marker([{{ $post['lat'] }},{{ $post['lng'] }}], {radius: 8, icon: dotSmall}).bindPopup(`<i>Pubblicato da {!! $post["name"] !!}</i><br><br><div class="postContent">{!! $post["post"] !!}</div>`,popupOptions).addTo(map);
            @endforeach


        


        

    

    function toggleCluster(cluster){
        if (map.hasLayer(cluster)){
            map.removeLayer(cluster)
        } else {
            map.addLayer(cluster)
        }
    }



        // crea gruppi cluster per ogni weekend
    
        var cluster = L.markerClusterGroup({zoomToBoundsOnClick: false});
    


        // posta nuovi contenuti

        var lat, lng, name, post;

        let postPopup = `<div id="postDiv">
                        <form  action="/pippo" method="POST" id="postData" style="display: flex; align-items: center; gap: 10px;">
                            @csrf

                            <input hidden value="" name="lat" id="lat">
                            <input hidden value="" name="lng" id="lng">

                            <div style="display: flex; flex-direction:column">
                                <input placeholder="Il tuo nome qui" id="postAuthor" name="name" type="text">
                                <textarea rows="4" cols="20" wrap="hard" name="post" placeholder="E qui lascia un pensiero!" id="postContent"  type="text"></textarea>
                                <input type="file" name="file">
                            </div>
                    
                            <button style="background: orange; border-radius: 5px; color: black;" id="submit"><input type="submit"></button>
                        </form>
                        </div>`

        map.addEventListener('dblclick', function(ev) {
            lat = ev.latlng.lat;
            lng = ev.latlng.lng;

            let newPost = L.circleMarker([lat,lng],{draggable:true,radius: 3}).addTo(map).bindPopup(postPopup).openPopup();

            document.getElementById("lat").value = ev.latlng.lat
            document.getElementById("lng").value = ev.latlng.lng

        })
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