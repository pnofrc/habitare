<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="theme-color" content="green"/>
        <link rel="apple-touch-icon" href="{{ asset('/assets/habitare/H.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">

        <link rel="stylesheet" href="/app.css">

        <style>
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
                font-size: 2rem;
                margin-top: 5rem;
            }

            hr{
                margin: 1rem 0 3rem 0
            }

            a{
                word-break: break-all;
                white-space: normal;
                color: green !important;
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
                top: 0;
                left: 2rem;
                font-size: 2rem;
                text-decoration: none;
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


            @media only screen and (max-width: 900px) {

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
                    margin-top: 4rem;
                }

                ul{
                    width: 90%;
                    margin-left: 1rem;
                    margin: 1px 0 1rem 0 !important;
                }
                
                .menu{
                    margin: 2rem;
                    width: 80%;
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




            
        </style>

       
    </head>
    <body>

    <a href="#" id="up">↑</a>
    <a href="/" id="back"><p>←</p><span> alla piattaforma!</span></a>
  
    <h1 id="title">PROGRAMMA</h1>

   

    <div class="menu">
        <a href="#zero">14 Luglio   -    Tredozio (Welcoming)</a><br>
        <a href="#uno">15 Luglio   -    Rocca S. Casciano</a><br>
        <a href="#due">16 Luglio   -    Rocca S. Casciano</a><br>
        <a href="#tre">22 Luglio   -    Tredozio</a><br>
        <a href="#quattro">23 Luglio   -    Tredozio</a><br>
        <a href="#cinque">29 Luglio   -    Portico e San Benedetto</a><br>
        <a href="#sei">30 Luglio   -    Portico e San Benedetto</a><br>
    </div>




    <div class="container">
        <hr>
<h1 id="zero">14 Luglio   -    Tredozio  (Welcoming)</h1>

        @foreach ($posts as $key => $post)
            @if ($key == 'zero')
                @foreach ($post as $k => $p)
                    <br><u class="quando">{{$k}}:</u><br>
                    @foreach ($p as $singlePost)
                   <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                      <ul>
                      @foreach ($singlePost['categories'] as $categoria)
                          <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                      @endforeach
                  
                                        
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

              
                  @endforeach
                @endforeach
            @endif
        @endforeach
           
        <hr>
<h1 id="uno">15 Luglio   -    Rocca S. Casciano</h1>
        {{-- <u class="quando">Tutto il giorno:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Tutto')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach --}}
        <br><u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <br><u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'uno')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <hr>
<h1 id="due">16 Luglio   -    Rocca S. Casciano</h1>
        {{-- <u class="quando">Tutto il giorno:</u><br>
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
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach --}}
        <br><u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <br><u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'due')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <hr>
<h1 id="tre">22 Luglio   -    Tredozio</h1>
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
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <br><u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'tre')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <hr>
<h1 id="quattro">23 Luglio   -    Tredozio</h1>
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
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
                <br><u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <br><u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'quattro')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <hr>
<h1 id="cinque">29 Luglio   -    Portico e San Benedetto</h1>
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
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <br><u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'cinque')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <hr>
<h1 id="sei">30 Luglio   -    Portico e San Benedetto</h1>
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
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Mattino:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Mattino')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach
        <br><u class="quando">Pomeriggio</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Pomeriggio')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach

        <br><u class="quando">Sera:</u><br>
        @foreach ($posts as $key => $post)
            @if ($key == 'sei')
                @foreach ($post as $k => $p)
                    @if ($k == 'Sera')
                        @foreach ($p as $singlePost)
                       <h2>{!!$singlePost['titolo'] !!}   •    <u>{!!$singlePost['orario'] !!} - {!!$singlePost['Orario_fine'] !!}</u></h2>
                            <ul>
                            @foreach ($singlePost['categories'] as $categoria)
                                <li style="color: {!! $categoria['color'] !!}"><i style="color: {!! $categoria['color'] !!}">{!! $categoria['title'] !!}</i></li>
                            @endforeach
                                              
                      </ul>
              <div class="testo">{!! $singlePost['testo']!!}</div>

                        @endforeach
                    @endif
                @endforeach
            @endif
        @endforeach


    </div>


    </div>
   </div>

    </body>
</html>