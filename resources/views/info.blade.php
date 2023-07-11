<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare</title>
        <meta name="description" content="Habitare è un Festival nomade che si svolgerà a Luglio 2023 tra Rocca S. Casciano, Tredozio, Portico e S. Benedetto (FC).">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="https://habitare.habitattt.it/info">
        <meta property="og:title" content="Habitare Info" />
        <meta property="og:url" content="https://habitare.habitattt.it/info" />
        <meta property="og:image" content="https://habitare.habitattt.it/assets/habitare/H.png" />


       <!-- PWA  -->

        <meta name="theme-color" content="green"/>
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
                color: var(--green) !important
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
                font-size: 2rem;
                margin-top: 5rem;
            }

            hr{
                margin: 1rem 0 3rem 0
            }

            a{
                word-break: break-all;
                white-space: normal;
             
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
                    margin-left: 1rem
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
  
    <h1 id="title">INFO UTILI</h1>
        {{-- @if ($infos ?? '')
            {!! $infos[0] !!}
        @endif --}}
        @if ($infos ?? '')
            <ul class="menu">
                @foreach ($infos as $info)
                    <li><a href="#{{$info['id']}}">{{$info['titolo']}}</a></li>
                @endforeach
            </ul>
        @endif



    <div class="container">
        @if ($infos ?? '')
          
            @foreach ($infos as $info)
                <h1 id="{{$info['id']}}">{{$info['titolo']}}</h1>
                {!! $info['testo'] !!}
                <hr>
                {{-- <input checked type="checkbox" id="{{str_replace(' ', '_',$category)}}">{{$category}}<br> --}}
            @endforeach

        @endif
    </div>


    </div>
   </div>

    </body>
</html>