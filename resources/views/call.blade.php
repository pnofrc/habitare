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

        <style>
            body,html{
                width: 100%;
                height: 100%;
                font-size: 1.2rem
            }

            .container, #title, .menu{
                margin: 2rem;
                width: 50%;
                z-index: 1;
                position: relative;
            }
            #title{
                font-size: 2rem;
                margin-top: 5rem;
            }

            h2{
                margin-left: 2rem;
                position: relative;
                z-index: 4;
                display: inline;
            }

            hr{
                margin: 1rem 0 3rem 0
            }

            a{
                word-break: break-all;
                white-space: normal;
                color: green !important;
            }

            #up{
                position: fixed;
                bottom: 1rem;
                right: 30%;
                font-size: 2rem;
                text-decoration: none;
                z-index: 10;
            }

            #back{
                display: flex;
                z-index: 10;
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

            #mercato{
                transform: rotate(6deg);
                font-size: 8rem;
                margin: 0rem;
                margin-left: 35%;
                z-index: 5;
                position: relative;
            }

            #mercatoPic {
                position: fixed;
                top: .1rem;
                right: -5rem;
                z-index: 0;
                height: inherit;
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
                    margin: 2rem
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

            #mercato{
                transform: rotate(5deg);
                font-size: 4rem;
                margin: 0.1rem;
                margin-left: 10%;
            }

            #mercatoPic{
                position: fixed;
    bottom: 0.8rem;
    height: unset;
    top: unset;
    z-index: 0;
    right: -10rem;
            }
                }
            
        </style>

       
    </head>
    <body>

    {{-- <a href="#" id="up">↑</a> --}}
    <a href="/" id="back"><p>←</p><span> alla piattaforma!</span></a>
  
    <h1 id="title">OPEN CALL</h1>

    <h1 id="mercato">MERCATO</h1>

    <img id="mercatoPic" src="/assets/mercato.png">

    <h2>29 e 30 luglio a Portico di Romagna (FC)</h2>
       

    <div class="container">
    <p>Per due giorni, oltre alle iniziative del Festival Habitare, le vie dello splendido borgo si popoleranno dei banchetti di editorə indipendenti, artistə, artigianə produttorə di valore. Vogliamo amplificare il senso che si prova camminando per i paesi nel giorno del mercato rionale, con un'aggiunta di supporti creativi curiosi e frizzanti che sappiano relazionarsi al territorio. Immaginiamo una selezione di realtà editoriali, materie stampate, autoproduzioni musicali, enogastronomia locale e critica e artigianato artistico o tecnico.  <br>
    Il Mercato si svolgerà nel centro storico di Portico, dalla tarda mattinata alla sera di sabato 29 e domenica 30 luglio, in concomitanza con la programmazione del Festival. <br>
    L'Open Call è aperta a tutte le realtà che vorranno essere parte di una gran mescolanza di voci, immagini, fogli, sapori, suoni e profumi. <br><br>
    
    Qualche indicazione:

    <ul>
        <li>La partecipazione al Mercato è gratuita. Ci piacerebbe, tuttavia, chiedere ad ongunə dei e delle espositorə di donare una o più copie/esemplari delle proprie produzioni, nell'ottica di ampliare e rendere fruibile al pubblico una piccola biblioteca ed archivio negli spazi di Habitat;</li>
        <li>La deadline per applicare al Mercato è fissata al 14 luglio 2023;</li>
        <li>Gli e le espositorə dovranno provvedere in modo autonomo alla propria sistemazione per la notte. Consultare a tal proposito la sezione relativa all'Accoglienza, nelle Informazioni del Festival;</li>
        <li>Le modalità di vendita e pagamento saranno gestite completamente e liberamente dagli espositori;</li>
        <li>È consigliato essere automuniti, le strutture ricettive potrebbero essere dislocate rispetto alle locations;</li>
        <li>Il Mercato si svolgerà all'aperto. Saranno disponibili tavoli e sedie per i banchetti, in caso abbiate necessità più specifiche potete comunicarcele direttamente via email</li>
    </ul>
    <p>Per candidature e informazioni scrivete a <b>info@habitattt.it</b> con oggetto "Mercato"</p>
    </div>


    </div>
   </div>

    </body>
</html>