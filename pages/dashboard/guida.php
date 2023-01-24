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
    <!-- Calendario -->
    <script src="/assets/js/vanilla-calendar.min.js"></script>
    <link rel="stylesheet" href="/assets/css/vanilla-calendar.min.css">
</head>

<body class="overflow-x-hidden">

    <!-- Controllo se si è fatto l accesso -->

    <?php
    session_start();
    $accesso = $_SESSION['accesso'];
    if ($accesso == 0) {
        header('Location: /pages/dashboard/');
    }
    ?>

    <!-- Imagine Carta Strappata -->
    <div class="relative sfondoCarta grid justify-items-center h-screen  " id="sfondoCarta">
        <div class="container mt-12">
            <!-- Corpo Della Dashboard -->
            <div class="bg-white  border-b shadow-md rounded-3xl p-4">

                <!-- Header -->
                <div class="grid justify-items-stretch grid-cols-2">
                    <!-- Avatar  -->
                    <div class="flex items-center space-x-4 ml-2 relative justify-self-start">
                        <img class="w-10 h-10 rounded-full" src="/assets/img/prenotazione/guida1.png" alt="Avatar Guida1 ">
                        <div class="font-medium ">
                            <div>Sara Rossi</div>
                            <div class="text-sm text-gray-500 ">Specializzazata in Percorso 1</div>
                        </div>
                    </div>
                    <!-- Esci Button -->
                    <button type="button" id="esci" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-self-end">Esci</button>
                </div>


                <!-- Calendario con  Prenotazioni  -->
                <div class="mt-14 grid grid-cols-1 md:grid-cols-2 justify-items-stretch">
                    <div id="calendarGuida" class="justify-self-center  self-center mb-8" style="    max-height: 260px;"></div>

                    <div id="prenotazioniElenco">
                        <div class="text-center text-md font-bold mb-6 ">Prenotazioni</div>

                    </div>
                </div>
            </div>

        </div>
        <!-- Spazio Bianco -->
        <div class="pt-48"></div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            function renderCalendario() {
                const calendar = new VanillaCalendar('#calendarGuida', {
                    settings: {
                        lang: 'it',
                        visibility: {
                            weekend: false,
                        },
                        selection: {
                            day: false,
                        },
                        selected: {
                            dates: arrayDataPrenotazioni,
                        },
                    },
                });
                calendar.init();
            }


            var prenotazioniDaFile;
            /*Recupero i dati dal file json che contiene le password*/
            $.getJSON("/assets/js/storeData.json?versione=<?php echo time(); ?>", function(data) {
                //rendo i dati globali
                prenotazioniDaFile = data;
                renderPrenotazioni();
            }).fail(function() {
                console.log("An error has occurred.");
            });


            var arrayDataPrenotazioni = [];

            function renderPrenotazioni() {
                $.each(prenotazioniDaFile, function(i, l) {
                    //var per colorare la prenotazione per capire se e stata pagata o meno
                    var colorPagamento;
                    if (l.pagamento == 'Carta') colorPagamento = 'bg-green-100'
                    else colorPagamento = 'bg-red-100'

                    if (l.percorso == 1) {
                        $("#prenotazioniElenco").append(
                            '<div class="grid grid-cols-2 gap-2 content-center bg-gray-100 rounded-3xl shadow-md justify-items-center mt-6 p-3" style="max-height: 150px;">\
                            <div class="inline-flex"><img src="/assets/icon/iconUser.svg" class="pr-2">' + l.nome + '</div>\
                            <div class="inline-flex"><img src="/assets/icon/iconPhone.svg" class="pr-2">' + l.numTel + '</div>\
                            <div class="inline-flex"><img src="/assets/icon/iconCalendar.svg" class="pr-2">' + l.data + '</div>\
                            <div class="inline-flex"><img src="/assets/icon/iconGroup.svg" class="pr-2">' + l.numPersone + ' Persone</div>\
                            <div class="inline-flex col-span-2"><img src="/assets/icon/iconMail.svg" class="pr-2">' + l.email + '</div>\
                             <div class="inline-flex col-span-2 rounded-full pr-5 ' + colorPagamento + '"><img src="/assets/icon/iconEuro.svg" class="pr-2">' + l.pagamento + '</div>\
                             </div>'
                        );
                        arrayDataPrenotazioni.push(l.data)
                    }
                });
                renderCalendario()
            }




            $("#esci").click(function() {
                $.ajax({
                        type: "GET",
                        url: "logoutGuida.php",     
                        cache: false,
                        success: function (data) {
                            console.log(data);
                            window.location.replace('/');
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr);
                        }
                    });
            })
        });
    </script>
</body>

</html>