<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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


        <button id="changeMap">🌍</button>
    <button class="showSidebar">info</button>

    <div id="scaleKm">
      <div id="upper">
        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>
      </div>
      <div id="downer" >
        <div class="scale" id="km"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>        <div class="scale"></div>
      </div>
    </div>

    <div class="flex sidebar">
      <div class="top">
        <div class="flex"><span>20-23</span><span>Luglio</span><span>2023</span></div>

        <img id="title" src="/assets/title.png">

        <div class="text">
          <h2>Nuove Prospettive Cult(r)urali</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
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

    </body>
</html>