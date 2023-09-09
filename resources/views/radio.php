<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Habitare Radio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Habitare Programma" />
        <meta property="og:url" content="https://habitare.habitattt.it/programma/" />
        <meta property="og:image" content="https://habitare.habitattt.it/assets/habitare/H.png" />


        <meta name="theme-color" content="rgb(36,192,68);"/>
        <link rel="apple-touch-icon" href="{{ asset('/assets/habitare/H.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        <link rel="stylesheet" href="/app.css">

        <style>
            .top{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: row;

                }
                .bottom{
                    font-size: 1.5rem;
    width: 60%;
    line-height: 1.8rem;
    text-align: center;
                }

                .top p{
                    font-size: 3rem;
                    text-align: center;
                    line-height: 3.5rem;
                    margin: 1rem 0;
                }

                .top i{
                    font-size: 1.5rem;
                }

                img{
                    width: 30%;
                }

                .flex{
                    display: flex;
                    gap: 30px;
                flex-direction: column;
            align-items: center;
        justify-content: center;
    height: 100%;}

    .random{
        position: absolute;
    }

            @media print{
                body{
                    size: A6 landscape;
                    }
            
            }
        </style>

       
    </head>
    <body>

    <img class="random" style="top: 5% ; left:7%" src="assets/disegnini/7.png" alt="">
    <img class="random" style="top: 7% ; right:4%" src="assets/disegnini/9.png" alt="">
    <img class="random" style="bottom: 7% ; left:4%" src="assets/disegnini/11.png" alt="">
    <img class="random" style="bottom: 7% ; right:4%" src="assets/disegnini/2.png" alt="">

    <div class="flex">
        <h1>Habitare <b>Radio</b></h1>
        <audio controls src="http://echo.lurk.org:999/habitare.ogg">
    </div>


    </body>
</html>