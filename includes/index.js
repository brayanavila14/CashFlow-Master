$(document).ready(function () {
    // Obtén referencias a los elementos HTML que necesitas
    const inicioLink = $('nav ul li:nth-child(1) a');
    const productosLink = $('nav ul li:nth-child(2) a');
    const transaccionesLink = $('nav ul li:nth-child(3) a');
    const informesLink = $('nav ul li:nth-child(4) a');
    const contenidoMain = $('main');

    // Función para cargar y mostrar el contenido desde un archivo
    function cargarContenido(url) {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                contenidoMain.html(data);
            },
            error: function () {
                contenidoMain.html('<p>Error al cargar la página.</p>');
            }
        });
    }

    // Agrega eventos de clic a los enlaces de navegación
    inicioLink.on('click', function (event) {
        event.preventDefault();
        cargarContenido('pages/inicio.php');
    });

    productosLink.on('click', function (event) {
        event.preventDefault();
        cargarContenido('pages/productos.php');
    });

    transaccionesLink.on('click', function (event) {
        event.preventDefault();
        cargarContenido('transacciones.php');
    });

    informesLink.on('click', function (event) {
        event.preventDefault();
        cargarContenido('informes.php');
    });

    // Mostrar el contenido de inicio por defecto al cargar la página
    cargarContenido('pages/inicio.php');
});
