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
    <div class="relative sfondoCarta grid justify-items-center  " id="sfondoCarta">
        <div class="container mt-12">
            <!-- Corpo Della Dashboard -->
            <div class="bg-white  border-b shadow-md rounded-3xl p-4">

                <!-- Header -->
                <div class="grid justify-items-stretch grid-cols-2">
                    <!-- Avatar  -->
                    <div class="flex items-center space-x-4 ml-2 relative justify-self-start">
                        <img class="w-10 h-10 rounded-full" src="/assets/img/prenotazione/admin.png" alt="Avatar Guida1 ">
                        <div class="font-medium ">
                            <div>Mario Rossi</div>
                            <div class="text-sm text-gray-500 ">Admin</div>
                        </div>
                    </div>
                    <!-- Esci Button -->
                    <button type="button" id="esci" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-self-end">Esci</button>
                </div>



                <!-- Presentazione Guide -->
                <div class="w-full relative grid grid-cols-1 md:grid-cols-3 gap-6  justify-items-center px-6 mt-28">

                    <div class="w-full max-w-sm bg-purple-100 border border-gray-200 rounded-lg shadow-md ">
                        <div class="flex flex-col items-center pb-10 ">
                            <img class="mt-6 w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/img/prenotazione/guida1.png" alt="Guida 1" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 ">Sara Rossi</h5>
                            <span class="text-sm text-gray-500 ">Guida Esperta</span>
                        </div>
                        <div class="w-full flex justify-center mt-4">
                            <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                        </div>
                    </div>
                    <div class="w-full max-w-sm bg-red-100 border border-gray-200 rounded-lg shadow-md ">
                        <div class="flex flex-col items-center pb-10 ">
                            <img class="mt-6 w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/img/prenotazione/guida2.png" alt="Guida 2" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 ">Francesca Bianchi</h5>
                            <span class="text-sm text-gray-500 ">Guida Esperta</span>
                        </div>
                        <div class="w-full flex justify-center mt-4">
                            <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                        </div>
                    </div>
                    <div class="w-full max-w-sm bg-yellow-100 border border-gray-200 rounded-lg shadow-md ">
                        <div class="flex flex-col items-center pb-10 ">
                            <img class="mt-6 w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/img/prenotazione/guida3.png" alt="Guida 3" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 ">Roberta Di Paolo</h5>
                            <span class="text-sm text-gray-500 ">Guida Esperta</span>
                        </div>
                        <div class="w-full flex justify-center mt-4">
                            <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                        </div>
                    </div>

                </div>


                <div class="relative mt-16 grid  justify-items-center grid-cols-1 md:grid-cols-3 gap-6 px-4">
                    <!-- Primo Percorso -->
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md ">
                        <a href="#">
                            <img class="rounded-t-lg" src="/assets/img/prenotazione/percorso1.png" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Percorso Uno</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolore repellat omnis eveniet nihil unde! Blanditiis, eveniet necessitatibus quod vitae
                                molestiae ad et accusantium! Tempora nemo voluptate vitae non rem tenetur?</p>



                            <div class="flex items-center mb-5">
                                <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded ">
                                    8.7</p>
                                <p class="pl-3 text-sm font-medium text-gray-500 ">Punteggio</p>

                            </div>
                            <div class="gap-8 sm:grid ">
                                <div>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Difficolta</dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5  mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style="width: 89%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">8.9</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Esplorazione</dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5 mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style="width: 70%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">7.0</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Cultura</dt>
                                        <dd class="flex items-center">
                                            <div class="w-full bg-gray-200 rounded h-2.5  mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded" style=" width: 50%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">5.0</span>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="w-full flex justify-center mt-4">
                                <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                            </div>
                        </div>
                        <!-- Fine 1 Box -->
                    </div>

                    <!-- Secondo Percorso -->
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md ">
                        <a href="#">
                            <img class="rounded-t-lg" src="/assets/img/prenotazione/percorso2.png" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Percorso Due</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolore repellat omnis eveniet nihil unde! Blanditiis, eveniet necessitatibus quod vitae
                                molestiae ad et accusantium! Tempora nemo voluptate vitae non rem tenetur?</p>

                            <div class="flex items-center mb-5">
                                <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded ">
                                    5.7</p>
                                <p class="pl-3 text-sm font-medium text-gray-500 ">Punteggio</p>

                            </div>
                            <div class="gap-8 sm:grid ">

                                <div>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Difficolta</dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5  mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style="width: 50%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">5.0</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Esplorazione</dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5 mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style="width: 60%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">6.0</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Cultura</dt>
                                        <dd class="flex items-center">
                                            <div class="w-full bg-gray-200 rounded h-2.5  mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style=" width: 75%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">7.5</span>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="w-full flex justify-center mt-4">
                                <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                            </div>
                        </div>
                    </div>
                    <!-- Terzo Percorso -->
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md ">
                        <a href="#">
                            <img class="rounded-t-lg" src="/assets/img/prenotazione/percorso3.png" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Percorso Terzo</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Dolore repellat omnis eveniet nihil unde! Blanditiis, eveniet necessitatibus quod vitae
                                molestiae ad et accusantium! Tempora nemo voluptate vitae non rem tenetur?</p>



                            <div class="flex items-center mb-5">
                                <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded ">
                                    4.0</p>
                                <p class="pl-3 text-sm font-medium text-gray-500 ">Punteggio</p>

                            </div>
                            <div class="gap-8 sm:grid ">
                                <div>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Difficolta</dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5  mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style="width: 10%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">1.0</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Esplorazione</dt>
                                        <dd class="flex items-center mb-3">
                                            <div class="w-full bg-gray-200 rounded h-2.5 mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded " style="width: 30%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">3.0</span>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 ">Cultura</dt>
                                        <dd class="flex items-center">
                                            <div class="w-full bg-gray-200 rounded h-2.5  mr-2">
                                                <div class="bg-blue-600 h-2.5 rounded" style=" width: 70%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-500 ">7.0</span>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="w-full flex justify-center mt-4">
                                <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                            </div>

                        </div>
                    </div>



                </div>

                <div class="grid justify-items-center">

                    <!-- Lista dei Luoghi -->
                    <div class="w-4/5 md:w-2/4  mt-24">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
                            Luoghi <span class="text-violet-600 ">Unici</span> ti aspettano</h1>

                        <!-- Primo Luogo -->
                        <div class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/assets/img/calascioAntica/box1.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Luogo Uno</h5>
                                <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quos est voluptas adipisci nisi voluptates aliquid consequatur earum quae, nam fuga iste
                                    corrupti, magnam ratione asperiores reiciendis, deleniti tempore similique pariatur?</p>
                            </div>
                            <div class="w-full flex justify-center mt-4">
                                <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                            </div>
                        </div>
                        <!-- Secondo Luogo -->
                        <div class=" mt-8 flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/assets/img/calascioAntica/box2.webp" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Luogo Due</h5>
                                <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quos est voluptas adipisci nisi voluptates aliquid consequatur earum quae, nam fuga iste
                                    corrupti, magnam ratione asperiores reiciendis, deleniti tempore similique pariatur?</p>
                            </div>
                            <div class="w-full flex justify-center mt-4">
                                <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                            </div>
                        </div>
                        <!-- Terzo Luogo -->
                        <div class=" mt-8 flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/assets/img/calascioAntica/box3.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Luogo Tre</h5>
                                <p class="mb-3 font-normal text-gray-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quos est voluptas adipisci nisi voluptates aliquid consequatur earum quae, nam fuga iste
                                    corrupti, magnam ratione asperiores reiciendis, deleniti tempore similique pariatur?</p>
                            </div>
                            <div class="w-full flex justify-center mt-4">
                                <button type="button" id="modifiche" class="text-white bg-red-500 border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-red-200 hover:text-black font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2  justify-center">Modifica</button>
                            </div>
                        </div>


                        <!-- Spazio Bianco -->
                        <div class="pt-48"></div>


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
                    success: function(data) {
                        console.log(data);
                        window.location.replace('/');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            })
        });
    </script>
</body>

</html>