<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- PWA  -->
        <meta name="theme-color" content="green"/>
        <link rel="apple-touch-icon" href="{{ asset('/assets/habitare/H.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">

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

    </head>
    <body>
        <h1>HABITARE</h1>


        {{-- <button id="changeMap">🌍</button> --}}
    <button class="showSidebar">info</button>

{{-- 
    <div id="scaleKm">
      <div id="upper">
        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>
      </div>
      <div id="downer" >
        <div class="scale" id="km"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>
      </div>
    </div> --}}

    <div id="categories">
        @if ($categories ?? '')
            
            @foreach ($categories as $category)
                <input checked type="checkbox" id="{{str_replace(' ', '_',$category)}}">{{$category}}<br>
            @endforeach

        @endif
    </div>



    <div class="flex sidebar">
      <div class="top">
        <div class="flex"><span>20-23</span><span>Luglio</span><span>2023</span></div>

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
                Per navigare nei luoghi ed eventi del festival e del territorio, ti invitiamo ad utilizzare la Piattaforma Habitare: una mappa interattiva e condivisa, ma anche strumento di orientamento che permetterà di conoscere e scoprire i luoghi, gli eventi, e tutte le possibilità che circondano il festival.

                ISTRUZIONI:
                <ul>
                    <li></li>
                </ul>
            </p>

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

    var toggle = 0

    function toggleMap(bool) {
        let markers = document.querySelectorAll(".leaflet-marker-icon.leaflet-interactive")
        let lines = document.querySelectorAll(".leaflet-pane > svg path.leaflet-interactive")
        if (bool === 0){
            tiles.addTo(map);
            
            markers.forEach(marker => {
                marker.style.display = 'none'
            });


            toggle = 1
        } else {
            tiles.removeFrom(map)
            markers.forEach(marker => {
                marker.style.display = 'flex'
            });

            lines.forEach(line => {
                line.style.display = 'none'
            });
            
            // QUI
            toggle = 0
        }
    }


    // evento per cambiare la mappa

    // document.getElementById("changeMap").addEventListener("click", () => {
    //     toggleMap(toggle)
    // })


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


    // Se esistono post..

    @if ($posts ?? '')

        // posta tutti i post

        @foreach ($posts as $key => $post)

            // crea l'icona per il marker

            var myIcon = L.divIcon({html: "<img class='holder' style='width: 25px' src='http://2.bp.blogspot.com/-6PyHhH9ZUZQ/UN6oNGxkoII/AAAAAAAAAYA/j7YnZurZFXs/s1600/dot_black.png'>"+"<span class='titlePost'>{{$post['titolo'] }}</span>"});
            

            // Crea il marker

            marker = L.marker([{{ $post['lat'] }}, {{ $post['lng'] }}], {radius: 7, icon: myIcon, className: 'boia'}).addTo(map).bindPopup('{!! $post["testo"] !!}',popupOptions);


            // aggiungi categorie come classe (per filtraggio)

            @foreach ($post['categories'] as $key => $category)
                marker._icon.classList.add("{{$category}}".replaceAll(" ", "_"));
            @endforeach
            
         @endforeach
    @endif



    // addEventListener per ogni categoria per filtrare
    function filtering(){

        let selectedCategories = []
        document.querySelectorAll("#categories input").forEach(element => {
            if (element.checked){
                selectedCategories.push(element.id)
            }
        });
        console.log(selectedCategories)

        document.querySelectorAll(".leaflet-marker-icon").forEach(post => {
            post.style.display = 'none'
        });
        selectedCategories.forEach(category => {
            document.querySelectorAll(`.${category}`).forEach(post =>{
                post.style.display = 'flex'
            })
        });
    }

    document.querySelectorAll("#categories input").forEach(element => {
            element.addEventListener("click", ()=>{
                filtering()
            })
        });
    

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