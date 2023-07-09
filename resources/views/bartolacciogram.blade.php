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
                font-size: 3em
            }

            #title{width: 65%}

            a{color: black}

            .postContent,.postName{
                font-size: 1rem
            }

            button{
                z-index: 9;
                 position: relative;
                 
            }

            .buttons{
                display: flex;
                margin-bottom: 11px;
                flex-direction: column;
                margin-left: 11px;
                width: fit-content;
                bottom: 0;
                position: absolute;
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
                z-index: 100;
                position: relative;
                width: 50%;
            }

            li{
               line-height: 1.4rem
            }

            
        </style>
    </head>
    <body>

    <div class="buttons">
        <button id="backTo"><a href="/">HABITARE</a></button>
        <button id="toggleInstructions">ISTRUZIONI</button>
        <button id="postMode">MODALITA' POST</button>
        {{-- <button class="showSidebar">info</button> --}}
    </div>


    <div class="flex sidebar">

        <div style="margin-top: 2rem; display: flex; flex-direction: column; align-items: center">
            <b class="bartolaccio">BartolaccioGram</b>
            <b>Creato da</b>
            <img id="title" src="/assets/title.png">
        </div>

        <div class="text">
          <h2>La bacheca pubblica della Romagna Toscana</h2>

          <p>
            <b>BartolaccioGram</b> è parte della piattaforma web <a href="../">Habitare</a> creata nel contesto del festival omonimo.<br><br>
            Chiunque può pubblicare su questa pagina racconti, poesie, fotografie, disegni, consigli su dove mangiare, ricordi passati o speranze future.<br><br>
            Data la natura geografica di questa pagina, l'idea è di associare il post da voi creato ad un posto della zona della Romagna Toscana, per permettere a tutte le persone di visitare i posti da voi segnalati.<br><br>

            <br>

            Habitare è un Festival nomade che si svolgerà a Luglio 2023 tra Rocca S. Casciano, Tredozio, Portico e S. Benedetto (FC).<br><br>
            Ogni sabato e domenica, dalle 10 alle 00, il Festival popolerà un differente borgo, delineando un percorso collettivo fatto di laboratori, presentazioni, tavole rotonde, musica, mostre, installazioni ed escursioni.<br><br>
            Il filo conduttore é la rilettura critica ed immaginativa della vita nelle aree interne d'Italia, attraverso pratiche cult(r)urali che possano definire il rapporto tra l'immaginabile, il possibile e l'esistente.
<br>
            Nello sviluppo condiviso di tale dimensione, comunità e territori possono diventare vettori di sostenibilità sociale e di attivazione partecipata di nuove dinamiche dell'abitare, espresse e vissute tramite linguaggi creativi contemporanei.
            <br><br>
            Zaini in spalla!
        </p>
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
        </div>

    </div>  

      
      
       

        <div class="closeSidebar">
          <button>VAI SULLA BACHECA</button>
        </div>
    </div>
   </div>



   <div id="istruzioni">
        <ul>
            <li>Questa pagina è per mappare il territorio della Romagna Toscana in modo multiforme, da racconti personali a leggende di paese, da ricette tradizionali a immaginazione di futuri possibili franati.</li>
            <li>Prima di tutto, bisogna decidere dove pubblicare il post. Si può navigare come una mappa qualsiasi; Più zoomerai più il risultato sarà preciso.</li>
            <li>Per pubblicare bisogna entrare in modalità "Post" con l'apposito bottone.</li>
            <li>Una volta cliccato, la mappa sarà in bianco/nero. Ora è possibile ottenere la finestra per immettere i contenuti: clicca sul luogo per il post da te scelto </li>
            <li>Nella finestra dovrai mettere il tuo nome e potrai continuare immettendo testi, e/o una immagine.</li>
            <li>E' necessaria la scelta della categoria! Se hai desiderio di avere una particolare categoria che non vedi, sentiti liber* di scriverci via email.</li>
            <li>Una volta riempiti i campi, basta solo cliccare il pulsante "Posta!"</li>
            <li>Attenzione: i post vengono controllati prima di essere pubblicati globalmnte. Tuttavia, ogni post creato da te verrà salvato sul tuo browser.</li>
            <li>Se vuoi che un post pubblicatio venga eliminato, sentiti libere di scriverci per richiedere la rimozione.</li>
        </ul>
   </div>


    <div id="map"></div>
    {{-- <script src="/app.js" async defer></script> --}}

    <script async defer type="text/javascript">

        let t = true
    document.querySelector("#toggleInstructions").addEventListener("click", ()=>{
        if (t){document.querySelector("#istruzioni").style.display = 'block'; t=!t}else{ document.querySelector("#istruzioni").style.display = 'none';t=!t}
  
    })

    // Toggle sidebar su mobile

    document.querySelector('.closeSidebar').addEventListener('click', () =>{
        console.log(document.querySelector('.sidebar').style.display)

        if (document.querySelector('.sidebar').style.display = 'flex'){
            document.querySelector('.sidebar').style.display = 'none'
        }
        else if( document.querySelector('.sidebar').style.display = 'none'){
            document.querySelector('.sidebar').style.display = 'flex'
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


        let img
        @foreach ($postsFromUsers as $key => $post)
            @if ($post['published'] == 1 )

                @if ($post['file'] != 'null'){
                    img = `<img src="{!!$post['file']!!}">`
                } @else {
                    img = ''
                }
                @endif 

                dotSmall =   L.divIcon({html: `<div class='holder' style='width: 25px; height: 25px; border-radius: 20px; background-color: {{$post['category']}}'></div>`});
                marker = L.marker([{{ $post['lat'] }},{{ $post['lng'] }}], {radius: 8, icon: dotSmall}).bindPopup(`<a target="_blank" class="linkMaps" href='http://maps.google.com/maps?q=${"{{ $post['lat'] }},{{ $post['lng'] }}"}'>Clicca per aprire il navigatore!</a><br><br><i class="postName">Pubblicato da {!! $post["name"] !!}</i><br><br><div class="postContent">{!! $post["post"] !!}<br>${img}</div>`,popupOptions).addTo(map);
                
            @endif  
        @endforeach


        /*
        descrizione istruzione
        colophon tech?
        */
        


        // posta nuovi contenuti


        var lat, lng, name, post;

        let postPopup = `<div id="postDiv">
                        <form   enctype="multipart/form-data" action="/piadina" method="POST" id="postData" style="display: flex; align-items: center; gap: 10px;">
                            @csrf

                            <input hidden  required value="" name="lat" id="lat">
                            <input hidden  required value="" name="lng" id="lng">

                            <div style="display: flex; flex-direction:column">
                                <input placeholder="Metti il tuo nome qui" id="postAuthor" name="name" type="text">
                                <textarea rows="4" cols="20" wrap="hard" name="post" placeholder="E qui lascia un pensiero!" id="postContent"  type="text"></textarea>                         

                                <fieldset>
                                    <legend>Seleziona una categoria adatta:</legend>

                                    <div>
                                        <input type="radio" name="category" value="red" checked>
                                        <label for="Racconto">Racconto</label>
                                    </div>

                                    <div>
                                        <input type="radio" name="category" value="blue">
                                        <label for="Memorie">Memorie</label>
                                    </div>

                                    <div>
                                        <input type="radio"  name="category" value="yellow">
                                        <label for="Ristoro">Ristoro</label>
                                    </div>
                                </fieldset>
                                <input type="file" accept="image/*" capture="camera" name="file">

                            </div>
                            <button style="background: orange; border-radius: 5px; color: black;" id="submit"><input style="opacity: 0" type="submit">Pubblica!</button>
                        </form>
                        </div>`
            
            let postMode = document.getElementById("postMode")
            let allowPost = false
            let newPost
            postMode.addEventListener("click", ()=>{
                if (allowPost == false){   
                    document.body.classList.add("filter");
                    postMode.innerHTML = "MODALITA' NAVIGAZIONE"
                    allowPost = !allowPost
                   
                } else {
                    postMode.innerHTML = "MODALITA' POST"
                    document.body.classList.remove("filter");
                    allowPost = !allowPost
                    // if(newPost){
                    //     newPost.removeFrom(map)
                    // }
                }
             
            })

           
            map.addEventListener('click', function(ev) {
                if (allowPost && !newPost){
                    lat = ev.latlng.lat;
                    lng = ev.latlng.lng;

                    newPost = L.circleMarker([lat,lng],{draggable:true,color: 'black',radius: 5}).addTo(map).bindPopup(postPopup,popupOptions).openPopup();

                    document.getElementById("lat").value = ev.latlng.lat
                    document.getElementById("lng").value = ev.latlng.lng

                   
                }

                
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