$(document).ready(function () {
    $('a[href="#about"]').on('click', function (event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace

        // Desplazamiento suave hacia el elemento objetivo
        $('html, body').animate({
            scrollTop: $('#about').offset().top // Calcula la posición del elemento
        }, 1000); // Duración de la animación en milisegundos (1 segundo)
    });
})

$(document).ready(function () {
    $('a[href="#contact-cta"]').on('click', function (event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace

        // Desplazamiento suave hacia el elemento objetivo
        $('html, body').animate({
            scrollTop: $('#contact-cta').offset().top // Calcula la posición del elemento
        }, 1000); // Duración de la animación en milisegundos (1 segundo)
    });
})

$(document).ready(function () {
    $('a[href="#courses"]').on('click', function (event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace

        // Desplazamiento suave hacia el elemento objetivo
        $('html, body').animate({
            scrollTop: $('#courses').offset().top // Calcula la posición del elemento
        }, 1000); // Duración de la animación en milisegundos (1 segundo)
    });
});