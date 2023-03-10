<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivi Calascio</title>

    <!-- Icona -->
    <link rel="icon" type="image/x-icon" href="/assets/icon/castello.ico">

    <!-- Fogli Css -->
    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/font/montserrat/Montserrat.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />

    <!-- Script JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <!-- Calendario -->
    <script src="/assets/js/vanilla-calendar.min.js"></script>
    <link rel="stylesheet" href="/assets/css/vanilla-calendar.min.css">
</head>

<body class="overflow-x-hidden">

    <!-- Imagine Carta Strappata -->
    <div class="relative sfondoCarta grid justify-items-center h-screen " id="sfondoCarta">

        <!-- Scegli Metodo di pagamento -->
        <div id="metodoPagamento">
            <div class="relative mt-28 text-center py-4">
                <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
                    Scegli un metodo di <span class="underline underline-offset-3 decoration-8 decoration-amber-800 ">Pagamento</span></h1>
            </div>
            <div class="w-4/5 mx-auto mt-20 grid grid-cols-1 md:grid-cols-2 place-content-center justify-items-center ">
                <div>
                    <button type="button" id="contanti" class="text-gray-900 bg-green-100 hover:bg-green-200 border border-green-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-lg px-7 py-4 text-center inline-flex items-center  ">
                        <img src="/assets/img/prenotazione/iconContannti.svg" class="h-4 mr-2 -ml-1 w-7" alt="">
                        Paga in Contanti
                    </button>
                </div>

                <div class="mt-8 md:mt-0">
                    <button type="button" id="carta" class="text-gray-900 bg-blue-100 hover:bg-blue-200 border border-blue-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-lg px-8 py-4 text-center inline-flex items-center   ">
                        <img src="/assets/img/prenotazione/iconCarta.svg" class="h-4 mr-2 -ml-1 w-7" alt="">
                        Paga con Carta
                    </button>
                </div>
            </div>
        </div>


        <!-- Riepilogo -->
        <div id="riepilogo" class="hidden">
            <div class="relative mt-28 text-center py-4">
                <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
                    <span class="underline underline-offset-3 decoration-8 decoration-amber-800 ">Riepilogo</span>
                </h1>
            </div>
            <div id="ripilogoDati" class="text-2xl">
                <!-- Dati in tabella -->
                <div class="grid grid-cols-2 w-full justify-items-left bg-white border-b shadow-md rounded-lg text-sm sm:text-sm md:text-xl p-5 gap-4" style="max-width: 650px;">
                    <div class="">Pagamento:</div>
                    <div id="pagamento"></div>
                    <div class="">Nome:</div>
                    <div id="nome"></div>
                    <div class="">Email:</div>
                    <div id="email"></div>
                    <div class=""> Numero Telefono:</div>
                    <div id="numTel"></div>
                    <div class=""> Numero Visitatori:</div>
                    <div id="numPersone"></div>
                    <div class=""> Percorso Scelto:</div>
                    <div id="percorso"></div>
                    <div class="">Data:</div>
                    <div id="data"></div>
                </div>
                <button onclick="location.href='/'" type="button" class="mt-10 left-1/2  relative -translate-x-1/2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Torna
                    alla Home</button>
            </div>
            <!-- Fine Riepilogo -->
        </div>


        <!-- Pagamento con carta di Terzi -->
        <div id="rindirizzamentoView" class="hidden">
            <div class="relative mt-28 text-center py-4">
                <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
                    Stai per essere <span class="underline underline-offset-3 decoration-8 decoration-amber-800 ">rindirizzato</span><br><br>
                    per
                    effettuare il pagamento
                    <span id="clock">...5</span>
                </h1>
            </div>
        </div>




        <!-- Spazio Bianco -->
        <div class="pt-48"></div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            var datiPagante;
            var lenghtPagante; //var per prendere sempre l ultimo elemento
            var metodoPagamento;
            //Click su i pulsanti contanti o carta
            $("#contanti").click(function() {
                metodoPagamento = "Contanti"
                salvaScelta()
                riepilogo()
            })
            $("#carta").click(function() {
                metodoPagamento = "Carta"
                salvaScelta()
                rindirizzamento()
            })

            //Salva il metodo di pagamento del file json
            function salvaScelta() {
                $.ajax({
                    type: "POST",
                    url: "salvaDatiPagamento.php",
                    data: {
                        metodoPagamento: metodoPagamento,
                    },
                    cache: false,
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            }

            /*Cambio Html per mostrare il Riepilogo*/
            function riepilogo() {
                $("#metodoPagamento").addClass("hidden");
                $("#rindirizzamentoView").addClass("hidden");
                $("#riepilogo").removeClass("hidden");
                $("#ripilogoDati #pagamento").html(metodoPagamento);
                $("#ripilogoDati #nome").html(datiPagante[lenghtPagante].nome);
                $("#ripilogoDati #email").html(datiPagante[lenghtPagante].email);
                $("#ripilogoDati #numTel").html(datiPagante[lenghtPagante].numTel);
                $("#ripilogoDati #numPersone").html(datiPagante[lenghtPagante].numPersone);
                $("#ripilogoDati #percorso").html(datiPagante[lenghtPagante].percorso);
                $("#ripilogoDati #data").html(datiPagante[lenghtPagante].data);
            }

            /*Cambio contesto per il rindirizzamento per pagamento con carta*/
            function rindirizzamento() {
                $("#metodoPagamento").addClass("hidden");
                $("#rindirizzamentoView").removeClass("hidden")
                //Timer
                setTimeout(function() {
                    $("#clock").html('...4');
                }, 1000);
                setTimeout(function() {
                    $("#clock").html('...3');
                }, 2000);
                setTimeout(function() {
                    $("#clock").html('...2');
                }, 3000);
                setTimeout(function() {
                    $("#clock").html('...1');
                }, 4000);
                setTimeout(function() {
                    riepilogo()
                }, 5000);
            }

            /*Recupero i dati dal file json*/
            $.getJSON("/assets/js/storeData.json?versione=<?php echo time(); ?>", function(data) {
                //rendo i dati globali
                datiPagante = data;
                //prendo la lunghezza del array
                lenghtPagante = (Object.keys(datiPagante).length) - 1;

            }).fail(function() {
                console.log("An error has occurred.");
            });
        });
    </script>
</body>

</html>