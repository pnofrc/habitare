<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="Habitare PiadaGram è una mappa dove puoi pubblicare racconti, poesie, fotografie, disegni, consigli su dove mangiare, ricordi passati o speranze future, qualsiasi cosa! 
        Creiamo una nostra mappa della Romagna Toscana, fatta da noi per noi e per futuri viandanti.">

        <meta name="og:description" content="Habitare PiadaGram è una mappa dove puoi pubblicare racconti, poesie, fotografie, disegni, consigli su dove mangiare, ricordi passati o speranze future, qualsiasi cosa! 
        Creiamo una nostra mappa della Romagna Toscana, fatta da noi per noi e per futuri viandanti.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Habitare PiadaGram" />
        <meta property="og:url" content="https://habitare.habitattt.it/piadagram" />
        <meta property="og:image" content="https://habitare.habitattt.it/assets/habitare/H.png" />
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="https://habitare.habitattt.it/piadagram">

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
            .bartolaccio{
                font-size: 3.3vw
            }

            #title{width: 65%}

            a{color: black}

            .postContent,.postName{
                font-size: 1rem
            }

            button{
                z-index: 9;
                 position: relative;
                 font-size: 1rem;
                 border-radius: 10px
            }

            .buttons{
                display: flex;
                margin-bottom: 11px;
                flex-direction: column;
                margin-left: 11px;
                width: fit-content;
                bottom: 0;
                position: absolute;
                height: 84%;
    justify-content: space-between;
            }

            .flex-column{
                display: flex;
                flex-direction: column;
            }




            .closeSidebar{      z-index: 19;}
            .closeSidebar button{
                background-color: var(--green);
          
            }


            .filter {
                filter: grayscale(1);
            }

            #istruzioni{
                display: none;
                flex-direction: column;
                z-index: 100;
                position: relative;
                background: white;
                border-radius: 30px;
                width: 70%;
                margin-top: 5%;
                padding: 20px;
                margin-left: 15%;

            }

            li{
                padding: 10px 0;
               line-height: 1.5rem;
               font-size: 1.2rem
            }

            .filterCategory{
                position: absolute;
                z-index: 4;
                display: flex;
                flex-direction: column;
                top: 25%;
                margin-left: 11px;
                
            }

            .leaflet-popup-close-button span{
                color: black
            }


            .leaflet-popup-close-button{
                scale: 2;
            }
           


            .leaflet-popup-content-wrapper{
                padding: 10px;
            }

            #alert, #istruzionePost{
                display: none;
                position: absolute;
                width: 100vw;
                height: 100vh;
                flex-direction: column;
                z-index: 1000;
                padding: 10%;
                background: #d6dcd9e7;
                justify-content: center;
                text-align: center;
            }

            #alert p, #istruzionePost p{
                font-size: 2rem;
            }

            #istruzionePost{
                display: none
            }

            @media (max-width: 450px) {
                #istruzioni{
                background: white;
                width: 100%;
                height: 100%;
                overflow-y: scroll;
                padding: 40px 20px;
                margin: unset;
                border-radius: 0;
                align-items: center;
                flex-direction: column;
               padding-bottom: 5rem
            }

            #closeIstructions{bottom: 1rem;
            position: fixed;}

            .bartolaccio{
                font-size: 8vw
            }

            .buttons{
                margin-left: unset
            }

            .buttons {
                z-index: 2;
                left: 12px;
                top: unset;
    height: fit-content;
                justify-content: end;
            }
        }

            #loghi{
                width: 100% !important;
            }



            
        </style>
    </head>
    <body>

        <div id="istruzionePost">
            <p>Clicca sulla mappa dove vuoi salvare il post. Per essere pià precisi ti consigliamo di zoomare con gli appositi pulsanti in alto a sinistra!</p>
            <button onclick="closeIstructionsMap()">OK!</button>
        </div>

        <div id="alert">
            <p>Dove vuoi pubblicare il post?</p>
            <button onclick="posting(postPopup,lat,lng)">Pubblica sulla piattaforma</button>
            <button onclick="posting(localPostPopup,lat,lng)">Pubblica un post privato </button>
            <button style="color: white; background: black" onclick="togglePostingProcess()">Torna indietro</button>
        </div>




    <div class="buttons">
        <div class="flex-column">
            <button id="toggleInstructions">ISTRUZIONI</button>
            <button id="postMode">MODALITA' POST</button>
        </div>
        <button id="backTo"><a style="text-decoration: none" href="/">HABITARE HOMEPAGE</a></button>

    </div>


    <div class="flex sidebar">

        <div style="margin-top: 2rem; display: flex; flex-direction: column; align-items: center">
            <b class="bartolaccio">PiadaGram</b>
            <b>Creato da</b>
            <img id="title" src="/assets/title.png">
        </div>

        <div class="text">
          <h2>La bacheca pubblica della Romagna Toscana</h2>

          <p>
            <b>PiadaGram</b> è parte della piattaforma web <a href="../">Habitare</a> creata nel contesto del festival omonimo.<br><br>
            Chiunque può pubblicare su questa pagina racconti, poesie, fotografie, disegni, consigli su dove mangiare, ricordi passati o speranze future.<br>
            Per creare il post bisogna cliccare su un punto della mappa, geolocalizzandolo, di modo che possa essere raggiunto ed esplorato da futuri viandanti.<br>

    

           </p>
        </div>  

        <div class="bottom flex">
            <span>
                Habitare è un Festival nomade che si svolgerà a Luglio 2023 tra Rocca S. Casciano, Tredozio, Portico e S. Benedetto (FC).<br><br>
                Ogni sabato e domenica, dalle 10 alle 00, il Festival popolerà un differente borgo, delineando un percorso collettivo fatto di laboratori, presentazioni, tavole rotonde, musica, mostre, installazioni ed escursioni.<br><br>
                Il filo conduttore é la rilettura critica ed immaginativa della vita nelle aree interne d'Italia, attraverso pratiche cult(r)urali che possano definire il rapporto tra l'immaginabile, il possibile e l'esistente.
           </span>
            <span>
              Progetto co-finanziato dal Ministero per la Transizione Ecologica nell'ambito del processo di attuazione della Strategia Nazionale per lo Sviluppo Sostenibile
            </span>
            <div id="loghi">
                <img src="/assets/loghi/habitat.png">
                <img src="/assets/loghi/distrettoA.png">
                <img id="ministero" src="/assets/loghi/mase.png">
                <img src="/assets/loghi/sns.png">
            </div>
        </div>

    </div>  

      
      
       

        <div class="closeSidebar">
          <button>VAI SULLA BACHECA</button>
        </div>
    </div>
   </div>



   <div id="istruzioni">

        <h2><b class="exp">ISTRUZIONI</b></h2>

        <ol>
            <li>Decidere dove pubblicare il post. Si può navigare come una mappa qualsiasi; Più zoomerai più il risultato sarà preciso.</li>
            <li>Per pubblicare bisogna entrare in modalità "Post" con l'apposito bottone a sinistra.</li>
            <li>Una volta cliccato, la mappa sarà in bianco/nero. Ora clicca sul luogo per il post da te scelto. </li>
            <li>Puoi decidere se pubblicare il post per chiunque ( <i>Pubblica sulla piattaforma</i> ) oppure salvarlo come nota privata ( <i>Pubblica come post privato</i> ).</li>
            <li>Una volta riempiti i campi, basta solo cliccare il pulsante "Posta!"</li>
            <li>Se hai postato per chiunque, potrebbe volerci un po' di tempo per essere pubblicato dal team di Habitat.</li>
            <li>Se vuoi che un post venga eliminato, sentiti libere di scriverci per richiedere la rimozione.</li>
        </ol>

        <button id="closeIstructions">CHIUDI ISTRUZIONI</button>
   </div>


    <div id="map"></div>
    
    <div class="filterCategory">

        <div>
            <input onclick="selects()" type="radio" name="category" value="black" checked>
            <label>Tutti</label>
        </div>
        <br>

        <div>
            <input onclick="pick(idee)" type="radio" name="category" value="rgb(236,108,0)">
            <label>Idee</label>
        </div>

        <div>
            <input onclick="pick(memorie)" type="radio" name="category" value="rgb(41,172,228)">
            <label>Memorie</label>
        </div>
        
        <div>
            <input onclick="pick(ristoro)" type="radio"  name="category" value="rgb(36,192,68)">
            <label>Ristoro</label>
        </div>
        
        <div>
            <input onclick="pick(posti)" type="radio" name="category" value="#c051c7">
            <label>Posti</label>
        </div>

        <div>
            <input onclick="pick(eventi)" type="radio"  name="category" value="#c75151">
            <label>Eventi</label>
        </div>
        <br>
        <div>
            <input onclick="pick(personali)" type="radio"  name="category" value="grey">
            <label>Privati</label>
        </div>

    </div>

    <script async defer type="text/javascript">

        let t = true
        document.querySelector("#toggleInstructions").addEventListener("click", ()=>{
            if (t){document.querySelector("#istruzioni").style.display = 'flex'; t=!t}else{ document.querySelector("#istruzioni").style.display = 'none';t=!t}
        })

        document.querySelector("#closeIstructions").addEventListener("click", ()=>{
            if (t){document.querySelector("#istruzioni").style.display = 'flex'; t=!t}else{ document.querySelector("#istruzioni").style.display = 'none';t=!t}
        })

        // Toggle sidebar su mobile

        document.querySelector('.closeSidebar').addEventListener('click', () =>{

            if (document.querySelector('.sidebar').style.display = 'flex'){
                document.querySelector('.closeSidebar').style.display = 'none'
                document.querySelector('.sidebar').style.display = 'none'        }
            else if( document.querySelector('.sidebar').style.display = 'none'){
                document.querySelector('.sidebar').style.display = 'flex'
                document.querySelector('.closeSidebar').style.display = 'block'
            }

        })



        // window.dispatchEvent(new Event("resize"));


        // Dichiarazioni globali

        var markers


        // In base alla dimensione dello schermo, centra in modo differente la mappa

        var x = window.matchMedia("(max-width: 450px)")
            
        if (x.matches) {
            var map = L.map('map',{
                minZoom: 11,
                maxZoom: 18,
                // setMaxBounds: [L.latLng(40.712, -74.227),L.latLng(40.774, -74.125),] TODO: set boundaries
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
        })



        tiles.addTo(map)


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



        // Opzioni per i popup

        var popupOptions =
            {  closeButton: true,
                autoClose: true,
                'maxWidth': '300',
                'className' : 'another-popup' // classname for another popup
            }

        var dotSmall = L.icon({
                iconUrl: 'https://images.vexels.com/media/users/3/139158/isolated/preview/c862a3c9ef219140fb365301f9ebbd50-black-dot-by-vexels.png',
                iconSize:     [20,20], // size of the icon
            });

            var dotSmall

            // CATEGORIE

            var idee = L.markerClusterGroup();
            var memorie = L.markerClusterGroup();
            var ristoro = L.markerClusterGroup();
            var posti = L.markerClusterGroup();
            var eventi = L.markerClusterGroup();


        

            let img
            @foreach ($postsFromUsers as $key => $post)
                @if ($post['published'] == 1 )

                    @if ($post['file'] != 'null'){
                            img = `<img src="storage/{!!$post['file']!!}">`
                        } @else {
                            img = ''
                        }
                    @endif 
                    

                    dotSmall =   L.divIcon({html: `<div class='holder {{$post['category']}}' style='width: 25px; height: 25px; border-radius: 20px; background-color: {{$post['category']}}'></div>`});
                    marker = L.marker([{{ $post['lat'] }},{{ $post['lng'] }}], {radius: 8, icon: dotSmall}).bindPopup(`<a target="_blank" class="linkMaps" href='http://maps.google.com/maps?q=${"{{ $post['lat'] }},{{ $post['lng'] }}"}'>Clicca per aprire il navigatore!</a><br><br><i class="postName">Pubblicato da {!! $post["name"] !!}</i><br><br><div class="postContent">{!! $post["post"] !!}<br>${img}</div>`,popupOptions)
                    

                    if ("{{$post['category']}}" == 'rgb(236,108,0)') {
                        idee.addLayer(marker)
                    } else if ("{{$post['category']}}" == 'rgb(41,172,228)') {
                        memorie.addLayer(marker)
                    } else if ("{{$post['category']}}" == 'rgb(36,192,68)') {
                        ristoro.addLayer(marker)
                    } else if ("{{$post['category']}}" == '#c051c7') {
                        posti.addLayer(marker)
                    } else if ("{{$post['category']}}" == '#c75151') {
                        eventi.addLayer(marker)
                    }

                @endif  
            @endforeach

            map.addLayer(idee);
            map.addLayer(memorie);
            map.addLayer(ristoro);
            map.addLayer(posti);
            map.addLayer(eventi);


            // Filtra categorie

            function toggleCluster(cluster){

            if (map.hasLayer(cluster)){
                map.removeLayer(cluster)
            } else {
            map.addLayer(cluster)
            }}

            // var cluster = L.markerClusterGroup({zoomToBoundsOnClick: false})
    




            // posta nuovi contenuti


            var lat, lng, name, post;

            let localPostPopup = `<div id="localPostDiv">
                                <div id="localPostData" style="display: flex; align-items: center; gap: 10px;">
                                
                           
                        
                                
                                <div style="display: flex; flex-direction:column; gap: 10px;">

                                    <textarea rows="4" cols="20" wrap="hard" name="post" placeholder="E qui lascia un pensiero!" id="postContent"  type="text"></textarea>                         

                                    <div>

                                        <button style="background: orange; border-radius: 5px; color: black;" >
                                            <span onclick="submitLocal(lat,lng)" style="width: 0;">Postalo solo per te!</span>
                                        </button>
                        
                                    </div>
                                </div>
                                
                            </div>
                            </div>`

            let postPopup = `<div id="postDiv">
                                <form enctype="multipart/form-data" action="/piadina" method="POST" id="postData" style="display: flex; align-items: center; gap: 10px;">
                                @csrf

                                <input hidden  required value="" name="lat" id="lat">
                                <input hidden  required value="" name="lng" id="lng">
                        
                                
                                <div style="display: flex; flex-direction:column; gap: 10px;">

                                    <input required placeholder="Metti il tuo nome qui" id="postAuthor" name="name" type="text">
                                    <textarea required rows="4" cols="20" wrap="hard" name="post" placeholder="E qui lascia un pensiero!" id="postContent"  type="text"></textarea>                         

                                    <fieldset>
                                        <legend>Seleziona una categoria adatta:</legend>

                                        <div>
                                        <div>
                                            <input type="radio" name="category" value="rgb(236,108,0)" checked>
                                            <label for="Racconto">Idee</label>
                                        </div>

                                        <div>
                                        <div>
                                            <input type="radio" name="category" value="rgb(41,172,228)">
                                            <label for="Memorie">Memorie</label>
                                        </div>

                                        <div>
                                        <div>
                                            <input type="radio"  name="category" value="rgb(36,192,68)">
                                            <label for="Ristoro-Convivio">Ristoro - Convivio</label>
                                        </div>

                                        <div>
                                        <div>
                                            <input type="radio" name="category" value="#c051c7">
                                            <label for="Posti_bellissimi">Posti bellissimi</label>
                                        </div>

                                        <div>
                                        <div>
                                            <input type="radio"  name="category" value="#c75151">
                                            <label for="Eventi">Eventi</label>
                                        </div>

                                    </fieldset>

                                    <input type="file" accept="image/*" capture="camera" name="file">
                                    <div>
                        
                                        <button style="background: orange; border-radius: 5px; color: black;" id="submit">
                                            <input style="opacity: 0; width: 0;" type="submit">Pubblica per tuttə!
                                        </button>
                        
                                    </div>
                                </div>
                                
                            </form>
                            </div>`
            
            let postMode = document.getElementById("postMode")
            let allowPost = false

            let newPost

            postMode.addEventListener("click", ()=>{
                togglePostingProcess()
             
            })

            function closeIstructionsMap(){
                document.getElementById('istruzionePost').style.display = 'none'
            }

            map.addEventListener('click', function(ev) {

                if (allowPost){

                    if (newPost){
                        newPost.removeFrom(map)
                    }

                    lat = ev.latlng.lat;
                    lng = ev.latlng.lng;
                    console.log(lat,lng)

                    document.getElementById("alert").style.display = 'flex'
                }

                
            })

            function togglePostingProcess(){
                if (allowPost == false){   
                    document.body.classList.add("filter");
                    postMode.innerHTML = "MODALITA' NAVIGAZIONE"
                    allowPost = !allowPost
                    document.getElementById('istruzionePost').style.display = 'flex'
                    document.querySelector('.filterCategory').style.display = 'none'
                   
                } else {
                 
                    document.querySelector('.filterCategory').style.display = 'block'
                    postMode.innerHTML = "MODALITA' POST"
                    document.getElementById("alert").style.display = 'none'
  
                    document.body.classList.remove("filter");
                    allowPost = !allowPost
                    if (newPost){
                        newPost.removeFrom(map)
                    }
                }            
            }

            // decide which kind of post you want to post
            function posting(whichPopup,lat,lng){

                document.getElementById("alert").style.display= 'none'
                newPost = L.circleMarker([lat,lng],{draggable:true,color: 'black',radius: 5}).addTo(map).bindPopup(whichPopup,popupOptions).openPopup();
                document.getElementById('lat').value = lat
                document.getElementById('lng').value = lng
            }

            var storageIDs = []

            function storageIDCheck() {
                if(localStorage){
                    for (var key in localStorage){
                        if(key.startsWith('post')){
                            storageIDs.push(key)
                        } 
                    }
                } 
               
            }
        
            storageIDCheck()
           
     
            function submitLocal(lat,lng){
               
                let postToStore = document.getElementById("postContent").value

                if(postToStore != ''){

                    let postData = {
                        'lat': lat,
                        'lng': lng,
                        'post':  postToStore
                    }
                    
                    localStorage.setItem(`post-${storageIDs.length+1}`, JSON.stringify(postData));
                    markerStoraged()
                    togglePostingProcess()

                } else {

                    alert('Non puoi pubblicare un post vuoto!')

                }

            }

        // popola con i marker dal localstorage

        var personali = L.markerClusterGroup();
    

        function markerStoraged(){
            for (var key in localStorage){
                if(key.startsWith('post')){
                    localStorage.getItem(key)
                    let decoded = JSON.parse(localStorage.getItem(key));
                    
                    dotStorage =   L.divIcon({html: `<div class='holder personali' style='width: 20px; height: 20px; border-radius: 20px; background-color: grey'></div>`});
                    marker = L.marker([decoded.lat, decoded.lng], {radius: 8, icon: dotStorage}).bindPopup(`<a target="_blank" class="linkMaps" href='http://maps.google.com/maps?q=${decoded.lat, decoded.lng}'>Clicca per aprire il navigatore!</a><br><br><div class="postContent">${decoded.post}</div>`,popupOptions)

                    personali.addLayer(marker)
                } 
            }
        }
        markerStoraged()

        // add layer personali to map
        map.addLayer(personali)

        // seleziona tutte le categorie

        function selects(){  
            map.addLayer(idee)
            map.addLayer(memorie)
            map.addLayer(ristoro)
            map.addLayer(posti)
            map.addLayer(eventi)
            map.addLayer(personali)
        }  


        //select one

        function pick(selected){  
            map.removeLayer(idee)
            map.removeLayer(memorie)
            map.removeLayer(ristoro)
            map.removeLayer(posti)
            map.removeLayer(eventi)
            map.removeLayer(personali)


            map.addLayer(selected)
        }     

       
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