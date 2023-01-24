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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
        integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <!-- Calendario -->
    <script src="/assets/js/vanilla-calendar.min.js"></script>
    <link rel="stylesheet" href="/assets/css/vanilla-calendar.min.css">
</head>

<body class="overflow-x-hidden">
    <!-- Navbar -->
    <div class="h-20 top-0 fixed z-50 bg-opacity-10 bg-black flex items-center w-screen backdrop-blur-xl">
        <!--  Icon Castello -->
        <a href="/" class=" flex-none">
            <img src="/assets/icon/icon_castello.svg" alt="" width="40px" class="fill-black pl-2 pb-2">
        </a>

        <!-- Scritta Vivi Calascio -->
        <a href="/" class="flex-auto">
            <div class="text-xl lg:text-2xl text-white font-semibold pt-2 pl-2">Vivi Calascio</div>
        </a>
        <!-- hamburgher Menu -->
        <svg class="ham hamRotate ham8 flex-none right-0 scale-75" viewBox="0 0 100 100" width="80" id="hamMenu">
            <path class="line top"
                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
            <path class="line middle" d="m 30,50 h 40" />
            <path class="line bottom"
                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
        </svg>
    </div>


    <!-- Imagine Top Castello -->
    <div class="relative">
        <img src="/assets/img/calascioAntica/calascioAnticaSfondoTop.jpg" class="relative w-full"
            alt="Castello Calascio Antica">
        <div
            class="text-5xl md:text-6xl lg:text-8xl w-full font-extrabold  text-black text-center left-1/2 -translate-x-1/2 absolute z-10 -bottom-20 md:bottom-0">
            Le nostre <span class="text-red-800">Guide</span></div>
    </div>

    <!-- Imagine Carta Strappata -->
    <div class="relative sfondoCarta grid justify-items-center" id="sfondoCarta">




        <!-- Presentazione Guide -->
        <div class="w-full relative grid grid-cols-1 md:grid-cols-3 gap-6  justify-items-center px-6 mt-28">

            <div class="w-full max-w-sm bg-purple-100 border border-gray-200 rounded-lg shadow-md ">
                <div class="flex flex-col items-center pb-10 ">
                    <img class="mt-6 w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/img/prenotazione/guida1.png"
                        alt="Guida 1" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">Sara Rossi</h5>
                    <span class="text-sm text-gray-500 ">Guida Esperta</span>
                </div>
            </div>
            <div class="w-full max-w-sm bg-red-100 border border-gray-200 rounded-lg shadow-md ">
                <div class="flex flex-col items-center pb-10 ">
                    <img class="mt-6 w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/img/prenotazione/guida2.png"
                        alt="Guida 2" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">Francesca Bianchi</h5>
                    <span class="text-sm text-gray-500 ">Guida Esperta</span>
                </div>
            </div>
            <div class="w-full max-w-sm bg-yellow-100 border border-gray-200 rounded-lg shadow-md ">
                <div class="flex flex-col items-center pb-10 ">
                    <img class="mt-6 w-24 h-24 mb-3 rounded-full shadow-lg" src="/assets/img/prenotazione/guida3.png"
                        alt="Guida 3" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">Roberta Di Paolo</h5>
                    <span class="text-sm text-gray-500 ">Guida Esperta</span>
                </div>
            </div>

        </div>

        <!-- Scegli il tuo Percorso -->
        <div class="relative mt-28 text-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
                Scegli il tuo <span
                    class="underline underline-offset-3 decoration-8 decoration-amber-800 ">Percorso</span></h1>
        </div>





        <div class="relative w-screen mt-16 grid  justify-items-center grid-cols-1 md:grid-cols-3 gap-6 px-4">
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
                        <p
                            class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded ">
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
                    <div class="text-center mt-6 text-md">Disponibilità</div>
                    <div id="calendar" class=" mx-auto"></div>
                    <div class="inline-flex items-center">
                        <span class="flex w-3 h-3 bg-red-800 rounded-full mr-1 ml-11"></span> Guida non disponibile
                    </div>
                    <div></div>
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
                        <p
                            class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded ">
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
                    <div class="text-center mt-6 text-md">Disponibilità</div>
                    <div id="calendar2" class=" mx-auto"></div>
                    <div class="inline-flex items-center">
                        <span class="flex w-3 h-3 bg-red-800 rounded-full mr-1 ml-11"></span> Guida non disponibile
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
                        <p
                            class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded ">
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
                    <div class="text-center mt-6 text-md">Disponibilità</div>
                    <div id="calendar3" class=" mx-auto"></div>
                    <div class="inline-flex items-center">
                        <span class="flex w-3 h-3 bg-red-800 rounded-full mr-1 ml-11"></span> Guida non disponibile
                    </div>
                </div>
            </div>






        </div>


        <!-- Title Prenota la Guida -->
        <div class="relative mt-28 text-center px-2">
            <h1
                class="mb-4 text-4xl w-80 md:w-full font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">
                Prenota <mark class="px-2 text-white bg-blue-600 rounded">Subito</mark> la tua guida</h1>
        </div>

        <!-- Form Prenotazione -->
        <div class="relative mt-16 w-4/6" style="max-width:840px; ">

            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2 relative">
                    <!-- Nome e Cognome -->
                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 ">Nome e
                            Cognome</label>
                        <input type="text" id="nome"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Mario Rossi" required>
                    </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="text" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="asd@email.com" required>
                    </div>
                    <!-- Numero di Telefono -->
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone number</label>
                        <input type="tel" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="3479867773" required>
                    </div>
                    <!-- Numero di persone -->
                    <div>
                        <label for="numPersone" class="block mb-2 text-sm font-medium text-gray-900 ">Numero di
                            Persone</label>
                        <input type="number" id="numPersone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="1" required>
                    </div>
                    <!-- Selezione Percorso -->
                    <div>
                        <label for="percorso" class="block mb-2 text-sm font-medium text-gray-900 ">Percorso</label>
                        <select id="percorso"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required="required">
                            <option value="">Seleziona percorso</option>
                            <option value="1">Percorso Uno</option>
                            <option value="2">Percorso Due</option>
                            <option value="3">Percorso Tre</option>

                        </select>
                    </div>

                    <!-- Seleziona Data -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                            style="    padding-top: 24px;">
                            <svg aria-hidden="true" class="w-5  text-gray-500 " fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <label for="data" class="block mb-2 text-sm font-medium text-gray-900 ">Seleziona Data</label>
                        <input datepicker datepicker-autohide datepicker-format="yyyy-mm-dd" type="text" id="dataPicker"
                            required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                            placeholder="Seleziona Data">
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">

                        <input type="checkbox" value="" id="checkTerm"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300  "
                            required>
                    </div>
                    <label for="checkTerm" class="ml-2 text-sm font-medium text-gray-900 ">I agree with the <a href="#"
                            class="text-blue-600 hover:underline ">terms and conditions</a>.</label>
                </div>
                <button type="button" id="submitButton"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center   ">Invia</button>
            </form>

        </div>


        <!-- Spazio Bianco -->
        <div class="pt-48"></div>


        <!-- Footer -->
        <div class="bottom-0 w-full">
            <img src="/assets/img/calascioAntica/footerCastello.png" alt="footer con imagine del castello"
                class="w-full">
        </div>
    </div>

    <!-- Menu Dopo L apertura -->
    <div id="menuOpen"
        class="hidden fixed bg-black z-50 bg-opacity-10 backdrop-blur-xl w-screen grid grid-cols-1 content-center"
        style="top:80px; height: 300px;">
        <ul class="text-center text-white text-xl grid gap-4">
            <li><a href="/">Home</a></li>
            <li><a href="/pages/infoCalascio/">Calascio Antica</a></li>
            <li><a href="/pages/dashboard/">Login Guida</a></li>
            <!-- <li><a href="/pages/prenotazione/">Prenotazione</a></li> -->
        </ul>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            //Variabili globalo
            var datePrimoCalendario = [];
            var dateSecondoCalendario = [];
            var dateTerzoCalendario = [];


            //Funzione che renderizza i calendari dopo che sono stati recuperati i dati dal file json
            function renderCalendari() {
                const calendar = new VanillaCalendar('#calendar', {
                    settings: {
                        lang: 'it',
                        visibility: {
                            weekend: false,
                        },
                        selection: {
                            day: false,
                        },
                        selected: {
                            dates: datePrimoCalendario,
                        },
                    },
                });
                const calendar2 = new VanillaCalendar('#calendar2', {
                    settings: {
                        lang: 'it',
                        visibility: {
                            weekend: false,
                        },
                        selection: {
                            day: false,
                        },
                        selected: {
                            dates: dateSecondoCalendario,
                        },
                    },
                });
                const calendar3 = new VanillaCalendar('#calendar3', {
                    settings: {
                        lang: 'it',
                        visibility: {
                            weekend: false,
                        },
                        selection: {
                            day: false,
                        },
                        selected: {
                            dates: dateTerzoCalendario,
                        },
                    },
                });
                calendar.init();
                calendar2.init();
                calendar3.init();
            }


            //Recupero dati per il render dei calendari
            $.getJSON("/assets/js/storeData.json?versione=<?php echo time();?>", function (data) {
                //Salvo le varie date gia prenotate per il render sui vari calendari
                $.each(data, function (i, l) {
                    switch (l.percorso) {
                        case '1':
                            datePrimoCalendario.push(l.data)
                            break;
                        case '2':
                            dateSecondoCalendario.push(l.data)
                            break;
                        case '3':
                            dateTerzoCalendario.push(l.data)
                            break;
                        default:
                            ;
                    }
                });
                renderCalendari() //dati recuperati faccio il render dei calendari
            }).fail(function () {
                console.log("An error has occurred.");
            });
           
            //Invio Form
            $("#submitButton").click(function () {
                if ($("#nome").val() != "" && $("#email").val() != "" && $("#phone").val() != "" && $("#numPersone").val() != "" && $("#percorso").val() != "" && $("#dataPicker").val() && $('#checkTerm').is(":checked")) {
                    $.ajax({
                        type: "POST",
                        url: "salvaDatiForm.php",
                        data: {
                            nome: $("#nome").val(),
                            email: $("#email").val(),
                            numTel: $("#phone").val(),
                            numPersone: $("#numPersone").val(),
                            percorso: $("#percorso").val(),
                            data: $("#dataPicker").val()
                        },
                        cache: false,
                        success: function (data) {
                            console.log(data);
                            window.location.replace('/pages/prenotazione/pagamento.php');
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr);
                        }
                    });
                } //fine if del controllo della form
            });

        });
    </script>
</body>

</html>