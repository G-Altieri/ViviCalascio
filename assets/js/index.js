$(document).ready(function () {
   
    /*Imagini Resposive Di Home*/
    if ($(window).width() > 515) {
        $("#img").attr("src", "/assets/img/home/castelloTopHome_large.jpg");
        $('#sfondoCarta').css("background-image", "url(/assets/img/home/carta_large.jpg)");  
        $("#sfondoCastelloDiMezzo").attr("src", "/assets/img/home/SfondoHomeMezzo_large.jpg");
        
    } else {
        $("#img").attr("src", "/assets/img/home/castelloTopHome_small.jpg");
        $('#sfondoCarta').css("background-image", "url(/assets/img/home/carta_small.jpg)");  
        $("#sfondoCastelloDiMezzo").attr("src", "/assets/img/home/SfondoHomeMezzo_small.jpg");
    }

    /*Apertura e Chiusura menu*/
    var isOpen = false;
    var heightMenu =200;
    $("#hamMenu").click(function () {
        $("#hamMenu").toggleClass("active")
        if (isOpen) {
            //Se Aperto lo chiude
            anime.timeline({  },)
            .add({
                targets: '#menuOpen ul li',
                translateY: [0,-200],
                delay: anime.stagger(50)
            },)
            .add({
                targets: '#menuOpen',
                height: [heightMenu, 0],
                easing: 'linear',
                duration: 100,
                complete: function (anim) {
                    $("#menuOpen").addClass("hidden")
                },
            },300 );
           

        } else {
            //Se chiuso lo apre
            $("#menuOpen").removeClass("hidden")
            anime({
                targets: '#menuOpen',
                height: [0, heightMenu],
                easing: 'spring(1, 80, 10, 0)',
                duration: 250,
            });
            anime({
                targets: '#menuOpen ul li',
                translateY: [-300,0],
                delay: anime.stagger(150)
            });
        }
        isOpen = !isOpen;

    });




// Online Javascript Editor for free
// Write, Edit and Run your Javascript code using JS Online Compiler

console.log("Welcome to Programiz!");

function f(x){
    if(x == 0){
        return 1
    }
    if(x == 1){
        return 1
    }
    return 4*f(x-1)-8*f(x-2)
}

console.log(f(8));


}); 