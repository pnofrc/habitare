<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="theme-color" content="rgb(36,192,68);"/>
        <link rel="apple-touch-icon" href="{{ asset('/assets/habitare/H.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">

        <link rel="stylesheet" href="/app.css">

        <style>

            :root{
                --blue: rgb(41,172,228);
                --green:rgb(36,192,68);
                --orange: rgb(236,108,0);
            }


            a{
                color: var(--blue) !important;
            }

            .active{
                    background: var(--blue);
                    color: white !important;
                }

            body,html{
                width: 100%;
                height: 100%;
                font-size: 1.2rem
            }

            .container, #title, .menu{
                margin: 2rem;
                width: 50%
            }
            #title{
                font-size: 2.5rem;
                margin-top: 5rem;
               height: 90px !important;
            }

            hr{
                margin: 1rem 0 3rem 0;
                width: 62vw;
            }

            a{
                word-break: break-all;
                white-space: normal;
                color: rgb(36,192,68); !important;
            }

            hr{
                margin: 4rem 0;
                border-top: 2px black solid
            }
            #up{
                position: fixed;
                bottom: 1rem;
                right: 30%;
                font-size: 2rem;
                text-decoration: none
            }

            #back{
                display: flex;
                align-items: center;
                gap: 20px;
                position: fixed;
                top: 15px;
                left: 2rem;

                text-decoration: none;
            }

            #back p{
                margin: 0
            }

            #back span{
                font-size: .8rem;
            }

            .testo{
                margin-left: 1rem;
    margin-bottom: 2rem;
            }

            ul{
                margin: .5rem 0
            }

            img{
                display: block;
                width: 100%;
                height: auto;
            }

            figcaption{
                display: none;
            }

            h1{
                /* position: sticky; */
                
                background: white;
                width: 96vw;
                top: 0rem;
                height: 135px;
                padding-top: 3rem;
            }

    

            .over{
                position: relative;
                z-index: 9999;
            }

            .menu{
                    position: fixed;
                    top: 1rem;
                    z-index: 99;
                    right: 0;
                    width: max-content;
                }

            @media only screen and (max-width: 900px) {

                .menu{
                    background-color: rgba(255,255,255,0.5);
                    padding: 30px;
                    text-align: right;
                    margin-right: 0;
                }

                figure{
                    padding: 0;
                    margin: 0;
                }

                .testo{
                    margin-left: unset;
                }
                

                h1 {
                    height: 190px;
                 width: 95vw;
                }
                body{
                    font-size: 1rem
                }
                div{
                    width: 100%;
                }

                .container, #title{
                margin: 5%;
                width: 90%
                }

                #title{
                    margin-top: 16rem;
                }

                ul{
                    width: 90%;
                    margin-left: 1rem;
                    margin: 1px 0 1rem 0 !important;
                }
                

                hr{
                    margin: 1rem 0 3rem 0
                }

                #up{
                position: fixed;
                bottom: 1rem;
                right: 1rem;
                font-size: 2rem;
                text-decoration: none
            }


                }

.carrellata{
    position: absolute;
    /* margin-top: 50vh; */
    opacity: .2;
}

.carrellata img{
    margin-bottom: 300px
}

            
        </style>

       
    </head>
    <body>

        <div class="carrellata">

            <img src="/assets/disegnini/8.png" alt="">
            <img src="/assets/disegnini/3.png" alt="">
            <img src="/assets/disegnini/5.png" alt="">
            <img src="/assets/disegnini/10.png" alt="">
            <img src="/assets/disegnini/6.png" alt="">
            <img src="/assets/disegnini/1.png" alt="">
            <img src="/assets/disegnini/2.png" alt="">
            <img src="/assets/disegnini/11.png" alt="">
            <img src="/assets/disegnini/9.png" alt="">
            <img src="/assets/disegnini/7.png" alt="">
            <img src="/assets/disegnini/8.png" alt="">
            <img src="/assets/disegnini/3.png" alt="">
            <img src="/assets/disegnini/5.png" alt="">
            <img src="/assets/disegnini/10.png" alt="">
            <img src="/assets/disegnini/6.png" alt="">
            <img src="/assets/disegnini/1.png" alt="">
            <img src="/assets/disegnini/2.png" alt="">
            <img src="/assets/disegnini/11.png" alt="">
            <img src="/assets/disegnini/9.png" alt="">
            <img src="/assets/disegnini/7.png" alt="">

        </div>

    <a class="over" href="#" id="up">↑</a>
    <a class="over"  href="/" id="back"><p>←</p><span> alla piattaforma!</span></a>
  
    <h1 class="" id="title">PROGRAMMA</h1 class="">

   

    <div class="menu">
        <a onclick="makeActive(event)" href="#cash">Nota Bene!</a><br>
        <a onclick="makeActive(event)" href="#zero">14 Luglio   -    Tredozio</a><br>
        <a onclick="makeActive(event)" href="#uno">15 Luglio   -    Rocca S. Casciano</a><br>
        <a  onclick="makeActive(event)" href="#due">16 Luglio   -    Rocca S. Casciano</a><br>
        <a onclick="makeActive(event)" href="#tre">22 Luglio   -    Tredozio</a><br>
        <a onclick="makeActive(event)" href="#quattro">23 Luglio   -    Tredozio</a><br>
        <a  onclick="makeActive(event)"href="#cinque">29 Luglio   -    Portico di Romagna</a><br>
        <a onclick="makeActive(event)" href="#sei">30 Luglio   -    Portico di Romagna</a><br>
    </div>




    <div class="container">


        <h1 class="" id="cash">Nota bene!</h1 class="">
        
        L’accesso al <b>festival</b> è libero.  <br>
        Potrai tuttavia decidere di supportare Habitare e <a href="https://habitattt.it">Habitat</a> con l’acquisto del merchandising, iscrivendoti alla nostra associazione oppure con una semplice donazione durante il Festival.
        <br> <br>
        Alcuni laboratori sono a numero chiuso e per questo sarà <u>necessaria la prenotazione</u>. Troverai il link della prenotazione nel programma, associato a ciascuno di questi laboratori.
        <br> <br>
        Per qualsiasi informazioni sulle modalità di partecipazione e il programma:<br>
        info@habitattt.it
        
        



<h1 class="" id="zero">14 Luglio   -    Tredozio</h1 class="">

        @foreach ($posts as $key => $post)
            @if ($key == 'zero')
                @foreach ($post as $k => $p)
                    <u class="quando">{{$k}}:</u><br>
                    @foreach ($p as $singlePost)
                   <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                      <ul>
                      @foreach ($singlePost['categories'] as $categoria)
                          <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                      @endforeach
                  
                                        
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

              
                  @endforeach
                @endforeach
            @endif
        @endforeach
           
<h1 class="" id="uno">15 Luglio   -    Rocca S. Casciano</h1 class="">
        <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

<h1 class="" id="due">16 Luglio   -    Rocca S. Casciano</h1 class="">
        <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!} </h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

<h1 class="" id="tre">22 Luglio   -    Tredozio</h1 class="">
        <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

<h1 class="" id="quattro">23 Luglio   -    Tredozio</h1 class="">
        <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!} </h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
                <u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

<h1 class="" id="cinque">29 Luglio   -    Portico di Romagna</h1 class="">
        <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

<h1 class="" id="sei">30 Luglio   -    Portico di Romagna</h1 class="">
        <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   @if($singlePost['Orario_fine'])•    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u>@endif</h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div><hr>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach


    </div>


    </div>
   </div>


   <script>
let currentID

   function makeActive(event) {
    console.log(event)
      var previous = document.getElementsByClassName("active");
      if (previous.length > 0) {
         previous[0].className = previous[0].className.replace(" active", "");
      }
      event.target.className += " active";
   }

   window.addEventListener('scroll', function(e) {
    document.querySelectorAll('h1').forEach(element => {
        var position = element.getBoundingClientRect();

        if(position.top >= 0 && position.bottom <= window.innerHeight) {
            console.log('Element is fully visible in screen');
            currentID = element.id
            document.querySelectorAll(`.menu a`).forEach(element => {
            element.className = ''
        })
        
            if(document.querySelector(`a[href='#${currentID}']`)){
                document.querySelector(`a[href='#${currentID}']`).className += ' active'
            }
           
        } 
         

        e.preventDefault()
        });

	
});
   

   </script>
    </body>
</html>